@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Dashboard') }}</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

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
    </div>
  </div>
@endsection
