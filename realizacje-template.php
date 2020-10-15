<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<?php
      include_once "includes/main-config-inc.php";
      include_once "includes/navigation-inc.php";
  ?>
	<style>
.container-fluid{height: auto;
  background-color: red; /* For browsers that do not support gradients */
  background-image: linear-gradient(180deg, #454545 0%, #d2d2d2 280px, #fff 100%);}
	.card{border:none;}
	.realization-img {
	  height: 400px;
	  object-fit: contain;
		display:flex;
		margin:auto;
	}
	p{color:#000;}
.realization-minus{margin-top:-85px;}
.container-start{padding-top:150px;}


	</style>
  <!-- Zmienne do bazy -->
  <title>{page-title}</title>
  <meta name="description" content="{$pageDescription}">
  <meta name="keywords" content="strony internetowe, tworzenie stron internetowych,{$pageKeywords}">
  <link rel="canonical" href="https://rbcode.pl/realizacje-stron-internetowych/{$pageSlug}"> <!-- do przemyslenia -->
  <script type="application/ld+json">
     {
        "@context": "https://schema.org/",
        "@type": "WebPage",
        "@id": "#WebPage",
        "url": "https://rbcode.pl/realizacje-stron-internetowych/{$pageSlug}",
        "name": "{schema-title}",
        "description": "{schema-description}",
        "inLanguage": "pl-PL"
        }
      }
  </script>


  <!-- === Page Content === -->
<div class="container-fluid realization-minus p-0">
<div class="container container-start">

	<div class="row m-0 ">
		<div class="col-4 m-auto text-center">
			<h5 class="realization-title"><a href="https://{$url}">{realization-url}</a></h5>
			<p class="realization-text">{partial-content-of-description}Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
		</div>

		<div class="col-8">
			<img src="https://rbcode.pl/images/Projekty/strona internetowa fitbox.png" class="realization-img" alt="{img-path}">
		</div>
	</div>

	<div class="row m-0 ">
		<div class="col-4 m-auto text-center">
			<h5 class="realization-title"><a href="https://{$url}">{realization-url}</a></h5>
			<p class="realization-text">{partial-content-of-description}Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
		</div>

		<div class="col-8">
			<img src="https://rbcode.pl/images/Projekty/strona internetowa fitbox.png" class="realization-img" alt="{img-path}">
		</div>
	</div>


</div>

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

  <?php
      include_once "includes/footer-inc.php";
      include_once "includes/cookies-inc.php";
  ?>
