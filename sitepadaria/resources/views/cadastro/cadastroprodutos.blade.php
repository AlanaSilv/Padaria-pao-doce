@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')

<div id="product-create-container" class="col-md-6 offset-md-3">
    <h1 class="text-center">Adicionar Produto</h1>
    <form action="/cadastro" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
         <label for="image">Imagem do Produto:</label>
         <input type="file" id="image" name="image" class="from-control-file">
        </div>
        <div class="form-group">
         <label for="product">Nome do Produto:</label>
         <input type="text" class="form-control" id="product" name="product" placeholder="Nome do produto">
        </div>
        <div class="form-group">
         <label for="description">Descrição do Produto:</label>
         <input type="text" class="form-control" id="description" name="description" placeholder="Descrição do produto">
        </div>
        <div class="form-group">
         <label for="qtd">Quantidade do Produto:</label>
         <input type="text" class="form-control" id="qtd" name="qtd" placeholder="Quantidade do produto">
        </div>
        <div class="form-group">
         <label for="valor">Valor do Produto:</label>
         <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor do produto">
        </div>
        <div class="form-group">
         <label for="codigo">Código do Produto:</label>
         <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo do produto">
        </div>
        <input type="submit" id= "btncadastro" class="btn btn-success" value="Confirmar">
    </form>
</div>

@endsection