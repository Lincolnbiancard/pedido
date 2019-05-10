@extends('layout')

@section('content')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<div class="container py-3">
        <div class="row">
            <div class="mx-auto col-sm-12">
                <!-- form user info -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Cadastro de Produto</h4>
                    </div>
                    <div class="card-body">
                   <form class="well form-horizontal" action="" method="POST">
                      {!! csrf_field() !!}
                      <fieldset>
                        
                            <div class="form-group">
                                <label class="col-md-4 control-label">Cliente</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon">
                                    <i class="glyphicon glyphicon-list"></i></span>
                                    <select id="despesa" name="id_customer[]" placeholder="Cliente" 
                                        class="form-control" required="true" multiple="multiple">
                                        @foreach($customer as $c)
                                        <option value="{{$c->id}}">{{$c->name}}</option>
                                        @endforeach 
                                    </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                <label class="col-md-4 control-label">Produtos</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon">
                                    <i class="glyphicon glyphicon-list"></i></span>
                                    <select id="despesa" name="id_customer[]" placeholder="Produtos" 
                                        class="form-control" required="true" multiple="multiple">
                                        @foreach($products as $p)
                                        <option value="{{$p->id}}">{{$p->name}}</option>
                                        @endforeach 
                                    </select>
                                    </div>
                                </div>
                         
                                    
                                    <div class="form-group">
                                    <label class="col-md-4 control-label">Produtos</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon">
                                        <i class="glyphicon glyphicon-calendar"></i></span>
                                        <input id="data" name="data" placeholder="Data" 
                                        class="form-control" required="true" value="" type="date"></div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Quantidade</label>
                                        <div class="col-md-8 inputGroupContainer">
                                            <div class="input-group"><span class="input-group-addon">
                                            <i class="ion ion-cash"></i></span>
                                            <input id="quantity" name="quantity" placeholder="Quantidade Produto" 
                                            class="form-control" required="true" value="" type="text"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-md-4 control-label">Data</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon">
                                        <i class="ion ion-cash"></i></span>
                                        <input id="date" name="date"  
                                        class="form-control" required="true" value="" type="date"></div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Total</label>
                                        <div class="col-md-8 inputGroupContainer">
                                            <div class="input-group"><span class="input-group-addon">
                                                <i class="glyphicon glyphicon-user"></i></span>
                                                <input id="total" name="total" placeholder="Total" 
                                                class="form-control" required="true" value="" type="float"></div>
                                        </div>
                                    </div>
                                    </div>

                                </div>
                            </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Adicionar +</button>
                   </form>

  <script src="{{ asset('js/scripts.js') }}"></script>
@stop

