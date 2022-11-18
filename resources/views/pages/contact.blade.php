@extends('layouts.contact-master')
@section('content')
    <div class="contact-banner">
        <img src="{{ asset('images/banner4.jpg') }}" alt="">
        <div class="container">
            <div class="contact-title">
                <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit. .</h3>
            </div>
        </div>
    </div>

    <div class="contact-us">
        <div class="container">
            <div class="contact-content">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 mb-5">

                            <h5>Renseignement</h5>
                            <p>Sur quel service voudriez-vous vous renseigner? </p>
                            <button type="button" class="btn-click" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Cliquez ici</button>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Votre Message</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Votre nom:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>

                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Sujet:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Message:</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Fermer</button>
                                        <button type="button" class="btn btn-primary">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4">
                            <h5>Service client</h5>
                            <p>Appelez-nous au +243 848 476 546, concernant vos dépanages et réparations</p>
                        </div>

                        <div class="col-lg-4">
                            <h5>Besoin d'aide?</h5>
                            <p>Envoyez un mail sur: sokin@info-live.cd</p>
                            <p>Service de réservation: +243 901 111 141</p>
                            <p>Veillez noter que vos questions seront traitées par notre service et répondu a un bref délai.
                            </p>

                        </div>

                        <div class="col-lg-4">
                            <h5>Adresse</h5>
                            <p class="adresse">
                                Sokin Ltd <br>
                                10, Avenue des oliviers (ref: Utex Africa)<br>

                                Commune de Ngaliema <br>
                                Kinshasa <br>
                                RDC </p>

                        </div>

                        <div class="col-lg-4">
                            <h5>Visitez-nous</h5>
                            <div class="social-media d-flex justify-content-start align-items-center g-4">
                                <a href="">
                                    <i class="bi bi-facebook"> </i>
                                </a>
                                <a href="">
                                    <i class="bi bi-instagram"> </i>
                                </a>


                                <a href="">
                                    <i class="bi bi-google"> </i>
                                </a>

                                <a href=""><i class="bi bi-whatsapp"> </i>
                                </a>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
