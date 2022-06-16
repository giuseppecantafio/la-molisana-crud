@extends('layouts.default')

@section('pageTitles', 'Prodotti')

@section('mainContent')
<main>
    <div class="container">
        <h1>Prodotti de La Molisana</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Tempo di cottura</th>
      <th scope="col">Visualizza</th>
      <th scope="col">Modifica</th>
      <th scope="col">Cancella</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($prodotti as $prodotto)
    <tr>
      <td>{{$prodotto->id}}</td>
      <td>{{$prodotto->title}}</td>
      <td>{{$prodotto->cooking_time}}</td>
      <td><a href="{{route('products.show', $prodotto->id)}}">Visualizza</a></td>
      <td><a href="{{route('products.edit', $prodotto->id)}}">Modifica</a></td>
      <td>
        <form action="{{route('products.destroy', $prodotto->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit" class="text-danger">Cancella!</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
</main>
@endsection
