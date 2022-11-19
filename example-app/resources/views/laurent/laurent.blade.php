@extends('layout.app')

@section('title', 'Laurent')
    
@section('content')
  @include('partials.header')

  <h1>Laurent</h1>

  <p>{{ var_dump($test) }}</p>

  @include('partials.footer')  
@endsection