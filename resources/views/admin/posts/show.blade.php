@extends('layouts.app')
@section('content')

<div class="container">
        <h2>Dettagli prodotto</h2>
        <div class="card">
        <img src="{{asset('storage/' .$post->cover) }}" class="card-img-top" style="width:300px; height:300px" alt="...">
            <div class="card-header bg-danger text-white fw-bold">
                {{ $post->title }}
            </div>
            <div class="card-body">
                <h5 class="card-title"> {{ $post->slug }}</h5>
                <p class="card-text"> {{ $post->content }}</p>
            </div>
        </div>
        <div class="mt-3">
            <a href="{{ route('admin.posts.index') }} " class="btn btn-primary me-5">indietro</a>
            @csrf
            @method('DELETE')
            <input type="submit" value="delete" class="btn btn-danger mx-5">
        </div>
    </div>

@endsection