(function () {

    'use strict';

    var through2 = require('through2'),
        fs = require('fs'),
        cheerio = require('cheerio'),
        gutil = require('gulp-util'),
        path = require('path'),
        async = require('async'),
        favicons = require('favicons');

    module.exports = function (params) {

        var existingTags = [
            'link[rel^="apple-touch-icon"]',
            'link[rel^="apple-touch-startup-image"]',
            'link[rel="icon"]',
            'link[rel="mask-icon"]',
            'link[rel="manifest"]',
            'link[rel="shortcut icon"]',
            'link[rel="yandex-tableau-widget"]',
            'meta[name="apple-mobile-web-app-capable"]',
            'meta[name="mobile-web-app-capable"]',
            'meta[name^="msapplication"]',
            'meta[name="theme-color"]',
            'meta[property="og:image"]'
        ];

        function updateDocument(document, code, callback) {
            var options = { encoding: 'utf8' };
            async.waterfall([
                function (callback) {
                    fs.readFile(document, options, function (error, data) {
                        return error ? callback(null, null) : callback(error, data);
                    });
                },
                function (data, callback) {
                    if (data) {
                        var $ = cheerio.load(data, { decodeEntities: false }),
                            target = $('head').length > 0 ? $('head') : $.root();
                        async.each(existingTags, function (tag, callback) {
                            $(tag).remove();
                            return callback(null);
                        }, function (error) {
                            target.append(code.join('\n'));
                            return callback(error, $.html().replace(/^\s*$[\n\r]{1,}/gm, ''));
                        });
                    } else {
                        return callback(null, code.join('\n'));
                    }
                },
                function (html, callback) {
                    fs.writeFile(document, html, options, function (error) {
                        return callback(error);
                    });
                }
            ], function (error) {
                return callback(error);
            });
        }

        function processDocuments(documents, html, callback) {
            async.each(documents, function (document) {
                updateDocument(document, html, function (error) {
                    return callback(error);
                })
            }, function (error) {
                return callback(error);
            });
        }

        function gulpError(message) {
            return new gutil.PluginError('gulp-favicons', message);
        }

        function vinyl(object) {
            return new gutil.File({
                path: object.name,
                contents: Buffer.isBuffer(object.contents) ? object.contents : new Buffer(object.contents)
            });
        }

        return through2.obj(function (file, encoding, next) {

            var self = this, documents, $;

            if (file.isNull()) {
                return next(null, file);
            }

            if (file.isStream()) {
                return next(gulpError('Streaming not supported'));
            }

            async.waterfall([
                function (callback) {
                    favicons(file.contents, params, function (error, response) {
                        return callback(error, response);
                    });
                },
                function (response, callback) {
                    async.each(response.images, function (image, callback) {
                        self.push(vinyl(image));
                        return callback();
                    }, function (error) {
                        return callback(error, response);
                    });
                },
                function (response, callback) {
                    async.each(response.files, function (file, callback) {
                        self.push(vinyl(file));
                        return callback();
                    }, function (error) {
                        return callback(error, response);
                    });
                },
                function (response, callback) {
                    if (params.html) {
                        documents = (typeof params.html === 'object' ? params.html : [params.html]);
                        processDocuments(documents, response.html, function (error) {
                            return callback(error);
                        });
                    } else {
                        return callback(null);
                    }
                }
            ], function (error) {
                return next(error);
            });

        });

    };

}());
