{{-- Implemento la pagina main --}}
@extends('layouts.main')

{{-- Do un titolo a questa section --}}
@section('title', 'Create')

{{-- Punto dove implemento questa section nella pagina principale --}}
@section('main') 
<div class="container my-5">

  <h1 class="text-center mb-3">Inserisci un nuovo fumetto</h1>
  <form action="{{ route('comics.store') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci un titolo per il fumetto">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <input type="textarea" class="form-control" id="description" name="description" placeholder="Breve descrizione del fumetto">
    </div>
    <div class="mb-3">
      <label for="image_path" class="form-label">Percorso Immagine</label>
      <input type="text" class="form-control" id="image_path" name="thumb" placeholder="Percorso immagine (PATH)">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Prezzo</label>
      <input type="number" class="form-control" id="price" name="price">
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">Serie</label>
      <input type="text" class="form-control" id="series" name="series" placeholder="Serie di appartenenza">
    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">In saldo</label>
      <input type="date" class="form-control" id="sale_date" name="sale_date">
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Tipologia</label>
      <input type="text" class="form-control" id="type" name="type" placeholder="Tipologia di appartenenza">
    </div>
    
    <button type="submit" class="btn btn-primary">Invia</button>
  </form>
</div>


@endsection
