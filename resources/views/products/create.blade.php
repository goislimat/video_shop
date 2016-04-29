@extends('app')

@section('content')

<div class="container">
    <h1>Cadastrar novo produto</h1>
    
    @if($errors->any())
    
    <ul class="list-group">
        
        @foreach($errors->all() as $error)
        
        <li class="list-group-item list-group-item-warning">{{ $error }}</li>
        
        @endforeach
        
    </ul>
    
    @endif
    
    {{ Form::open(array('route' => 'products.store', 'method' => 'post')) }}
    
        {{ Form::label('name', 'Nome:') }}
        {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Nome aqui')) }}
        
        {{ Form::label('price', 'Preço:') }}
        {{ Form::number('price', null, array('class' => 'form-control', 'step' => 'any')) }}
        
        {{ Form::label('description', 'Descrição:') }}
        {{ Form::textarea('description', null, array('class' => 'form-control', 'placeholder' => 'Descrição aqui')) }}

        {{ Form::submit('Concluir', array('class' => 'btn btn-primary')) }}
    
    {{ Form::close() }}
</div>

@endsection