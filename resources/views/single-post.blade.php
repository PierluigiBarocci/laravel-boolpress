@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{ $post->title}}</h1>
                <h3>Autore: {{ $post->author }}</h3>
                <p>{{ $post->content }}</p>
                <p>Creato in Data: {{ $post->created_at }}</p>
            </div>
        </div>
    </div>
@endsection
