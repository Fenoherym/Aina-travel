@extends('en.template.app')


@section('content')
    <div class="page-contact">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                {!! \Session::get('success') !!}
            </div>
        @endif
        <div class="contact">
            <h1 class="title">CONTACT US</h1>
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
                                <input type="text" class="form-control" id="name" placeholder="You name"
                                    name="name">
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
    </div>
@endsection
@section('extra-js')
    @vite('resources/js/script.js')
@endsection
