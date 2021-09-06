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

  @media screen and (max-width:528px) {
    #auth-page {
      width: 320px;
    }
  }
</style>


<body ng-app="mainModule" ng-controller="mainController">
  <div id="auth-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row">
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">mail_outline</i>
            <input id="email" type="email" placeholder="Email Id" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
            <button type="submit" class="btn waves-effect waves-light col s12">
              {{ __('Login') }}
            </button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small">Don't have an account? <a href="{{ route('register') }}" style="color: #007bff;">Create your account!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
            @if (Route::has('password.request'))
            <p class="margin right-align medium-small"><a href="{{ route('password.request') }}" style="color:#007bff">Forgot password?</a>
            </p>
            @endif

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