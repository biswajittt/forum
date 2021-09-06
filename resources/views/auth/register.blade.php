@extends('layouts.app')

@section('content')

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ url('/css/materialize.css') }}" />
<link href="https://cdn.materialdesignicons.com/1.1.34/" rel="stylesheet">
<link src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js">
<link src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
<link src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js">
<style>
  #auth-page {
    width: 500px;
  }

  .card {
    position: absolute;
    left: 50%;
    top: 50%;
  }
</style>


<body ng-app="mainModule" ng-controller="mainController">
  <div id="auth-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row">
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
              </svg></i>

            <input id="name" type="text" placeholder="Username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">mail_outline</i>

            <input id="email" type="email" placeholder="Email Id" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus required>

            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16">
                <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z" />
              </svg></i>
            <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12">
              {{ __('Register') }}
            </button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small">Already have an account? <a href="{{ route('login') }}" style="color: #007bff;">Log In</a></p>
          </div>
        </div>

      </form>
    </div>
  </div>
</body>

<script>
  var app = angular.module('mainModule', []);

  app.controller('mainController', function($scope, $http) {
    $scope.nome = 'Valor Inicial';
    $scope.reset = function() {
      $scope.nome = '';
    }
  });
</script>

@endsection