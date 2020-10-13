<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title>Profesjonalne strony internetowe| Realizacje | Rbcode.pl</title>
	<meta name="description" content="Profesjonalne strony www wykonane przez nas. Sprawdź nasze realizacje stron internetowych oraz efekty naszych działań w pozycjonowaniu stron internetowych!">
	<meta name="keywords" content="realizacje stron internetowych, profesjonalne strony internetowe, profesjonalne strony www, profesjonalne tworzenie stron, profesjonalne projektowanie stron internetowych, profesjonalne strony,profesjonalne projektowanie stron www">
	<link rel="canonical" href="https://rbcode.pl/realizacje-stron-internetowych">
	<script type="application/ld+json">
		 {
				"@context": "https://schema.org/",
				"@type": "WebPage",
				"@id": "#WebPage",
				"url": "https://rbcode.pl/realizacje-stron-internetowych",
				"name": "Profesjonalne strony internetowe wykonane przez nas. Realizacje stron internetowych, kodowania mailingów, landing page i efekty pozycjonowania stron przez nas | Rbcode.pl",
				"description": "Profesjonalne strony www. Strony www stworzone zgodnie najlepszymi wytycznymi dotyczącymi tworzenia stron, zapewniające poprawne indeksowanie i wyświetlanie stron na urządzeniach mobilnych. Zapoznaj się z realizacjami stron internetowych i zapytaj o ofertę dopasowaną do twoich potrzeb!",
				"inLanguage": "pl-PL",
				"isPartOf": {
					"@context": "https://schema.org/",
					"@type": "WebSite",
					"@id": "#WebSite",
					"url": "https://rbcode.pl/",
					"name": "Tworzenie stron internetowych Stalowa Wola, pozycjonowanie stron Stalowa Wola oraz kodowanie mailingów reklamowych | Rbcode.pl",
					"description": "Profesjonalne strony internetowe Stalowa Wola. Pozycjonowanie stron internetowych, kodowanie mailingów. Tworzymy nowoczesne i responsywne strony internetowe zoptymalizowane pod wyszukiwarkę Google. Strony internetowe tworzymy zgodnie z najlepszymi praktykami. Nasze strony www są bezpieczne i szybkie. Pozycjonowanie stron internetowych stworzonych przez nas już od początku jest łatwiejsze! Optymalizujemy działające strony internetowe w celu poprawy widoczności w wynikach wyszukiwania! Prowadzisz kampanie e-mail marketingowe i potrzebujesz zakodować szablon wiadomości e-mail? Wykonamy kodowanie mailingów zgodne z twoimi wytycznymi lub według dostarczonego szablonu psd. Zapraszamy do kontaktu z nami!",
					"inLanguage": "pl-PL"
				}
			}
	</script>
	<?php
	include_once "includes/main-config-inc.php";
	include_once "includes/navigation-inc.php";
	include_once "classes/db.connect.class.php";
	include_once "classes/projects.class.php";
	include_once "classes/showprojects.class.php";
	?>
<!-- === Page Content === -->
<div class="container-fluid p-0">

<!-- === Banner Section  === -->
	<div class="row m-0">
		<div class="col-12 baner-section">
			<div class="baner-inside" title="Nowoczesne i profesjonalne strony internetowe">
				<div class="col-lg-4 col-md-12 col-sm-12 p-0">
						<p class="our-partners">Nasze najnowsze realizacje</p>
						<h1 class="font-kenit"><span class="one-letter">P</span>rofesjonalne strony intern<span class="one-letter">e</span>towe</h1>
				</div>
		</div>
	</div>
</div> <!-- === Banner Section End === -->
<!-- === Container === -->
<div class="container mx-auto">
	<div class="row">
		<div class="col-12 pricing-section text-center">
			<div class="center-content my-auto">
			 <h2 class="section-title font-kanit"><span class="one-letter">P</span>rofesjonalne strony www <span class="one-letter">z</span>aprojektowane i wykonane przez nas</h2>
			 <p class="pl-3 pr-3  font-merriweather">
				 Tworzymy <strong>profesjonalne strony internetowe</strong>, które w pełni spełnią Państwa oczekiwania i dopasują się do charakteru prowadzonej przez Państwa działaności. <strong>Realizacje stron internetowych</strong> wykonanych przez nas obejmują rozbudowane strony internetowe ale również proste wizytówki firmowe, landing page oraz szablony e-mail wysyłane przez naszych klientów w różnego rodzaju kampaniach marketingowych. Znajdują się tu także efekty optymalizacji i pozycjonowania stron, nad którymi mieliśmy okazję pracować.
			</p>
		</div>
	 </div>
	</div>
</div> <!-- === Container End === -->

 <div class="container">
 		<div class="row mb-5">
 			<?php

 				$showObject = new ProjectsView();
 				$showObject->showProjects();

 			  ?>
 		</div>


   </div><!-- === Container End === -->
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

<?php include_once "includes/footer-inc.php"; ?>

</body>
</html>
