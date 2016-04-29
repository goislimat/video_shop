@extends('app')

@section('content')
    <div class="container">
        <h1>Listagem de Produtos</h1>
        
        <p><a href="{{ route('products.create') }}" class="btn btn-success">Novo</a></p>
        
        <table class="table table-condensed">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Preço</td>
                    <td>Descrição</td>
                    <td>Ação</td>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td><a href="{{ route('products.show', $produto->id) }}">{{ $produto->name }}</a></td>
                    <td>{{ $produto->price }}</td>
                    <td>{{ $produto->description }}</td>
                    <td>
                        <a href="{{ route('products.edit', $produto->id) }}" class="btn btn-warning">Editar</a>
                        {{ Form::open(['route' => ['products.destroy', $produto->id], 'method' => 'delete', 'class' => 'form-delete'])}}
                            {{ Form::submit('Excluir', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <script>
        $(document).on('submit', '.form-delete', function() {
            return confirm('Deseja realmente excluir esse item?');
        });
    </script>
@endsection