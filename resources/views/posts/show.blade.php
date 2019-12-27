@extends('layouts.app')

@section('title', "{$post->title}")

@section('content')

<h1><b>{{ $post->title }}</b></h1>

@php
    $pathImage = url('imgs/posts/default.png');

    if ($post->image)
        $pathImage = url("storage/posts/{$post->image}");
@endphp
<img src="{{ $pathImage }}" alt="{{ $post->title }}" class="img-circle">

<p>{{ $post->body }}</p>
<div class="row">
    <div class="col-md-1">
        <form action="{{route('posts.index')}}">
            <button type="submit" class="btn btn-info" href>Kembali</button>
        </form>
    </div>
    <div class="col-md-1">
        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Delete Barang</button>
        </form>
    </div>
</div>



@endsection
