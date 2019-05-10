@extends('layout')

@section('content')
    <div class="container-fluid">
            <div class="mx-auto col-sm-7">
                <!-- form user info -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Cadastro de Pedido</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="on" action="store" method="POST">
                            @csrf
                            
                            <div class="form-group">
                                <label class="col-lg-3 col-form-label form-control-label">Nome do Cliente</label>
                                <div class="col-lg-9">
                                    <select class="form-control select2" id="name" name="name" type="text" required>
										@foreach($customers as $customer)
											<option value="{{ $customer->id }}">{{ $customer->name }}</option>
										@endforeach
									</select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 col-form-label form-control-label">Produtos</label>
                                <div class="col-lg-9">
                                    <select class="form-control select2" style="width: 100%" id="products" name="products" type="float" min="1" required multiple="multiple">
										@foreach($products as $product)
											<option value="{{ $product->id }}" data-barcode="{{ $product->barcode }}" data-price="{{ $product->price }}">{{ $product->name }}</option>
										@endforeach
									</select>
                                </div>
                            </div>

                            <div class="form-group col-lg-9">
								<table class="ml-1 table table-striped">
									<thead>
										<tr>
											<th>Produto</th>
											<th>Preço</th> 
											<th>Quantidade</th>
										</tr>
									</thead>
									<tbody id="productsTable">
									</tbody>
								</table>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 col-form-label form-control-label">Data</label>
                                <div class="col-lg-9">
                                    <input class="form-control" id="date" name="date" type="date" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-3 col-form-label form-control-label">Total</label>
                                <div class="col-lg-9">
                                    <input class="form-control" id="total" name="total" type="number" disabled>
                                </div>
                            </div>
                            
                            <div class="form-group">
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
@endsection

@section('scripts')
	<script src="{{ asset('js/scripts.js') }}"></script>
@endsection

