@extends('layout')

@section('content')

    <div class="container py-0">
        <div class="row">
            <div class="mx-auto col-sm-6">
                    <!-- form  info -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Atualizando o Cliente: {{ $customers->name }}</h4>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" action="{{ url('/customers/' . $customers->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Nome do Cliente</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" id="name" name="name" type="text" value="{{ $customers->name }}">
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">CPF</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" id="cpf" name="cpf" type="float" min="1" value="{{ $customers->cpf }}">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            <input type="submit" class="btn btn-primary" value="Salvar">
                                            <input type="reset" class="btn btn-secondary" value="Limpar">
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                    <!-- /form  info -->
            </div>
        </div>
    </div>
@endsection