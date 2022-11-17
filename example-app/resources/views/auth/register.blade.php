@extends('layout.app')

@section('title', ' Регистрация')

@section('content')
  <div class="auth-container">
    <h1 class="auth-container__title"> Регистрация</h1>

    <form class="auth-form" action="{{ route('register_process') }}" method="POST">
      @csrf

      <label class="auth-form__label">
        <input class="auth-form__input" type="text" name="name" value="{{ @old('name') }}" placeholder="Имя">
      </label>

      @error('name')
        <div class="auth-container__err">{{ $message }}</div>
      @enderror

      <label class="auth-form__label">
        <input class="auth-form__input" type="text" name="email" value="{{ @old('email') }}" placeholder="Email">
      </label>

      @error('email')
        <div class="auth-container__err">{{ $message }}</div>
      @enderror

      <label class="auth-form__label">
        <input class="auth-form__input" type="password" name="password" placeholder="Пароль">
      </label>

      <label class="auth-form__label">
        <input class="auth-form__input" type="password" name="password_confirmation" placeholder="Подтвердить пароль">
      </label>

      @error('password')
        <div class="auth-container__err">{{ $message }}</div>
      @enderror

      <a class="auth-container__link" href="{{ route('login') }}">Уже зарегистрирован</a>

      <div class="auth-form__btn-containet">
        <button class="auth-form__btn">Зарегистрироваться</button>
      </div>
    </form>
  </div>
@endsection