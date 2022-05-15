@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Login') }}</div>

          <div class="card-body">
            <div class="d-flex justify-content-center">
              <a href="{{ url('/google-login') }}" class="btn btn-primary me-3">Login With Google</a>
              <a href="{{ url('/apple-login') }}" class="btn btn-primary">Login With Apple</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
