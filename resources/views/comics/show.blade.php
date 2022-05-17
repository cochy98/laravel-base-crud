@extends('layouts.main')

@section('title', 'Show')

@section('main')
<div class="container my-5">
  <div class="">
    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
    <div>
      <h5><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></h5>
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
