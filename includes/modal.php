<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="modal-box">
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content clearfix">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <div class="modal-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <h3 class="title text-center">Wyślij zapytanie</h3>
                                <form action="form-action" method="post" id="message-form">
                                  <div class="form-row">
                                    <div class="col-md-6 form-group">
                                      <input type="text" name="name" class="form-control" id="name" aria-label="Wpisz swoje imię i nazwisko" placeholder="Imię i nazwisko" required oninvalid="this.setCustomValidity('Proszę podać imię i nazwisko')" oninput="this.setCustomValidity('')">
                                    </div>
                                    <div class="col-md-6 form-group">
                                      <input type="email" class="form-control" name="email" id="email" aria-label="Wpisz swój adres e-mail" placeholder="E-mail" required oninvalid="this.setCustomValidity('Proszę podać adres e-mail')" oninput="this.setCustomValidity('')">
                                    </div>
                                  </div>
                                  <div class="form-row">
                                  <div class="col-md-8 form-group">
                                    <input  type="Text" id="subject" class="form-control" name="subject" aria-label="Wpisz temat wiadomości" placeholder="Temat wiadomości" required oninvalid="this.setCustomValidity('Proszę uzupełnić temat wiadomości')" oninput="this.setCustomValidity('')">
                                  </div>
                                  <div class="col-md-4 form-group">
                                    <input type="text" class="form-control" name="phone" id="phone" aria-label="Podaj swój numer telefonu" placeholder="Numer telefonu" required oninvalid="this.setCustomValidity('Podaj numer telefonu')" oninput="this.setCustomValidity('')">
                                  </div>
                                </div>
                                  <div class="form-group">
                                    <textarea class="form-control" name="message" aria-label="Wpisz swoją wiadomość do nas" rows="5" data-rule="required" required oninvalid="this.setCustomValidity('Uzupełnij treść wiadomości')" oninput="this.setCustomValidity('')" placeholder="Wiadomość"></textarea>
                                  </div>
                                  <div class="text-center">
                                    <div class="slide-in d-flex justify-content-center mx-auto">
                                      <button class="g-recaptcha btn btn-wycena" aria-pressed="true" aria-label="Wyślij wypełniony formularz wyceny zlecenia" id="form-btn" name="send-message" data-sitekey="6Le-RqEbAAAAAAfTJ2AFly2kjgOS7e5mpOub3jB0" data-callback='onSubmit'>Wyślij wiadomość</button>
                                      <div class="slide-eff"></div>
                                    </div>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
