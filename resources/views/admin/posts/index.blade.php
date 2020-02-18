@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-ms-12">
                <h1>Lista di tutti i Post</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-ms-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Autore</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->author }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>
                                    <a class="btn btn-primary" href="#">Dettagli</a>
                                    <a class="btn btn-warning" href="#">Modifica</a>
                                    <a class="btn btn-danger" href="#">Elimina</a>
                                    {{-- <form class="d-inline" action="#" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" name="" value="Elimina">
                                    </form> --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>Non Ci Sono Post Presenti nel Database</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
