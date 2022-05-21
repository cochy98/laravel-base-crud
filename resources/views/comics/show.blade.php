@extends('layouts.main')

@section('title', 'Show')

@section('main')
<div class="container my-5">
  @if (session('success-message'))
    <div class="row">
      <div class="col-12">
        <div class="alert alert-success">
          {{ session('success-message') }}
        </div>
      </div>
    </div>
  @endif
  <div class="my-maxy-card">
    <h1>{{ $comic->title }}</h1>
    <div class="box-card-img">
      <img src="{{ $comic->thumb }}" class="maxy-card-img" alt="Picture of {{ $comic->title }}">
      <a href="{{ route("comics.edit", $comic ) }}" class="btn btn-warning">Modifica</a>
      <form action="{{ route('comics.destroy', $comic) }}" method="post" class="delete">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Elimina</button>
      </form>
    </div>
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
