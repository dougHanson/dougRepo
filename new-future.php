<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Doug Hanson">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>New Future website | Doug Hanson | Digital Design and Development, Perth</title>
  <meta name="description" content="New Future website designed and developed by Doug Hanson in Perth, Western Australia.">
  <meta name="keywords" content="web design, web development, front end developer, ux design, perth, doug hanson">

  <!-- build:css -->
  <link rel="stylesheet" href="css/styles.css" media="all">
  <!-- endbuild -->

</head>

<?php
	// DECLARE PROJECT VARIABLE - refer to data.js
	$project = 'new_future';
?>

<body class="project-page" id="<?php echo $project ?>">

  <!-- include frames and nav -->
  <?php include('inc/_nav.php'); ?>

  <div class="wrapper__outer">
    <div class="wrapper__inner">

      <div id="container" class="intro-effect-jam3">

        <!-- heading image -->
        <header class="header">
          <div class="bg-img">
            <img
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAAAcCAYAAAD2izi6AAAWFklEQVRogUWaeaydx3nefzPzbWe9K8l7yUvykiJFibuozYroKLYcRXWiKAuMxKrdpEjSom2MGo3rtEHTIED/aIGiLWpUKIJmQZI/5MSJpQhtIgWWJctSZG2UZImUuIgUycu7L2c/3zIzxcx3SF/w4PKe75s537zzvs/zvM8cUbTW30cwi5UZGNzLCoGVAiEEUkgMAqxBCIm1+PfdC3ePBYu7bCDLsO4G97fwMyGlJFCBG8RosL+uNZisR1AMSWWAjKooN6+UKCn9ePdzc35uDRX+n5vbPaccfbYwFpHU0Frzu1/5dZ586jlOHjxAoqA7yOnlmp7OkVIwGYdkhaGRRExUI653BkRSMF+TfPru2/nn/+1JrGxihr1ybdaW64Vbv4EIWBT52lJPC1O1xhJY6YOi/cO5oRLjHk5aIiORSvlrutAIBDIKy4C7OzUURiOURBm3WuW349Z7toyfVC7oxs/V2Vins7bOzr1zZDLwi4qTmDAIfbC00RRaI91YN6fbMCVHO0a5oW5+t0nNSb+qv/uLP+Lf/Kuvc989JxkMM65t9Mi08YEOlWJzmJK6YGtLHMJks0o/t9SUoBpKos4aX/kXX+Anf/M/+43RaQ984tgfJc6Pfvrqy1/81d9ca/UbG5st2q0+G+0BW+0Bre6AQVaw1RuwudYmzSErCgIfhMAvMDCGgRF+cS4o1zfarCytsdkasLnVJqCgUU0IZIDbliJN6bU6rCwvkw0Kzl68wJ9884/ptbaY2bGT8W0ziMLS77Z9MSgboLX12ZUZQ19rrIZISIQ2mHwIRhBOTrJ15UPefOk5zrzwPIHbOBGx1esx1JqtQUYry/w8U1HE7rEKJ2brxAJqQUjNaHrDnJ4GG1W4eOZtpsMB86c+DTJAF5nfrHLnbmai/7Umfv+3fm1RwEx3kBIEAdU4RGNo93JyExFFoU/vII7pdlaYqDSYv+12tk9PYYucpb5hc+0GiVLcWNugu3GDibEG/UEHXUjuuP1O5uf3EaqE9a0tLn9yge7WEmEQs7a+xLvvv4UK6tx332mOnbiHIKox6PVIKjGRDLDCEIYJqYyx7uGHbaabMdundrC0tMDMzBSt1RX+w+/8JxqR5eC+PVxtGaTVtAYZ79xYpyYVJ7Y1uG2qzr6pJvMqYc/sdpibpN9aZ3VxlTeu3uAHy0PWCkG73Sda/4T/+b//Ow9+4dcxWR/jNu9m9rnsl74SloKa/iGVUBJayHJNM5audii6Q26s5uRxwNhsE92FaxdWuKBT8s4PeXm5oN0bMl6vsrC4RU/3OXpgjOmxCjULzUTwvTeW+Otnn2diapzb9zTYvaPC7PQ0+7dHCDrMjYfM7zjFhasbXPrwdVavnCGME1+m3d6Adifz2Ts+FpNqRS/TbPVapJmgXpsmCjX3H6zTudFFhhVOP3AXaXcTKTLeu7HFdz9e4fh4gy+fnOPIzgmatTqVRg3TziBuMDUzy+7ZBifvu59DH1+g8d1XeHUlZasSMwgtLz/9FA/8xGnktjsQvU2sw+YRLhujfTaKK88/uSismREywPGAR0BryDNNnudEcUilUiNSEcsrW7T6G8zv2cn6Wp+V5U0mGmOESYO19lVmd4wzPjZFmg2JAsWNxQ3eee8TLl3/iF27qzzy4KPsmN7vM9zhqKsDa3P/UFlukWj6gxb9fpfllQXyVJAkTWSQ0uttsbm1ztXFDc5e3uTs5WWSWHH6+DT3HjjI2x9tkWWZL+mLyy1eubLKvkaV3/7xI5w6NEvPRAwLyXgSsn96jI+KRdZlwNHaPJUdcyQzM1x46WmefOa7nF3PmRlvoreW+KVfeITHvvZfwLiMG4IuPDaOMHkp2DFzDO3AEQfWbkESoxx9OFwTPpie5aTk9m2eOiiKnNldEUYrhmlOoBRHg2PkOkM7sHWjrWRqOuLUiZxuZ4tMC6J4gl6vT+oWSvmZgaoyMTFGpRJ70vCEJASHDxt/3TOuce+5bS8Y9jtstR3WrtPrtkiSnBdeO8OrH14DlKf/q90eY7Hiy8fnOLRrDNN3JJJ7iNps9fnLcwtsm4l8GYtEMByuE0WzHHzwNPv/4W2eO3+ZzYGmieT9Dz7i9NsvcEOPUW3WGW9O4rZcBhCHIUGa9kGEWCdWbIFwDyEUudcPwkdciDLiaeBCE4PO6fWHZDbwDC2sJiZCBgbj5vBYobA2K/m+Mk7FQKe7SaENSglKyWQpzICNrYygoyhcpHBZFxKFyUi+lO85EPfkFU+wbWaSXbsPQlSjvfwu595/hdumK1xvWzYHQzbSnJ/dO8M/Orad91fb/MELH/DEvbv4zJFt/MfnLvDH3z/Pz9y5hyefqGGTJYqwSbqxRCXSzM+MUwljzi23mAokjzcbbF37Ac9+502Wszr79x1ifvc+RFhFuAAaPZIC7nFVUGaQ1RgvRSwyVFgXDKmRWvsAucAabTFWI1EIKcj0kCALkEHgx/qEsZmXLt10UL4nLMrJEDdKyZJhhWNaF3gXWLdfhuEgJ88KpFClfJDWz+Puc9gtpSIIFLWGotVuo7MBubVs9DOubGZMJvDl+8eYm6zzzvVFnvt4g0IJTkxXyfopVBOutrp8vNLjgd0Ngo3zyON301td4sPLi0SRYlsjodfp0+u0aFY0VTXg8vmzLCycRxzdTz0epz3UBCIOEa5EC4MNA18q0i02L3wmOlDXrowJRgRuMYXGDJwwxv/f6bNSeFs/l98EX3q2DI4R5YagfXY6WPB4G0iEVNgiQ2eauBkjlXUJ7hMvdzc5qIkkCLepBVpLL84djCA2CK3gymrEBze2KIwkkII9YzXeutHl7WtXGROKo7NjnF0f0s0lv/PQbSwNC08yS52UaGInixshza0WSsU8/2GL6+tdjuyaIm8k1JT21fLQj51is6d540qbVz78mIMzY/SHxjUCKekwZ9AfEFdiLx+GvSF5lpcCtdNHBsoLap891uGURIUJKrToLMXkLrABJhFklJlmfLgsVrsORqFUgLVqVN4uo9wGOQgIiOqu4BXWlWmgkEHhkAN3i4t0NsiJKwFxHOPi5j5fSIMSmo3NNueudX2Zu4ZHqYJjU9O8cUnw9MXz7J+QHqsahLy+tME/ObWLr35qjq9/p8+337/C1X6b164u8Iv3vM8dR05xpWPRwnK93efEdJ2903U6nYLdc4f57P0RijMUtqCSuC7LEKwtb5DlOVlWkAxS+krRT1OPP0U2JB32CaKEOEyo1Ssop9YjJzUsQSBQlRCdGbLU+G5EhapcvLUo45MY7TLHdTK+JE3JviPxHSiXUZHXe1aXwXWREGXjgdUFOh/68cKGGOM2Fr8pTm5dvHSNG1tdhHvuTNMaFsyOV/jUTJMLWx0GkaFTDJmtCd64skJVpexpJvzcHVP82dkFvnXpItuzIT93oMZwbcMTZhhK2v2Cy6stdLQbrCNCw759d5J2u8RRzCBr0+6tEtQm6jSkRCJHfZ+mIcf8Ah1eGApfjq6U4yTyeOioxGjjQA7hiCUIUSYf4RNY6TBN+MB6bA1Cz/AOW105FC5QRhIHgQ+Gwz8nPxC++cO6YGFwCS9USJSMYWyOycvgmiLHipBed5Nhe9VjcLdXeGx1rSJDaOWavdUKeyarXOsPPPHVQ6hKRR5IutmQZmzYe+AID982x/7j44zbBjrNSUPDWAjTtZh8kHmcFjLyJDZ/xxGKIqDbWSPpNwgazVqpa3yvKktWHXW41XrFZ43HMzRZWmAy67jTl4trzF3WuOsuuHjbQXgZ4swC11rrvEDqso92pO7YVDm8TMqW0G2Y/3BGrZJ7hpGpgJdXpXkgbElWDqNF6CohZuX6J4zrPocnxrjR3kQrQxgJrq0O6BNxrp2T523m6iF9FFNBzEMHD5DWY547u8Q+Ek4nmn/9uTupHDzBd//yBwyzASKWhEIQS0GoJGEwgXEegevVowkqtQaV6hhCHEAWuabIHPtZr651bskzRxSl/tO68II67RUUadnga2N88BjJlRLTzC2nxtoyqC5AKkkQgSrHFYaisCWzWmdY5B4pfb367KOseSjrt6SssuzdxsgCqTRxPaG1fJXrZ99D5IajO8bZ3oi9cUGe89p6y9UNc0nCB/2CQgSMiQoX1lLWbZV9t93FE6dO8ejxOWYIeffbP4Rn3mV9YZGtUFNTEdurMbVI0mzWEPVtnhfKDsSg8wGmsBS5oXQFZNki25FnVGo7MQqI9X2g8Q5KKaR9Vrgi8zfkt/4uA1nKH+tYU7vqFYhqgMlDdFGUczktaILy3ls21WgsdtQrjfCQm9kp/Hwqiskzw+r5c4RO8kQJ09WME8qw9Ml1EplzUa1jVgvq42NMVSu80xoSi4K6CfgfL3zAN+67l20TIUfXFJVwG3Njk5BU+ZsPz1JYw1gcsasZs38yYGZmljw3XiqpWtOTnnFVpIy3zoJyu0sd5mrMsZt/x/l/pvT/PCmMHBxfVLJsCH0WjfSZf29kBFrPk3hN6DLM+OsBKgpRBFgfSIvJZUkUTjqJkYk42gy/Dzez0Nzs4ZXHorTTYWt1k1AqJnrrVG5cJ0rqXP+lLxHfc4yHa5qTVy7wzJ/8PRcXUppzY2yrK5oi5sVza7z98nk+vLHI33zvQx7ZlvH4oTqvLZ/n6YWPSVywej2mZhvsn46IlGR6dieri+sUTr4pgVLKmytRIAmsb4pL/LNGoJxoNcZnl/SaT/qSLJNFeA3mAN4FwK3MuHFa+mB6f86brO6a8vrReCJxscl8bKTHNifOc6yTQM6acuPUCOs8AI9M08LeymwHGQ5H3W+TDVhb26Bpu3R27uXPHvspPrj309TvOMxmb8AD3RX+Xf1uHv30fr7y2/+Ltz5Yo1vZRWU+ZW6mzrdf+SE7p/vciCV/sLTAUqB58/1F6oFk3+wM9zYDTsUpe1TOTC2kemAf1SygtdYiDJRPFtcW4gLoouqDp7lljjoRJ52HF9hSb1EGilFJ+3Lz4rhckIMtJ5RdJ+HL14fYeiZXsnSircM6x65e0rheUvrNMoXTbpZC52W3wsi5dlaWGWX6TUwUkiCIyNKUSdtmVTd5/cgvcOH+EzTq8I9XLvDS61fpvf0JC+Mpq5//Ek/813v43PP/npdf7PL6mSpJpcN7F1r89Mw0a1t1ds/2+CgY8lpvO184ILl3xxRXjj/Ea2MC1b2GkYc4tZ5SDQyb3pW/aWlZj7/qa7/2K1/TmrrOs9EzlkaA220XPEsZECdzXFb60h5JHmf3+4wa/bgACg/7xs/lMsj6YImR/lMljgrjhbUYjXWdiwoFyvp6Lp/jpufmEtaU8xR57piJztYarH/CuU82KP7qJX780kfcsd5m9//7PvKZZ5jf1eDYqQ9I1YuESYev/NP3+OITi0jToL/e4ree6PPZnxTsO3mEduXHuJwc4PMPVrieCc6Fk/zfvbdz+fA9rLYUz3zzb3nrW3/LHUcPsXP7OMPhkCzPfBJYY7pesbrm3jiZoIzPhtxYL1gdMzpT1PcJgfRuiC0MWo4Co5weFB66pLe9zS0CcF2yE8dOdjiYMKY8b/HZ5+51fbCDyJsCWstRidtSG5rS9rWlt0+hi1J7UorwXmGZmwjpRYtcfO37xNO7OLY1zm88ehRx15u89AJ87qvneWDqT7HLgmrS4Pd/7xy/9/UU2XRsdIVH1kLeO1fQOr/Ig9u3+Ez9n/G9ZZh48w3GL1/g41dfofPGa+h6jdWNx7lz/x5a3SHDXh/VH5LUas6h1748XSZJV4q2ZEOn+4R3VPAiNHcE4+NjSyPFZZg/GSpxyobSB9bdY4z05ejy1GlC67NTlWTl71dlCZgRJqpR8L20GcGJLZtBd91lp/AOUVk+DjbSPGV3XbHrvr08dcfjdMe2kZx5lYODAdd/oop9aBIVXYIgRrv2s5fDekY41/DKieUtEK9y/MircAqyV+DfjnXpzD7EmRcvU3/6L7hHDvjZ3/hpTv/8I+yYnmdxZQspQ+KkRtrvenmnvvqrX/waWVH3jxYoikwj3EFOMMIdp3Nd1uWlkeh1kPcHHf4pHyAPc26xoSoPYApHHpkXPF7/aesx1dOQGFlTrg104lSL0i6nZN1SypgycCPxOki1t8FcX+3C2uts0r9+gXqWMqxN8MbUYYI//1Nef/lZBpcG3BNOcvLud0m/UzD8u8fImlPU4ut0F2b4q2+cxq41qQUzpOKniCfXgV9EHb2d24/8Obs4SHbsYTbuPckfHq7zucdOMXnoGOurKVmalWaLI1LfgopuUNpY0velrlTcwtxum8yRy8CXlycQShvb3nRaModbIUYIhmlGJK0vcxeKMBCEojw6dNnprCcnyPGZKHz34Uvf45+8dTzps7aUfAyHBcO8IE0Lup2CKIJmVZLEFX/86Q6WbCXx1tWJN57lW4tXyQ7NcnDXNs5+R7Ly+klevdTll7dJ1jePc/WCYf/xKr/77WtMPiv55c+eZKGosWfHp6jVHuazj97FgZOv8zPbvsfD2Wkem7+Pt94ZcGjhMu3iOlne8OaBVwQiII4SXyEBTlG7k7UiJzQCEQQMc41xQQmsr1DLj86CXfa4LMx1QZYXHi8dCIaJwjk7/t5KpWRZDwc3HZjCl+5NzhGj7CrPl6U3DdyHpbmh74LWdW2YJoqhWQ+oVAKiUBAlIaGw/kRNRjGtgaa1ep0rZshnmrNkyvDUji3eaRkuxqv0p/t8fGaBd863ObLQx1bbrAwCnv3Be1xxXmI75PCu/8PUi3s4V9nP5Qdu44kvVfiXvQ7dodukgDzPSNOUJJL+84WKMHmBKVKCIjO2P8y8NaRkSNrN6WUZ1UiVZeqK0xl0/hxZ+smcAi+xqPTfnKXv5I325GPodbqEUVQyuin7X/dypexeys3rnBifmaVodzAw1IZWZ0ia5n68C1wUCILQHc6XQtplclEMEaEikoozy23++vw6u+sJX7hrho8urfP3rRYLRcbOHZL30zYTiWL37ox/WNqknlQ4NC0RxYCkImjGOfPDTT55e42neptsLvQoatPcte8Qh+ihQ8lwKOgNh0irvP6TouzMhHAHr9KOuZJT/tsDJQNWw9CXoRmVq8M6Jz3cw7s0dr6gW7wnSNdRmFLnKVW2a/1+n4rLwlB5IgqC2Aff3V+eixeloW+CUQdkvXvj8LRWCWhUA8/woRL+M7Ms9WZv2RlLbJ5htaaXh8w2En7+th3smKwz1xS0JxQPiBqFqJIEkukkZKwa8o0zPf883jETASenEibTjLXceX+aaw3Nlx6/m/pYzJtPf5OHPn8/dx7dTRFP0esLROHOY1J/cJUkiU+eMAjGAqy+HIbMImTmWrJAlQ95UxiX39QodZzLspuB8yd3eXmC5xjWWT4OH1375rCxKIpSy/mSz/w95SZ5v6skHBlisxybOxFdftuhmrhvO2iyLGfoyMjjZdkyunJXQQR5hikKUvdKNbsnq8zvqLOy2aefarbFTmMKwgjmxmNeXepyqWWYSKoeYgZGUYsC9mKpqIJOGDC/t8KvPDyPrEyxa9hlZ72giCrosOqd8VoQISIn8bRv6aQ0kTVm8f8DtSjpya0GszEAAAAASUVORK5CYII="
              data-src="img/new-future-header.jpg" class="img-center lazy-load" alt="New Future website development" />
          </div>
        </header>

        <!-- heading -->
        <div class="container">
          <div class="col-sm-12 title">
            <h1 class="font-bold grey-6" id="projectTitle"></h1>
          </div>
        </div>

        <article class="content">
          <div class="container">


            <!-- ###############################
						//   Page specific content
						#################################### -->
            <div class="col-lg-9">

              <p class="h3 subheading padding-0 margin-0">At a glance</p>
              <p>The Department of Education wanted to launch a new initiative to try and inspire children and get them excited for their futures in the workforce, and wanted me to <strong>design and develop a campaign website</strong> without it looking like a direct message from the government.</p>
              <p><a class="button margin-bottom-10" href="//www.newfuture.wa.edu.au" target="_blank">www.newfuture.wa.edu</a></p>

              <p class="h3 subheading padding-0 margin-0">The web designs</p>
              <p>I began by creating a bold and <strong>accesible colour palette</strong> centred around Gen Z yellow, which met the <strong>WCAG AA standard contrast ratio</strong> of 4.5:1 , while complementing the colours already being used in the logo provided. When creating the <strong>web designs</strong> I coupled the bright palette with bold colourful imagery including imagery including talent which appeared optimistic, bright, friendly and determined. I also coupled a popular <strong>sans-serif Google font</strong> with a cursive accent font called 'Schoolbell'.<p>
              <img src="img/new-future-palette.png" alt="Colour palette" />

              <p>Because there would eventually be a large amount of content I determined the best approach would be to hide older articles behind a load more button. This provided a <strong>better user experience over infinite scroll</strong>, whilst providing the performance boost of <strong>lazy loading</strong> the hidden content when it was requested.</p>
              <p>There are several different <strong>rich media content</strong> types which the authors could create, such as internal and external articles, videos, images and podcasts. Each one would be fully customisable as to which content would appear. Articles would be sorted by displaying the most recent ones first, but authors had the option to tag articles as 'featured' which would give them priority placement.

              <a href="img/new-future-web-design-1.jpg" data-lightbox="new-future-designs" data-title="New Future web designs">
                <img src="img/loading.gif" data-src="img/new-future-web-design-1.jpg" class="lazy-load img-center img-responsive img-center img-shadow margin-top-40" alt="New future web design" />
              </a>

              <div class="owl-carousel owl-theme">
                <div class="item margin-bottom-40">
                  <a href="img/new-future-web-design-2.jpg" data-lightbox="new-future-designs" data-title="New Future web designs">
                    <img src="img/loading.gif" data-src="img/new-future-web-design-2.jpg" class="lazy-load img-center img-responsive img-center img-frame margin-top-40" alt="New future web design" />
                  </a>
                </div>
                <div class="item margin-bottom-40">
                  <a href="img/new-future-web-design-3.jpg" data-lightbox="new-future-designs" data-title="New Future web designs">
                    <img src="img/loading.gif" data-src="img/new-future-web-design-3.jpg" class="lazy-load img-center img-responsive img-center img-frame margin-top-40" alt="New future web design" />
                  </a>
                </div>
              </div>
              <p class="margin-bottom-20">&nbsp;</p>


              <p class="h3 subheading padding-0 margin-0">The authoring experience</p>
              <p>Created structure in Liferay, thinking about the best UX for the author when laying out the different options for each content type.</p>

              <div class="owl-carousel owl-theme">
                <div class="item margin-bottom-40">
                  <a href="img/new-future-web-authoring-1.jpg" data-lightbox="authoring" data-title="New Future web authoring in Liferay DXP">
                    <img src="img/loading.gif" data-src="img/new-future-web-authoring-1.jpg" class="lazy-load img-center img-responsive img-center img-frame" alt="New Future web authoring in Liferay DXP" />
                  </a>
                </div>
                <div class="item margin-bottom-40">
                  <a href="img/new-future-web-authoring-2.jpg" data-lightbox="authoring" data-title="New Future web authoring in Liferay DXP">
                    <img src="img/loading.gif" data-src="img/new-future-web-authoring-2.jpg" class="lazy-load img-center img-responsive img-center img-frame" alt="New Future web authoring in Liferay DXP" />
                  </a>
                </div>
              </div>
              <p class="margin-bottom-20">&nbsp;</p>

              <p class="h3 subheading padding-0 margin-0">The front-end development</p>
              <p>ftl, jplist with callback to masonry.js, social sharing</p>

              <p>The glitch</p>
              <p>svg filters for glitch effect ties in with logo (show insitu button example)...</p>


              <img src="img/loading.gif" data-src="img/new-future-mobile-cards.png" class="lazy-load img-center img-responsive img-center margin-top-40" alt="New Future web design on Android mobile">


              <!-- website -->
              <!-- <p class="h3 subheading padding-0 margin-0">Website</p>
              <p>Designed and implemented changes to the existing Bankwest website. Was involved with large scale development projects, including a <strong>website refresh</strong> which included defining <strong>taxonomy, information architecture, developing UI and graphical elements</strong>, and generating content. The new website was integrated with an <strong>enterprise content management system</strong>, namely <strong>Fatwire&nbsp;CMS</strong>. </p>
              <div class="item margin-bottom-20">
                <img src="img/loading.gif" data-src="img/bankwest-site.jpg" alt="Bankwest eDM" class="lazy-load img-center img-shadow">
              </div>
              <p>&nbsp;</p> -->

              <p>&nbsp;</p>


            </div>
            <!-- end page specific content -->


            <!-- additional project info -->
            <?php include('inc/_sidebar.php'); ?>


          </div>
          <!-- end container -->

          <!-- next & prev slides -->
          <?php include('inc/_project-slides.php'); ?>

        </article>

      </div>

    </div>
  </div>
  <!-- end iiNet Plan Refreshes -->

  <!-- include footer -->
  <?php include('inc/_footer.php'); ?>

  <!-- page specific scripts -->
  <script>
    // OWL CAROUSEL - initiate Owl Carousel plugin
    $('.owl-carousel').owlCarousel({
      stagePadding: 0,
      //lazyLoad: true,
      loop: false,
      margin: 30,
      nav: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1400: {
          items: 2
        }
      }
    });
  </script>

</body>