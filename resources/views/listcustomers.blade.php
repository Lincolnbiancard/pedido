@extends('layout')

@section('content')
<a id="btn-action" href="{{ url('formcustomer') }}" class="btn btn-primary">Adicionar Cliente</a>
    <div class="row align-content-center">
            <table class="lin-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cpf</th>
                        <th>Atualizar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->id . " - " . $customer->name}}</td>
                            <td>{{ $customer->cpf }}</td>
                            <td>
                            <a type="submit" method="get" href="updatecustomer/{{ $customer->id }}" class="btn btn-primary btn-sm">Atualizar</a>
                            </td>
                            <td>
                                <form action="customers/{{ $customer->id }}" method="post">     
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
