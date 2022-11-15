@extends('layout.app')

@section('title', $post->title)

@section('content')
  @include('partials.header')

  <main class="main">
    <div class="fixed-container">
        <h1>Статьи</h1>

          @include('partials.posts.item', ['item' => $post])

        </div>
    </div>
  </main>

  @include('partials.footer')
@endsection