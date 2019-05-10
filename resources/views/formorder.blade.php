@extends('layout')

@section('content')
    <div class="container py-3">
        <div class="row">
            <div class="mx-auto col-sm-6">
                <!-- form user info -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Cadastro de Pedido</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="on" action="store" method="POST">
                            @csrf
                            
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Nome do Cliente</label>
                                <div class="col-lg-9">
                                    <select class="form-control" id="name" name="name" type="text" required></select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Produtos</label>
                                <div class="col-lg-9">
                                    <select class="form-control" id="name_product" name="name_product" type="float" min="1" required></select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Quantidade</label>
                                <div class="col-lg-9">
                                    <input class="form-control" id="quantity" name="quantity" type="number" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Data</label>
                                <div class="col-lg-9">
                                    <input class="form-control" id="date" name="date" type="date" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Total</label>
                                <div class="col-lg-9">
                                    <input class="form-control" id="total" name="total" type="number" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <input type="submit" class="btn btn-primary" value="Cadastrar">
                                    <input type="reset" class="btn btn-secondary" value="Limpar">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /form user info -->
            </div>
        </div>
    </div>
@endsection

