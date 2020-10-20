<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <title>{$pageTitle}</title>
  <meta name="description" content="{$pageDescription}">
  <meta name="keywords" content="strony internetowe, tworzenie stron internetowych, {$pageKeywords}">
  <link rel="canonical" href="{$homeUrl}/realizacje-stron-internetowych/{$pageSlug}"> <!-- do przemyslenia -->
  <script type="application/ld+json">
     {
        "@context": "https://schema.org/",
        "@type": "WebPage",
        "@id": "#WebPage",
        "url": "{$homeUrl}/realizacje-stron-internetowych/{$pageSlug}",
        "name": "{$pageTitle}",
        "description": "{$pageDescription}",
        "inLanguage": "pl-PL"
        }
      }
  </script>
  <meta name="author" content="Rbcode.pl">
  <meta name="robots" content="index, follow">
  <link rel="preload" href="{$homeUrl}/css/mycss.css" as="style">
  <link rel="shortcut icon" href="{$homeUrl}/images/favicon/favicon.ico" type="image/x-icon">
  <link rel="icon" href="{$homeUrl}/images/favicon/favicon.ico" type="image/x-icon">
  <link rel="icon" type="image/png" sizes="32x32" href="{$homeUrl}/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="{$homeUrl}/images/favicon/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="57x57" href="{$homeUrl}/images/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="{$homeUrl}/images/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="{$homeUrl}/images/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="{$homeUrl}/images/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="{$homeUrl}/images/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="{$homeUrl}/images/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="{$homeUrl}/images/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="{$homeUrl}/images/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="{$homeUrl}/images/faviconapple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="{$homeUrl}/images/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="{$homeUrl}/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="{$homeUrl}/images/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="{$homeUrl}/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="{$homeUrl}/images/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{$homeUrl}/images/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#32302b">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{$homeUrl}/css/mycss.css">
    <!-- Fontawasome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <script src="{$homeUrl}/scripts/lazyload/lazysizes.min.js" async=""></script>
  {literal}
  <!-- Global site tag (gtag.js) - Google Analytics-->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124227301-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-124227301-2');
  </script>
  {/literal}
</head>
  <body>
{php}
   include_once 'includes/navigation-inc.php';
{/php}

  <!-- === Page Content === -->
<div class="container-fluid realization-minus p-0">
<div class="container container-start">
<h1 class="hidden">{$pageH1}</h1>
	<div class="row pb-5">
		<div class="col-md-3 col-sm-12 m-auto text-center order-md-1 order-12">
			<div class="realization-tags d-inline-block mb-3">
				{foreach $tags as $tag} <small class="text-muted">{$tag}</small> {/foreach}</div>
			<h2 class="realization-title font-kanit"><a href="https://{$url}" title="{$url}" rel="nofollow noopener" target="_blank">{$url}</a></h2>
			<p class="realization-text font-merriweather">{$textOne}</p>
		</div>

		<div class="col-md-9 col-sm-12 pb-2 order-md-12 order-1">
			<img src="{$homeUrl}/images/Projekty/{$imageOne}.png" class="realization-img img-fluid lazyload" alt="{$imageOne}" title="profesjonalne strony internetowe Stalowa Wola, Tarnobrzeg, Nisko, Sandomierz">
		</div>
	</div>

	<div class="row pt-lg-5 pb-lg-5 pt-sm-1 pb-sm-1">
		<div class="col-md-6 col-sm-12 pr-lg-5">
			<img src="{$homeUrl}/images/Projekty/{$imageTwo}.jpg" class="img-fluid drop-shadow lazyload" alt="{$imageTwo}" title="nowoczesne strony internetowe Stalowa Wola, Tarnobrzeg, Nisko, Sandomierz">
		</div>

		<div class="col-md-6 col-sm-12 m-auto pl-lg-5 text-center">
			<div class="row">
				<div class="col-12 pt-4">
					<h3 class="realization-title font-kanit">{$titleText2}</h3>
					<div class="realization-text pb-4 font-merriweather">{$textTwo}</div>
				</div>

				<div class="col-12">
					<img src="{$homeUrl}/images/Projekty/{$imageThree}.jpg" class="img-fluid drop-shadow lazyload" alt="{$imageThree}" title="strony internetowe tworzenie Stalowa Wola, Tarnobrzeg, Nisko, Sandomierz">
				</div>

			</div>
		</div>

		<div class="col-md-8 col-sm-9 m-auto pr-lg-5 pt-5">
			<div class="row">
				<div class="col-12 pb-4">
					<div class="realization-text font-merriweather">{$textThree}</div>
				</div>

				<div class="col-12">
					<img src="{$homeUrl}/images/Projekty/{$imageFour}.jpg" class="img-fluid drop-shadow lazyload" alt="{$imageFour}" title="strony internetowe dla firm Stalowa Wola, Tarnobrzeg, Nisko, Sandomierz">
				</div>

			</div>
		</div>
		<div class="col-md-4 col-sm-3 pl-lg-5">
			<img src="{$homeUrl}/images/Projekty/{$imageFive}.png" class="realization-img img-fluid lazyload" alt="{$imageFive}" title="responsywne strony internetowe Stalowa Wola, Tarnobrzeg, Nisko, Sandomierz">
		</div>
	</div>

</div><!-- === Container End === -->

<!-- === Contact Section === -->
		<div class="row m-0">
		<div class="col-12 contact-line" id="kontakt">
			<div class="row">
					<div class="col-sm-12 col-md-6 ">
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
</div>
