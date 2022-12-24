@extends('fr.template.app')

@section('content')
    {{-- Body section --}}
    <div class="container">

        <div class="about" id="about" data-aos="fade-down">
            <h1 class="title">A PROPOS</h1>
            <div class="row mt-5">
                <div class="text col-md-6">
                    <p>

                        Organisateur et guide spécialisés dans les circuits à Madagascar en groupes et individuels même
                        en
                        voyage d’affaire:( Nord- Sud – Ouest et Est de Madagascar).
                        Nous organisons des tours à la demande de la clientèle : exemples :( pour les ornithologues,
                        pour
                        les
                        trekkeurs, pour les passionnées des arts et cultures Malgaches «visite et séjour
                        villageois »  ainsi
                        que
                        des plantes endémiques et tropicales à Madagascar).
                    </p>
                    <p>

                        Nous organisons aussi des tours avec des familles et amis Malgaches 2 fois par an (échanges
                        d’idées,
                        culture et visite des Park à Madagascar).
                    </p>
                    <p>
                        Location des voitures avec chauffeur.
                    </p>
                    <p>
                        Nous vous offrons quelques exemples des programmes des circuits à Madagascar.
                    </p>
                </div>
                <div class="img col-md-6">
                    <img src="{{ asset('img/baobab.jpg') }}" alt="about">
                </div>

            </div>
        </div>

        <div class="circuit" class="mb-5" data-aos="fade-left">

            <h1 class="title">SPECIAL VISITE GRAND LEMUR DE MADAGASCAR( Andasibe – Palmarium) </h1>
            <div class="row mt-5">
                <div class="img col-md-6">
                    <img src="{{ asset('img/lemur.jpg') }}" alt="about">
                </div>
                <div class="col-md-6">
                    <p>
                        La côte Est de Madagascar est encore couverte de forêts luxuriantes.
                    </p>
                    <p>
                        Pendant notre voyage, nous visiterons une réserve privée à Peyrieras comme des insectes et des
                        reptiles
                        qui offre la possibilité d'observer de près tels que les caméléons, les geckos à queue de
                        feuille, le
                        Propithèque de Verreaux, etc. Visite nocturne.

                        Le lendemain, visite du plus grand lémurien : Indri Indri, facilement repérable à cause de ses
                        cris
                        impressionnants. Ce parc où vous visiterez  possède 11 espèces de lémuriens et plusieurs espèces
                        d'oiseaux sans oublier les différentes sortes d'orchidées. .
                    </p>
                    <p>
                        Après Andasibe, nous continuerons notre voyage vers la RN7 est la route principale vers le Sud
                        de Madagascar, d’une longueur de 1200km, elle relie Antananarivo au centre de l’ile, à Tuléar
                        sur la côte sud-ouest

                        Le grand sud, c’est une étape de voyage classique, avec de nombreuses variations de choses à
                        découvrir, pleine de bonnes surprises en passant toujours  par la  capitale de Madagascar :
                        Antananarivo, une ville aux mille facettes et aux mille couleurs.

                    </p>

                    <a class="btn btn-success" href="{{ route('fr.circuit.lemur') }}">Lire ce circuit</a>
                </div>
            </div>
        </div>
        <div class="circuit" class="mb-5" data-aos="fade-right">

            <h1 class="title">DECOUVERTE  ET AVENTURE  <br>

                TSINGY DE BEMARAHA- TSIRIBIHINA- L’ALLEE DE BAOBAB
            </h1>
            <div class="row mt-5">
                <div class="img col-md-6">
                    <img src="{{ asset('img/tsingy2.jpg') }}" alt="about">
                </div>
                <div class="col-md-6">
                    <p>

                        L'aventure se dirige vers la région du soleil. Nous utilisons une variété de moyens de transport:
                        véhicule, bateau à moteur, bac, 4x4. Découvrez la vie quotidienne de la tribu Sakalava Menabe,
                        bivouac lors de la tournée sur le fleuve. Les Tsingy offrent l’un des paysages les plus
                        spectaculaires de Madagascar, des blocs de calcaire aux lames sculptées ou aux aiguilles
                        tranchantes. Patrimoine mondial de l'UNESCO. Découvrez les différents types de famille de baobabs,
                        la célèbre avenue des baobabs au coucher du soleil.


                    </p>
                    <p>

                        Cette visite est ouverte au mois de Mai et Novembre en raison de la saison des pluies.
                    </p>
                    <p>
                        S'il vous plaît, ce prix est basé sur 2 personnes jusqu’à 8 personnes, alors pour une personne ou
                        plusieurs groupes, contactez-moi pour demander un devis.

                    </p>

                    <a class="btn btn-success" href="{{ route('fr.circuit.bemaraha') }}">Lire ce circuit</a>
                </div>
            </div>
        </div>


    </div>

    <div class="contact" id="contact" data-aos="fade-down">
        <h1 class="title">NOUS CONTACTEZ</h1>

        @if (\Session::has('success'))
            <div class="alert alert-success">
                {!! \Session::get('success') !!}
            </div>
        @endif

        <div class="container col-md-8">
            <div class="card-content">
                <div class="img">

                    <div class="card-contact">
                        <div>
                            <h3>CONTACT</h3>
                            <p><i class="fa-solid fa-location-dot"></i>Adresse: {{ $contact->adresse }}</p>
                            <p><i class="fa fa-phone"></i> Tel: {{ $contact->tel }}</p>
                            <p><i class="fa fa-envelope"></i> Email: {{ $contact->email }}</p>
                        </div>
                    </div>

                </div>
                <div class="form" id="contact-form">
                    <form action="{{ route('message.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="name" placeholder="Votre nom"
                                name="name">
                            <div class="invalid-feedback" id="name-invalid">
                                Please choose a username.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Votre email"
                                name="email">
                            <div class="invalid-feedback" id="email-invalid">
                                Please choose a username.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="content" rows="3" placeholder="Votre message"></textarea>
                            <div class="invalid-feedback" id="message-invalid">
                                Please choose a username.
                            </div>
                        </div>
                        <div class="mb-2">
                            <button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i>
                                Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
    @vite('resources/js/script.js')
@endsection
