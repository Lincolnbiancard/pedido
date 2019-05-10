@extends('layout')

@section('content')
<a id="btn-action" href="{{ url('formproduct') }}" class="btn btn-primary">Adicionar Produto</a>
    <div class="row align-content-center">
            <table class="lin-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Código de Barras</th>
                        <th>Atualizar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id . " - " . $product->name}}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->bar_code}}</td>
                    
                            <td>
                            <a type="submit" method="get" href="updateproduct/{{ $product->id }}" class="btn btn-primary btn-sm">Atualizar</a>
                            </td>
                            <td>
                                <form action="product/{{ $product->id }}" method="post">     
                                    <input class="btn btn-danger btn-sm" type="submit" value="Excluir" />
                                    <input type="hidden" name="_method" value="delete" />
                                    @csrf
                                </form>
                            </td>
                    @endforeach
                        </tr>
                </tbody>
            </table>
        </div>
@endsection
