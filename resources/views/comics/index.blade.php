{{-- Implemento la pagina main --}}
@extends('layouts.main')

{{-- Do un titolo a questa section --}}
@section('title', 'index')

{{-- Punto dove implemento questa section nella pagina principale --}}
@section('main')    
  <div class="container my-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach ($comics as $comic)
      <div class="col">
        <div class="card h-100">
          <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
          <div class="card-body">
            <h5 class="card-title"><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></h5>
            <p class="card-text">{{ $comic->description }}</p>
            <p class="card-specs"><strong>Serie: </strong> {{ $comic->series }}</p>
            <p class="card-specs"><strong>Tipo: </strong> {{ $comic->type }}</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">{{ $comic->sale_date }}</small>
            -- <span>{{ $comic->price }}€</span>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="d-flex justify-content-center mt-5">
      {{ $comics->links() }}
    </div>
  </div>


@endsection
