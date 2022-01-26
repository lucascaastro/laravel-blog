@extends('layouts.app')

@section('content')
<form action="/posts/store" method="POST">
    @csrf
    <input name="title" placeholder="Titulo">
    <br>
    <textarea name="content" cols="23" rows="3" placeholder="Conteúdo"></textarea>
    <br>
    <button type="submit">Publicar</button>
</form>
@endsection
