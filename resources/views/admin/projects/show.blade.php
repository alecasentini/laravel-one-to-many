@extends('layouts.dashboard')

@section('title')
Portfolio | Project Show
@endsection

@section('content')
<h1>Singolo Projects: {{$project->name}}</h1>

<img class="img-fluid" src="{{ asset('storage/' . $project->cover_image) }}" alt="">

<p>
    Descrizione: {{$project->description}}
</p>
<p>
    Cliente: {{$project->client}}
</p>


{{-- questo dovrebbe essere la funzione corretta {{$project->type->name}} --}}

<p>
    Tipo:{{$project->category_id}}
</p>

@endsection