@extends('app')

@section('content')

<div class="container">
    <h1>Editar produto</h1>
    
    @if($errors->any())
    
    <ul class="list-group">
        
        @foreach($errors->all() as $error)
        
        <li class="list-group-item list-group-item-warning">{{ $error }}</li>
        
        @endforeach
        
    </ul>
    
    @endif
    
    {{ Form::open(array('route' => array('products.update', $produto->id), 'method' => 'put')) }}
    
        {{ Form::label('name', 'Nome:') }}
        {{ Form::text('name', $produto->name, array('class' => 'form-control', 'placeholder' => 'Nome aqui')) }}
        
        {{ Form::label('price', 'Preço:') }}
        {{ Form::number('price', $produto->price, array('class' => 'form-control', 'step' => 'any')) }}
        
        {{ Form::label('description', 'Descrição:') }}
        {{ Form::textarea('description', $produto->description, array('class' => 'form-control', 'placeholder' => 'Descrição aqui')) }}

        {{ Form::submit('Concluir', array('class' => 'btn btn-primary')) }}
    
    {{ Form::close() }}
</div>

@endsection