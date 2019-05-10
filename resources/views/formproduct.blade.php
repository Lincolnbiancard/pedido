@extends('layout')

@section('content')
    <div class="container py-3">
        <div class="row">
            <div class="mx-auto col-sm-6">
                <!-- form user info -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Cadastro de Produto</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="on" action="store" method="POST">
                            @csrf
                            
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Nome do Produto</label>
                                <div class="col-lg-9">
                                    <input class="form-control" id="name" name="name" type="text" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Preço</label>
                                <div class="col-lg-9">
                                    <input class="form-control" id="price" name="price" type="float" min="1" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Código de Barras</label>
                                <div class="col-lg-9">
                                    <input class="form-control" id="bar_code" name="bar_code" type="text" required>
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

