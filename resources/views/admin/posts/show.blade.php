@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{ $post->title}}</h1>
                <p>{{ $post->content }}</p>
                <p>Autore: {{ $post->author }}</p>
                <p>Creato in Data: {{ $post->created_at }}</p>
                <p>Modificato in Data: {{ $post->updated_at }}</p>
            </div>
        </div>
    </div>
@endsection
