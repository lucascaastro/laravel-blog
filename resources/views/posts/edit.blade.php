@extends('layouts.app')

@section('content')
<form action="/posts/update/{{ $post->id }}" method="POST">
    @csrf
    <input name="title" value="{{ $post->title }}">
    <br>
    <textarea name="content" cols="23" rows="3">{{ $post->content }}</textarea>
    <br>
    <button type="submit">Editar</button>
</form>
<a href="/posts/delete/{{ $post->id  }}">Deletar</a>

@endsection
