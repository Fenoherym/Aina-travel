@extends('admin.template.app')

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            {!! \Session::get('success') !!}
        </div>
    @endif
    @if (\Session::has('erreurs'))
        <div class="alert alert-danger">
            {!! \Session::get('erreurs') !!}
        </div>
    @endif
    @error('tel')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    @error('email')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror

    @error('adresse')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    @error('content')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    @error('password')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    @error('name')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    @error('old_password')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    @error('new_password')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <div class="row" id="dashboard">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-header bg-success text-white   ">
                    Paramèttres
                </div>
                <div class="card-body">
                    <h3>Contact</h3>
                    <p><i class="fa-solid fa-location-dot"></i> {{ $contact->adresse }}</p>
                    <p><i class="fa fa-phone"></i> {{ $contact->tel }}</p>
                    <p><i class="fa fa-envelope"></i> Email: {{ $contact->email }}</p>

                    @include('admin.include.contact.update')
                    <hr>
                    <h3>Logo</h3>
                    <p>{{ $logo->content }}</p>
                    @include('admin.include.logo.update')
                    <hr>
                    <h3>Profil</h3>
                    @include('admin.include.profil.update')
                    @include('admin.include.profil.password')
                    <hr>
                    <form action="{{ route('reset') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-success"> Remettre les
                            compteurs à
                            0 </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row stat">
                <div class="col-md-6 mb-3">

                    <div class="card p-5 text-white text-center" style="background: rgb(154, 24, 180)">
                        VISITEURS DU MOIS: {{ $visiteur_mois->count() }} <br> <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="col-md-6 mb-3">

                    <div class="card p-5 text-white text-center" style="background: rgb(24, 53, 180)">
                        CONSULTATIONS DU MOIS: {{ $sessions->count() }} <br> <i class="fa fa-users"></i>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card p-5 text-white text-center" style="background: rgb(24, 180, 107)">
                        VISITEURS TOTAL: {{ $visiteurs->count() }} <br> <i class="fa fa-user"></i>
                    </div>
                </div>

            </div>
            <div class="card">
                <div class="card-header bg-success text-white">
                    Pays des 10 derniers visiteurs
                </div>
                <div class="card-body">
                    @if (count($last_visiteurs) != 0)
                        <ul>
                            @foreach ($last_visiteurs as $visiteur)
                                @if ($visiteur->country == null)
                                    <li class="text-center">inconnu</li>
                                @else
                                    <li class="text-center">{{ $visiteur->country }}</li>
                                @endif
                            @endforeach
                        </ul>
                    @else
                        <div class="alert alert-secondary">
                            Vous n'avez aucun visiteurs
                        </div>
                    @endif
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header bg-success text-white">
                    Vos Messages
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                                <tr>
                                    <th>{{ $message->name }}</th>
                                    <td><a href="mailto:{{ $message->email }}">{{ $message->email }}</a> </td>
                                    <td>{{ $message->content }}</td>
                                    <td>
                                        <a href={{ route('message.delete', $message->id) }}"
                                            class="btn btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                            @endforeach

                            {{ $messages->links() }}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
