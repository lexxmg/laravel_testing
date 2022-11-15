@extends('layout.app')

@section('title', 'Авторизация')

@section('content')
  <div class="auth-container">
    <h1 class="auth-container__title">Авторизация</h1>

    <form class="auth-form" action="">
      <label class="auth-form__label">Email:
        <input class="auth-form__input" type="text">
      </label>
    </form>
  </div>
@endsection