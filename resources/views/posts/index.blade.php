@extends('layouts.app')

@section('title', 'E-Commerse Shapii')

@section('content')
<div>
<div style="padding-top: 60px;">
    <h1 style="text-align: center;">
        Daftar Barang
        <a href="{{ route('posts.create') }}" class="btn btn-primary" style="float: right;"> Tambah Barang
            <i class="fas fa-plus-square"></i>
        </a>
    </h1>
</div>
@include('includes.alerts')

<ul class="media-list" style="margin-top: 75px;">
    @forelse($posts as $post)
    <li class="media">
        <div class="pull-left" style="width: 160px;">
            <!-- @php
                $pathImage = url('imgs/posts/default.jpeg');

                if ($post->image)
                    $pathImage = url("storage/app/public/posts/{$post->image}");
            @endphp -->
            <img src="{{url('/storage/app/public'. $post->posts)}}" alt="{{ $post->title }}" class="img-circle" style="width: 160px; margin: 10px;">

        </div>
        <div class="media-body">
            <span class="text-muted pull-right">
                <small class="text-muted">{{ $post->created_at->format('d/m/Y') }}</small>
            </span>
            <strong class="text-success">{{ '@' . $post->user->name }}</strong>
            <p>
                {{ $post->title }}
                <br>
                <a href="{{ route('posts.show', $post->id) }}">Detail</a> |
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a> |
                <a href="{{ route('posts.destroy', $post->id) }}">Delete</a>
            </p>
        </div>
    </li>
    <hr>
    @empty
    <li class="media">
        <p>Barang Kosong</p>
    </li>
    @endforelse

    {!! $posts->links() !!}
</ul>
</div>
@endsection
