@extends('layouts.main')

@section('title', 'Show')

@section('main')
<div class="container my-5">
  <div class="">
    <img src="{{ $comic->thumb }}" class="card-img-top" alt="Picture of {{ $comic->title }}">
    <div>
      <h5>{{ $comic->title }}</h5>
      <p>{{ $comic->description }}</p>
      <p><strong>Serie: </strong> {{ $comic->series }}</p>
      <p><strong>Tipo: </strong> {{ $comic->type }}</p>
    </div>
    <div>
      <small>{{ $comic->sale_date }}</small>
      -- <span>{{ $comic->price }}€</span>
    </div>
  </div>
</div>
    
@endsection
