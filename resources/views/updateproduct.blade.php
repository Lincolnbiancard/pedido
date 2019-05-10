@extends('layout')

@section('content')

    <div class="container py-0">
        <div class="row">
            <div class="mx-auto col-sm-6">
                        <!-- form user info -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Atualizando o Produto: {{ $products->name }}</h4>
                            </div>
                            <div class="card-body">
                       


                                <form class="form" role="form" autocomplete="off" action="{{ url('/products/' . $products->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="PUT">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Nome do Produto</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" id="name" name="name" type="text" value="{{ $products->name }}">
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Preço</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" id="price" name="price" type="float" min="1" value="{{ $products->price }}">
                                            </div>
                                        </div>
            
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Código de Barras</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" id="bar_code" name="bar_code" type="text" value="{{ $products->bar_code }}">
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
                        <!-- /form user info -->
            </div>
        </div>
    </div>
@endsection