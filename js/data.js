var projects = {
  new_future: {
    url: 'new-future.php',
    title: 'New Future website',
    client: 'Department of Education WA',
    brand_colours: ['#fed428', '#ff9933', '#d82243', '#8a6996', '#078092'],
    skills: ['UI/UX development', 'Liferay DXP', 'javascript', 'Freemarker', 'SASS', 'HTML', 'WCAG AA compliant'],
    year: '2021',
    website: 'newfuture.wa.edu.au',
    website_url: '//www.newfuture.wa.edu.au',
    thumbnail: 'new-future-thumb.png'
  }, 
  policies: {
    url: 'policies.php',
    title: 'Policies website',
    client: 'Department of Education WA',
    brand_colours: ['#1078b2', '#aad7eb', '#222', '#ca8620'],
    skills: ['UX development', 'icon design', 'semantic HTML', 'SASS', 'Liferay DXP', 'Freemarker', 'jQuery', 'accessibility'],
    year: '2020',
    website: 'education.wa/policies',
    website_url: '//www.education.wa.edu.au/web/policies',
    thumbnail: 'policies-thumb.png'
  },    
  jobs: {
    url: 'jobs.php',
    title: 'Interactive Job Portal',
    client: 'Department of Education WA',
    brand_colours: ['#1078b2', '#aad7eb', '#222', '#ca8620'],
    skills: ['UX design', 'Maps API', 'jQuery', 'AJAX', 'HTML', 'SASS', 'Liferay DXP', 'Freemarker', 'accessibility'],
    year: '2019',
    website: 'education.wa.edu.au/jobs',
    website_url: '//www.education.wa.edu.au/current-jobs',
    thumbnail: 'jobs-thumb.png'
  },
  fetch: {
    url: 'fetch.php',
    title: 'AngularJS App',
    client: 'iiNet',
    brand_colours: ['#ff8200', '#d21f2a', '#808080', '#0090ab'],
    skills: ['AngularJS', 'HTML', 'Adobe Photoshop', 'SASS', 'UI design', 'UX design'],
    year: '2017',
    website: 'iinet.net.au/tv',
    website_url: '//www.iinet.net.au/tv/fetch',
    thumbnail: 'fetch-thumb.png'
  },
  product_page_redesign: {
    url: 'iinet-plan-pages.php',
    title: 'Product Page Redesign',
    client: 'iiNet',
    brand_colours: ['#ff8200', '#d21f2a', '#808080', '#0090ab'],
    skills: ['HTML5', 'CSS3', 'PHP', 'SASS', 'AngularJS', 'UX design', 'user testing', 'OOCSS & BEM', 'browser testing'],
    year: '2016',
    website: 'iinet.net.au/dsl',
    website_url: '//www.iinet.net.au/internet-products/broadband/naked-dsl',
    thumbnail: 'iinet-plan-pages-thumb.png'
  },
  mobii_manager: {
    url: 'mobii-manager.php',
    title: 'Mobile App Design',
    client: 'iiNet',
    brand_colours: ['#BD1234', '#F78F1D', '#FFF', '#32373B'],
    skills: ['mobile app design', 'UI design', 'UX design', 'interaction design', 'Adobe Photoshop', 'rapid prototype'],
    year: '2014',
    //website: '',
    //website_url: '',
    thumbnail: 'mobii-manager-thumb.png'
  },
  multicomm: {
    url: 'multicomm.php',
    title: 'Multicomm Website',
    client: 'Multicomm',
    brand_colours: ['#FF9725', '#FFBB25', '#0C2D6C', '#3193FD'],
    skills: ['HTML5', 'CSS3', 'jQuery', 'branding', 'PHP', 'UX design', 'interaction design', 'Bootstrap', 'SEO'],
    year: '2015',
    website: 'dev.multicomm.com.au',
    website_url: '//members.iinet.net.au/~doug.hanson/all/multicomm/',
    thumbnail: 'multicomm-thumb.png'
  },
  bankwest: {
    url: 'bankwest.php',
    title: 'Bankwest Digital Creative',
    client: 'Bankwest',
    brand_colours: ['#FF920C', '#E96211', '#FFFFFF', '#33404D'],
    skills: ['digital marketing', 'email marketing', 'HTML', 'CSS', 'Javascript', 'JQuery', 'Fatwire CMS'],
    year: '2010 - 2013',
    //website: 'www.bankwest.com.au',
    //website_url: '//www.bankwest.com.au',
    thumbnail: 'bankwest-thumb.png'
  },
  portfolio: {
    url: 'portfolio.php',
    title: 'Portfolio Website',
    client: 'Doug Hanson',
    brand_colours: ['#727c7d', '#5bc0de', '#d5c3aa'],
    skills: ['JQuery', 'Javascript', 'UI design', 'HTML', 'SASS', 'Gulp', 'PHP'],
    year: '2018',
    website: '~doug.hanson',
    website_url: '//members.iinet.net.au/~doug.hanson/',
    thumbnail: 'portfolio-thumb.png'
  }
};

var projectOrder = ["new_future", "policies", "jobs", "fetch", "product_page_redesign", "mobii_manager", "multicomm", "bankwest"]; //, "portfolio"];