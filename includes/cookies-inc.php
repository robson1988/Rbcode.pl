<div class="modal fade" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="false">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!-- === Content === -->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center p-3">
        <h6>Ta strona wykorzystuje pliki cookie</h6>
      </div>
      <!-- === Body=== -->
      <div class="modal-body">

        <img src="images/cookie.png" class="cookie-img" title="Ciasteczka z czekoladą" alt="Ciasteczka ułożone w stos">
        <p>Używamy informacji zapisanych za pomocą plików cookies w celu zapewnienia maksymalnej wygody w korzystaniu z naszego serwisu. Klikając "Akceptuję politykę plików cookies" wyrażasz zgodę na ich użycie. <br>Szczegółowe informacje dotyczące ciasteczek znajdziesz w <a href="#" title="Polityka prywatności" style="color:rgba(114,171,0,1);">Polityce prywatności</a>. Jeśli nie wyrażasz zgody, ustawienia dotyczące plików cookies możesz zmienić w swojej przeglądarce.</p>
      </div>
      <!-- === Footer === -->
      <div class="modal-footer flex-center">
        <a type="button" aria-label="Zakceptuj ciasteczka i zamknij okno" class="btn btn-outline-accept" onclick="setCookie()" id="ModalCookieClose">Akceptuję politykę plików cookies</a>
        <a type="button" aria-label="Zamknij okno modal" class="btn btn-outline-dark" data-dismiss="modal">Zamknij</a>
      </div>
    </div> <!-- === Content End === -->

  </div>
</div>
