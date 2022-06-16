@extends('layouts.default')

@section('pageTitles', 'Prodotto singolo')

@section('mainContent')
<main>
    <div class="container">
        <h1 class="text-center">Prodotto: {{$prodotto->title}}</h1>
            <p class="text-center"> Tempo di cottura: {{$prodotto->cooking_time}} minuti</p>
    </div>
</main>
@endsection
