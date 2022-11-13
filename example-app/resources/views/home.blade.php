@extends('layout.app')

@section('title', 'Главная')

@section('content')
  @include('partials.header')

  <main class="main">
    <div class="fixed-container">
        <h1>Главная</h1>

        <div class="home-content">
          @foreach ($posts as $item)
            @include('partials.posts.item', ['item' => $item])
          @endforeach
        </div>
    </div>
  </main>
@endsection