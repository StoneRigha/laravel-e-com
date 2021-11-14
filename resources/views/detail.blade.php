@extends('master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{ $products['gallery'] }}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Back</a>
            <h2>{{ $products['name'] }}</h2>
            <h3>Price: {{ $products['price'] }}</h3>
            <h4>Description: {{ $products['description'] }}</h4>    
            <h5>Category: {{ $products['category'] }}</h5>
            <br> <br>
            <button class="btn btn-primary">Add to cart</button>
            <button class="btn btn-success">Buy now</button>
        </div>
    </div>

@endsection
