@extends('layouts.public')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Lista dei post</h1>
                    </div>
                    <ul class="list-group list-group-flush">
                        @forelse ($posts as $post)
                            <li class="list-group-item">
                                <a href="{{ route('blog.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                            </li>
                        @empty

                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
