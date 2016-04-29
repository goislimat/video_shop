@extends('app')

@section('content')

<div class="container">
    
    <h3>{{ $produto->name }}</h3>
    
    <p><strong>{{ $produto->price }}</strong></p>
    
    <p>{{ $produto->description }}</p>
    
</div>

@endsection