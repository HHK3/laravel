@extends('layout.master')

@section('header')
    <h2>Artikel {{ $article_id }}</h2>
@endsection

@section('content')
    <h2>Titel van mijn article {{ $article_id }}</h2>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci laborum libero nam nobis officiis rerum veniam? Aperiam consequatur dolor doloribus fugiat illo itaque nam nihil porro repellat repudiandae sint, totam.
    </p>
@endsection
