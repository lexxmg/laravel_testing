@extends('layout.app')

@section('title', 'Авторизация')

@section('content')
  <div class="auth-container">
    <h1 class="auth-container__title">Авторизация</h1>

    <form class="auth-form" action="{{ route('login_process') }}" method="POST">
      @csrf

      <label class="auth-form__label">
        <input class="auth-form__input" type="text" name="email" value="{{ @old('email') }}" placeholder="Email">
      </label>

      @error('email')
        <div class="auth-container__err">{{ $message }}</div>
      @enderror

      <label class="auth-form__label">
        <input class="auth-form__input" type="password" name="password" placeholder="Пароль">
      </label>

      <div class="auth-form__checkbox-container auth-form-checkbox-container">
        <label class="auth-form-checkbox-container__label" for="remember">Запомнить меня:</label>
        <input class="auth-form-checkbox-container__input" id="remember"type="checkbox" name="remember">
      </div>

      <a href="{{ route('register') }}" class="auth-container__link">Регистрация</a>

      <div class="auth-form__btn-containet">
        <button class="auth-form__btn">Отправить</button>
      </div>
    </form>
  </div>
@endsection