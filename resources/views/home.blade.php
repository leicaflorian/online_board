@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center g-4">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Dashboard') }}</div>

          <div class="card-body">

            <p>
              L'app deve controllare se l'utente è associato a qualche congregazione, se no,
              deve chiedergli se vuole crearne una o associarsi ad una tramite ricerca per id congregazione.

              Lasciare sempre la possibilità di cercare una nuova congregazione.

              Quando un utente crea una congregazione, deve essere segnato come admin.
            </p>

            {{ __('You are logged in!') }}
          </div>
        </div>
      </div>

      @if(is_null($congregations))
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Insert your congregation ID</div>

            <div class="card-body">
              <form method="POST" action="{{ route('search') }}">
                @csrf

                <div class="row">
                  <div class="col">
                    @include("partials.form_input", [
                      "label" => "Codice congregazione",
                      "name" => "title",
                      "value" => old("title")
                    ])
                  </div>
                </div>
              </form>

              @guest()
                <div>
                  <div class="text-center mb-3 fs-3">- or -</div>
                  <div class="d-flex justify-content-center">
                    <a href="{{ url('/google-login') }}" class="btn btn-primary me-3">Login With Google</a>
                    <a href="{{ url('/apple-login') }}" class="btn btn-primary">Login With Apple</a>
                  </div>
                </div>
                @endguest()
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>
@endsection
