@extends('layouts.main')

@section('title', 'Show')

@section('main')
<div class="container my-5">
  <div class="my-maxy-card">
    <h1>{{ $comic->title }}</h1>
    <img src="{{ $comic->thumb }}" class="maxy-card-img" alt="Picture of {{ $comic->title }}">
    <div class="d-flex justify-space-betwenn">
      <div>
        <p><strong>Serie: </strong> {{ $comic->series }}</p>
        <p><strong>Tipo: </strong> {{ $comic->type }}</p>
      </div>

      <div>
        <small>{{ $comic->sale_date }}</small>
        -- <span>{{ $comic->price }}€</span>
      </div>
    </div>
    <p class="my-card-desc">{{ $comic->description }}</p>
  </div>
</div>
    
@endsection
