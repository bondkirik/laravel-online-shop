@extends('layouts.master')

@section('title', 'Товар')

@section('content')
    <h1>iPhone X 64GB</h1>
    <h2>{{ $product }}</h2>
    <p>Цена: <b>700 EUR.</b></p>
    <img src="/storage/products/iphone_x.jpg">
    <p>Отличный продвинутый телефон с памятью на 64 gb</p>
    <a class="btn btn-success" href="/basket/1/add">Добавить в корзину</a>
@endsection
