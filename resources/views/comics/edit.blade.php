{{-- Implemento la pagina main --}}
@extends('layouts.main')

{{-- Do un titolo a questa section --}}
@section('title', 'Create')

{{-- Punto dove implemento questa section nella pagina principale --}}
@section('main') 
<div class="container my-5">

  <h1 class="text-center mb-3">Modifica fumetto</h1>
  <form action="{{ route('comics.update', $comic) }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <input type="textarea" class="form-control" id="description" name="description" value="{{ $comic->description }}">
    </div>
    <div class="mb-3">
      <label for="image_path" class="form-label">Percorso Immagine</label>
      <input type="text" class="form-control" id="image_path" name="thumb" value="{{ $comic->thumb }}">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Prezzo</label>
      <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price }}">
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">Serie</label>
      <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">In saldo</label>
      <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Tipologia</label>
      <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
    </div>
    
    <button type="submit" class="btn btn-primary">Invia</button>
  </form>
</div>


@endsection
