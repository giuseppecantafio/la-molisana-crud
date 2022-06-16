@extends('layouts.default')

@section('pageTitles', 'Nuovo prodotto')

@section('mainContent')
<main>
    <div class="container">
        <h1>Modifichiamo il prodotto</h1>
    </div>
    <form action="{{route('products.update', $prodotto->id)}}" method="post">

      @csrf
      @method('PUT')

  <div class="mb-3">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Inserisci nuovo titolo" name="title" value="{{$prodotto->title}}">
  </div>

  <div class="mb-3">
    <label for="cooking_time">Cooking time</label>
    <input type="number" class="form-control" id="cooking_time" aria-describedby="cooking_time" name="cooking_time" min="1" max="60" value="{{$prodotto->cooking_time}}">
  </div>

  <button type="submit" class="btn btn-primary">Salva nuovo prodotto</button>
</form>
</main>
@endsection
