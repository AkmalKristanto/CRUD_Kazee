@extends('layouts.app')

@section('title', "Editar o post {$post->title}")

@section('content')

<h1>Edit Detail Barang</h1>

<form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">

    @include('posts._partials.form')
</form>

@endsection
