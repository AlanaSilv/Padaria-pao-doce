@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div id="search-container" class="col-md-12"></div>
<h1 style="margin: 30px;">Produtos Cadastrados:</h1>
<div class="col-md-12 dashboard-product-container">
    <div class="row">
    <div class="col-md-2 text-center">
            <a href="/cadastro/cadastroprodutos"  class="btn btn-warning" id="cadastro2-submit">Cadastrar Produto</a>
            <a href="/relatoriovendas"  class="btn btn-warning" id="cadastro2-submit">Relatório Vendas</a>
        </div>
        <div class="col-md-10">
            @if(count($products)>0)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Código</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td><a href="/cadastro/{{ $product -> id }}">{{$product->product}}</a></td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->qtd}}</td>
                            <td>{{$product->valor}}</td>
                            <td>{{$product->codigo}}</td>
                            <td>
                                <a href="/cadastro/edit/{{$product->id}}" id="btncrud" class="btn btn-success edit btn">Editar</a> 

                                <form action="/cadastro/{{$product->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" id="btncrud" class="btn btn-danger delete-btn"> DELETAR</button>
                                </form>
                            </td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p style="padding: 75px;">Não há produtos cadastrados: <a href="/cadastro/cadastroprodutos">Adicionar Produto</a></p>
            @endif
        </div>
    </div>
</div>

@endsection
