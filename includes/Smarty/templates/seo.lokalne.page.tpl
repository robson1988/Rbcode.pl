<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{$pageTitle}</title>
	<meta name="description" content="{$pageDescription}">
	<meta name="keywords" content="{$pageKeywords}">
	<link rel="canonical" href="https://rbcode.pl/strony-iternetowe/{$pageSlug}">
	<meta property="og:title" content="{$pageTitle}">
	<meta property="og:description" content="{$pageDescription}">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://rbcode.pl/strony-iternetowe/{$pageSlug}">
	<meta property="og:image" content="https://rbcode.pl/images/schema-img.png">
	<!----=== Schema ===-->
	<script type="application/ld+json">
		{
			"@context": "https://schema.org/",
			"@type": "WebPage",
			"@id": "#WebPage",
			"url": "https://rbcode.pl/strony-iternetowe/{$pageSlug}",
			"name": "{$pageTitle}",
			"description": "{$pageDescription}",
			"inLanguage": "pl-PL",
			"isPartOf": {
				"@context": "https://schema.org/",
				"@type": "WebSite",
				"@id": "#WebSite",
				"url": "https://rbcode.pl/",
				"name": "Sklepy i Strony Internetowe | Pozycjonowanie Stron | Rbcode",
				"description": "Strony internetowe oraz sklepy internetowe na zamówienie. Indywidualny projekt oraz szybka realizacja. Pozycjonujemy strony www. Daj się poznać z dobrej strony!",
				"inLanguage": "pl-PL"
			}
		}
	</script>
	<script type="application/ld+json">
	{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "Rbcode",
  "image": "https://rbcode.pl/images/schema-img.png",
  "@id": "",
  "url": "https://rbcode.pl",
  "telephone": "578356352",
  "priceRange": "100 - 5000 PLN",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Okulickiego 1b",
    "addressLocality": "Stalowa Wola",
    "postalCode": "37-450",
    "addressCountry": "PL"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 50.5681161,
    "longitude": 22.0581623
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday"
    ],
    "opens": "09:00",
    "closes": "17:00"
  },
  "sameAs": "https://www.facebook.com/Rbcode.Strony.Internetowe"
}
</script>
	<script type="application/ld+json">
		{
			"@context": "https://schema.org/",
			"@type": "BreadcrumbList",
			"itemListElement": [{
				"@type": "ListItem",
				"position": 1,
				"name": "Home",
				"item": "https://rbcode.pl/"
			}, {
				"@type": "ListItem",
				"position": 2,
				"name": "Strony internetowe",
				"item": "https://rbcode.pl/strony-internetowe"
			}, {
				"@type": "ListItem",
				"position": 3,
				"name": "{$pageSlug}",
				"item": "https://rbcode.pl/strony-internetowe/{$pageSlug}"
			}]
		}
	</script>
	<meta name="author" content="Rbcode">
	<meta name="robots" content="index, follow">
	<link rel="preload" href="/css/mycss.css" as="style">
	<link rel="shortcut icon" href="/images/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/images/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
	<link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/images/faviconapple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="/images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#32302b">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/mycss.css">
	<!-- Fontawasome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!--Fancybox -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<!--Flashy -->
	<link type="text/css" href="/includes/flashy/flashy.min.css" rel="stylesheet">

	<script src="/scripts/lazyload/lazysizes.min.js" async=""></script>
	{literal}
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-M4PFRZT');
	</script>
	<!-- End Google Tag Manager -->{/literal}
</head>

<body>
	{literal}
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4PFRZT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->{/literal}

	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>

	<!-- Your Chat Plugin code -->
	<div class="fb-customerchat" attribution=setup_tool page_id="821844128009738" theme_color="#72ab00" logged_in_greeting="Cześć! Jak mogę Ci pomóc z Twoją stroną internetową?"
		logged_out_greeting="Cześć! Jak mogę Ci pomóc z Twoją stroną internetową?">
	</div>
	{php}
	include_once 'includes/navigation-inc.php';
	{/php}

	<!-- === Page Content === -->
	<div class="container-fluid p-0 pb-sm-0">
		<!-- === Banner Section  === -->
		<div class="row m-0">
			<div class="col-12 baner-image">
				<div class="baner-inside">
					<div class="col-lg-4 col-md-12 col-sm-12 p-0">
						<p class="our-partners"><span style="text-transform:capitalize;">{$pageH1}</span></p>
						<h1 class="font-kenit"><span class="one-letter">S</span>trony internetowe <span style="text-transform:uppercase;">{$pageH1}</span></h1>
					</div>
				</div>
			</div>
		</div> <!-- === Banner Section End === -->

		<!-- <div class="col-md-12 col-sm-12 pb-2 p-0">
			<img src="https://{php} echo $_SERVER['HTTP_HOST'];{/php}/images/Seo/{$imageOne}.webp" class="img-fluid baner-image lazyload" alt="{$imageOne}" title="{$imageOne}">
		</div> -->
		<div class="container city-page pb-0">
			<div class="row m-0 p-0 pb-0">
				<div class="col-sm-12 p-0 m-auto">
					<p class="realization-text font-merriweather p-3">{$textOne}</p>
				</div>
			</div>
			<div class="row mb-3 p-0 m-0">
				{php}

				$showObject = new SeoLocalPagesView();
				$showObject->showPages();

				{/php}
			</div>

		</div><!-- === Container End === -->

		<!-- === Contact Section === -->
		<div class="row m-0 pb-md-5 pb-sm-0">
			<div class="col-12 form-section">
				<div class="d-flex justify-content-center mt-md-5 mb-1">
					<p>Potrzebujesz stronę internetową? Chcesz zwiększyć widoczność swojej strony w Google? Sprawdź moją ofertę!</p>
				</div>
				<div class="row d-flex justify-content-center">
					<a href="/strony-internetowe" title="Strony internetowe " class="btn btn-call-to-action btn-lg m-2">Strony internetowe &raquo;</a>
					<a href="/pozycjonowanie-stron-internetowych" title="Pozycjonowanie stron" class="btn btn-call-to-action btn-lg m-2">Pozycjonowanie &raquo;</a>
				</div>
			</div>
			<div class="col-12 contact-line" id="kontakt">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<div class="row align-middle info-section-1">
							<a href="tel:+48578356352" class="d-flex align-items-center" title="Skontaktuj się z nami pod numerem telefonu 578356352"><i class="fas fa-phone"></i> +48 578 356 352</a>
						</div>
					</div>
					<div class="col-sm-12 col-md-6">
						<div class="row align-middle info-section-2">
							<p class="contact-info d-flex align-items-center"><i class="fas fa-envelope"></i> office.rbcode@gmail.com </p>
						</div>
					</div>
				</div>
			</div>
		</div>

	<div class="container city-page-two mb-md-3 mb-sm-0 pt-3">
			<div class=" col-sm-12 m-auto text-left">
				<div class="row">
					<div class="col-12">
						<h2 class="section-title font-kanit">{$titleText2}</h2>
						<hr class="line">
						<div class="realization-text pb-4 font-merriweather p-3">{$textTwo}</div>
					</div>
				</div>
			</div>
		</div>

		{php}

		$advert = new ShowAdverts();
		$advert->showAvailableAdverts();

		{/php}

	<div class="container city-page-two mb-md-5 mb-sm-0 pt-3">
		<div class="row m-0">
		 <div class="col-sm-12 mb-2 p-0">
			 <div class="center-content my-auto p-3">
				<h3 class="section-title font-kanit ">Na co sta<span class="one-letter">w</span>iamy nacisk w naszych proje<span class="one-letter">k</span>tach</h3>
				<hr class="line">
			 </div>
		 </div>
		</div>
		<div class="row m-0">
				<div class="col-md-3 col-sm-6">
						<div class="serviceBox">
								<div class="service-icon">
										<img data-src="https://{php} echo $_SERVER['HTTP_HOST'];{/php}/images/code-solid.svg" class="lazyload" style="width:50px;" alt="Kod źródłowy" title="Lekki kod strony www">
								</div>
								<h3 class="title font-kanit">Lekki kod źródłowy</h3>
						</div>
				</div>
				<div class="col-md-3 col-sm-6">
						<div class="serviceBox">
								<div class="service-icon">
									<a href="https://www.w3.org/" target="_blank" rel="nofollow noopener" title="Strona W3C">
										<p class="test">W3C</p>
									</a>
								</div>
								<h3 class="title font-kanit">Zgodność z standardami W3C</h3>
						</div>
				</div>
				<div class="col-md-3 col-sm-6">
						<div class="serviceBox">
								<div class="service-icon">
										<img data-src="https://{php} echo $_SERVER['HTTP_HOST'];{/php}/images/tachometer-alt-solid.svg" class="lazyload" style="width:60px;" alt="Szybkie ładowanie" title="Szybkie strony www">

								</div>
								<h3 class="title font-kanit">Szybkość ładowania</h3>
						</div>
				</div>
				<div class="col-md-3 col-sm-6">
						<div class="serviceBox">
								<div class="service-icon">
										<img src="https://{php} echo $_SERVER['HTTP_HOST'];{/php}/images/mobile-alt-solid.svg" class="lazyload" style="width:40px;" alt="Responsywność" title="Responsywne strony www">
								</div>
								<h3 class="title font-kanit">Responsywność stron</h3>
						</div>
				</div>
		</div>
			<div class="row m-0">
				<div class="col-sm-12 m-auto text-left">
					<div class="realization-text font-merriweather p-3">Jeśli są Państwo zainteresowani naszymi usługami zapraszamy do kontaktu z nami w celu ustalenia szczegółów dotyczących stworzenia strony internetowej. <strong><span style="text-transform:capitalize;">{$pageH1}</span></strong> i okolice to nasz teren na którym działamy. Jeśli będzie taka potrzeba chętnie spotkamy się osobiście!</div>
				</div>
			</div>

			<div class="row m-0">
				<div class="col-sm-12 m-auto call-to-action">
					<img src="https://{php} echo $_SERVER['HTTP_HOST'];{/php}/images/Seo/strony-internetowe.webp" class="img-fluid lazyload" alt="Strony internetowe {$pageH1} i okolice" title="Strony internetowe {$pageH1}">
					<div class="form-section call-to-action-form">
						<div class="d-flex justify-content-center mt-md-5 md-sm-0 mb-2">
							<p>Potrzebujesz strony internetowej lub chcesz poprawić jakość działania swojej istniejącej strony? Napisz do nas a na pewno pomożemy!</p>
						</div>
						<button class="btn call-to-action-btn-form btn-lg mx-auto" aria-label="Napisz do nas" data-toggle="modal" data-target="#myModal">Napisz do nas &raquo;</button>
					</div>
			</div>
	</div>
</div>
