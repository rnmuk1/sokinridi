@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-5 overplay">
            <div class=" main-content">
                <h1>
                    Nouvelle Range SE <br> Edition de luxe
                </h1>

                <div class="row">
                    <div class="col-lg-12">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id dignissimos beatae nulla! Nesciunt
                            quo earum explicabo? Dolores accusamus quaerat, eos perferendis, ipsum maxime esse distinctio
                            repellat ipsa asperiores, iure dicta!</p>

                        <a href=""><button type="button" class="btn"> Bookez-le </button> </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('content-details')
    <div class="section-detail">
        <div class="col-lg-12 container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="content-detail">
                        <i class="bi bi-gear"></i>
                        <div class="d-flex align-items-center mt-2">
                            <i class="bi bi-caret-right me-3"></i>
                            <h6> CONFIGUREZ VOTRE VEHICULE</h6>
                        </div>

                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit .</p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <i class="bi bi-calendar2-date"></i>
                    <div class="d-flex align-items-center mt-2">
                        <i class="bi bi-caret-right me-3"></i>
                        <h6> RESERVEZ UN ESSAI</h6>
                    </div>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit .</p>
                </div>

                <div class="col-lg-3">
                    <i class="bi bi-truck-flatbed"></i>
                    <div class="d-flex align-items-center mt-2">
                        <i class="bi bi-caret-right me-3"></i>
                        <h6> TROUVEZ UN VEHICULE NEUF</h6>
                    </div>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit .</p>
                </div>

                <div class="col-lg-3">
                    <i class="bi bi-envelope"></i>
                    <div class="d-flex align-items-center mt-2">
                        <i class="bi bi-caret-right me-3"></i>
                        <h6> PROPOSITION COMMERCIALE</h6>
                    </div>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit .</p>
                </div>
            </div>

        </div>


    </div>

    <div class="section-service">
        <div class="container service-title">
            <h3>Nos services </h3>
            <p>Lorem, ipsum. </p>
        </div>
        <div class="container service-detail">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card card-image">
                                <img src="{{ asset('images/carsale.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 detail">

                            <h5>Ventes automobiles </h5>
                            <p>Sokin, assure la sérénité à ses clients en examinant les caractéristiques
                                des véhicules neufs que nous mettons à leur disposition. </p>
                            <a href="#"><button class="btn"> Retrouvez nos prix </button></a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card card-image">
                                <img src="{{ asset('images/fixing.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 detail">

                            <h5>Service de réparation</h5>
                            <p>Pour tout service et maintenance de vos véhicules, vous êtes sûr de pouvoir compter sur notre équipe rapide pour profiter d'un entretien immédiat, sans rendez-vous, et des recommandations précises d'un professionnel. </p>
                            <a href="#"><button class="btn"> Besoin d'un devis? </button> </a>

                        </div>
                    </div>
                </div>
            </div>
            {{--
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center align-items-center mb-5"> --}}
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-image" style="width:95%;">
                        <img src="{{ asset('images/logistics.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 detail">

                    <h5>Transports & Logistique</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Dignissimos vitae dolores iste, quam obcaecati minus.
                        In neque dolore </p>
                    <a href="#"> <button class="btn" id="ondraw"> Contactez-nous </button> </a>
                    @include('components.contact-us')



                </div>
            </div>


        </div>
    </div>

    </div>

    <div class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-image">
                        <div class="card-image">
                            <div class="card card-pic">
                                <img src="{{ asset('images/car.webp') }}" alt="">
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="about-us ms-5">
                        <h3>A propos</h3>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>

                        <div class="about-content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Deserunt aliquam voluptatum quaerat soluta eius repellat est obcaecati temporibus error,
                                rerum eum mollitia sunt aut. Voluptates dolores a labore, at dolorem asperiores
                                necessitatibus?
                                Reiciendis aperiam consequuntur magnam odio eius ut autem commodi, repudiandae cum illo.
                                Praesentium, laboriosam! Expedita ut error perspiciatis?
                            </p>

                            <div class=" card card-detail mt-5">
                                <div class="description">
                                    <div class="row">

                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-center align-items-center"
                                                style="flex-direction:column;">
                                                <i class="bi bi-cash-coin"></i>
                                                <p>Vente et achat de vos materiels automobiles</p>


                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-center align-items-center"
                                                style="flex-direction:column;">
                                                <i class="bi bi-tools"></i>

                                                <p>Réparations des besoins automobiles</p>


                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="d-flex justify-content-center align-items-center"
                                                style="flex-direction:column;">
                                                <i class="bi bi-truck"></i>
                                                <p>Livraison et Logistique automobile</p>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-team">
        <div class="container">
            <div class="team-title">
                <h3>Notre Staff</h3>
                <p>Un aperçu sur notre staff | La team </p>
            </div>

            <div class="team-content mt-5">

                <div class="row">
                    <div class="col-lg-3">
                        <div class="d-flex justify-content-center align-items-center " style="flex-direction:column;">

                            <div class="card">
                                <img src="{{ asset('images/T1.jpg') }}" alt="">
                            </div>

                            <div class="name">
                                <p>Peter Make</p>
                                <span>Directeur General</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="d-flex justify-content-center align-items-center" style="flex-direction:column;">

                            <div class="card">
                                <img src="{{ asset('images/T2.jpg') }}" alt="">

                            </div>

                            <div class="name">
                                <p>John Doe</p>
                                <span>Manager</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="d-flex justify-content-center align-items-center" style="flex-direction:column;">

                            <div class="card">
                                <img src="{{ asset('images/T3.jpg') }}" alt="">

                            </div>

                            <div class="name">
                                <p>Bruce Lingwa</p>
                                <span>Directeur Marketing</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="d-flex justify-content-center align-items-center" style="flex-direction:column;">

                            <div class="card">
                                <img src="{{ asset('images/T4.jpg') }}" alt="">
                            </div>

                            <div class="name">
                                <p>Bruno Kwake</p>
                                <span>Superviseur</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="d-flex justify-content-center align-items-center"style="flex-direction:column;">
                        <div class="d-flex align-items-center">
                            <div>
                                <i class="bi bi-pin-map me-4"></i>

                            </div>
                            <div class="text-white">
                                <h6>Adresse</h6>
                                <p>20 Avenue des oliviers <br> Ngaliema, 10020</p>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="d-flex justify-content-center align-items-center"style="flex-direction:column;">
                        <div class="d-flex align-items-center">

                            <i class="bi bi-telephone-inbound me-4"></i>
                            <div class="text-white">
                                <h6>Téléphone</h6>
                                <p>Bureau: 33 4567 892</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="d-flex justify-content-center align-items-center"style="flex-direction:column;">
                        <div class="d-flex align-items-center">
                            <div>
                                <i class="bi bi-envelope me-4"></i>
                            </div>
                            <div class="text-white">
                                <h6>Email:</h6>
                                <p>sokin@info-live.cd</p>


                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
