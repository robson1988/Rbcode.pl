<!-- === Scroll to top === -->
<button onclick="topFunction()" id="go-to-top"><img data-src="https://<?php echo $_SERVER['HTTP_HOST']; ?>/images/arrow-up-solid.svg" class="lazyload" style="width:30px;" alt="Przewiń do początku"></button>
<!-- === Preloader === -->
<div id="preloader">
  <div class="loader">
    <div></div>
    <div></div>
  </div>
</div>

<!-- === Navigation === -->
<nav class="navbar navbar-expand-lg navbar-change" id="navbar">
  <div><a href="/" title="Strona główna Rbcode"><img class="img-fluid" src="/images/logo-małe.png" alt="Rbcode logo" title="Logo Rbcode"></a></div>
  <div class="company-name font-kanit pl-3" id="company-name"><a href="/" title="Strona główna Rbcode">
      <p style="text-shadow: 2px 2px 0px rgb(0 0 0);">Rbcode</p>
    </a></div>
  <button class="hamburger hamburger--elastic ml-auto" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Rozwin menu">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav" id="nav-item-menu" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
      <li class="nav-item dropdown show">
        <a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">OFERTA</a>
        <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink">
          <li itemprop="name"><a itemprop="url" class="dropdown-item" href="/strony-internetowe" title="Tworzenie stron internetowych">Strony internetowe</a></li>
          <li itemprop="name"><a itemprop="url" class="dropdown-item" href="/pozycjonowanie-stron-internetowych" title="Pozycjonowanie stron internetowych">Pozycjonowanie stron</a></li>
          <li itemprop="name"><a itemprop="url" class="dropdown-item" href="/koszt-strony-internetowej" title="Dopasuj koszt strony internetowej">Koszt strony internetowej</a></li>
        </ul>
      </li>
      <li class="nav-item" itemprop="name">
        <a itemprop="url" class="nav-link" href="/realizacje-stron-internetowych" title="Wykonane realizacje przez Rbcode">REALIZACJE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#kontakt" title="Kontakt z nami">KONTAKT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link-phone d-flex justify-content-center align-items-center" href="tel:+48578356352" title="Skontaktuj się znami pod numerem telefonu 578356352"><i class="fas fa-phone pr-2"></i>578 356 352</a>
      </li>
      <li class="nav-item" itemprop="name">
        <div class="slide-in d-flex justify-content-center mx-auto" id="slide-in">
          <a itemprop="url" href="/koszt-strony-internetowej" class="btn btn-wycena" role="button" aria-pressed="true" title="Skorzystaj z bezpłatnej wyceny projektu">WYCEŃ STRONĘ</a>
          <div class="slide-eff"></div>
        </div>
      </li>
    </ul>
  </div>
</nav> <!-- === Navigation End === -->
