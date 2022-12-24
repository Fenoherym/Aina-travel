@extends('en.template.app')

@section('content')
    {{-- Body section --}}
    <div class="container">

        <div class="about" id="about">
            <h1 class="title">ABOUT</h1>
            <div class="row mt-5">
                <div class="text col-md-6 mt-5">
                    <p class="mt-2">

                        Organizer and guide specialized in circuits in Madagascar with groups and individuals even on
                        business trips: (North-South – West and East of Madagascar).
                    </p>
                    <p>

                        We organize tours at the request of customers: examples: (for ornithologists, for trekkers, for
                        lovers of Malagasy arts and cultures "village visit and stay" as well as endemic and tropical plants
                        in Madagascar).
                    </p>
                    <p>
                        Car rental with driver.
                    </p>
                    <p>
                        We offer you some examples of the programs of the circuits in Madagascar
                    </p>
                </div>
                <div class="img col-md-6">
                    <img src="{{ asset('img/baobab.jpg') }}" alt="about">
                </div>

            </div>
        </div>

        <div class="circuit" class="mb-5">

            <h1 class="title"> SPECIAL VISIT GRAND LEMUR OF MADAGASCAR (Andasibe – Palmarium). </h1>
            <div class="row mt-5">
                <div class="img col-md-6">
                    <img src="{{ asset('img/lemur.jpg') }}" alt="about">
                </div>
                <div class="col-md-6">
                    <p>
                        The east coast of Madagascar is still covered with lush forests.
                    </p>
                    <p>
                        During our trip, we will visit a private reserve in Peyrieras such as insects and reptiles which
                        offers the possibility of close observation such as chameleons, leaf-tailed geckos, Verreaux's
                        Sifaka, etc.


                    </p>
                    <p>
                        Night visit. The next day, visit of the largest lemur: Indri Indri, easily spotted because of it’s
                        impressive cries. This park where you will visit has 11 species of lemurs and several species of
                        birds without forgetting the different kinds of orchids.
                    </p>
                    <p>

                        After Andasibe, we will continue our journey towards the RN7 is the main road towards the South of
                        Madagascar, with a length of 1200km, it connects Antananarivo to the center of the Island, to Tuléar
                        on the southwest coast The deep south is a classic travel stage, with many variations of things to
                        discover, full of good surprises, always passing through the capital of Madagascar: Antananarivo, a
                        city with a thousand facets and a thousand colors.
                    </p>


                    <button class="btn btn-success">Read more</button>
                </div>
            </div>
        </div>
        <div class="circuit" class="mb-5" data-aos="fade-right">

            <h1 class="title">DISCOVERY AND ADVENTURE <br>
                TSINGY DE BEMARAHA-TSIRIBIHINA
            </h1>
            <div class="row mt-5">
                <div class="img col-md-6">
                    <img src="{{ asset('img/tsingy2.jpg') }}" alt="about">
                </div>
                <div class="col-md-6">
                    <p>

                        The adventure is heading towards the region of the sun. We use a variety of transport : vehicle,
                        motorboat, ferry, 4x4, and also without forgetting local typical dug-out canoe. Discover the daily
                        life of the Sakalava Menabe tribe, bivouac during the tour on the river. Tsingy offer one of the
                        most spectacular landscapes of Madagascar, limestone blocks carved blades or sharp needles. UNESCO
                        World Heritage. Discover the different kind of baobabs family, famous sunset avenue baobab.


                    </p>
                    <p>


                        This tour is open in May untill November because of the rainy season.
                    </p>
                    <p>
                        Please, this price is based for 2 pax, so for a person or several groups contact me to request a
                        quote

                    </p>

                    <a class="btn btn-success" href="{{ route('fr.circuit.bemaraha') }}">Lire ce circuit</a>
                </div>
            </div>
        </div>

    </div>


    <div class="contact">
        <h1 class="title">CONTACT US</h1>
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
                            <p><i class="fa-solid fa-location-dot"></i> Antsirabe 110</p>
                            <p><i class="fa fa-phone"></i> Tel: 034 43 435 54</p>
                            <p><i class="fa fa-envelope"></i> Email: 034 43 435 54</p>
                        </div>
                    </div>

                </div>
                <div class="form" id="contact-form">
                    <form action="{{ route('message.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="You name" name="name">
                            <div class="invalid-feedback" id="name-invalid">

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email: </label>
                            <input type="email" class="form-control" id="email" placeholder="Your email"
                                name="email">
                            <div class="invalid-feedback" id="email-invalid">

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="content" rows="3" placeholder="Your message"></textarea>
                            <div class="invalid-feedback" id="message-invalid">

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
