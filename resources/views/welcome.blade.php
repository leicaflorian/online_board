@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">

        @if(!is_null($congregations))
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
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>
@endsection
