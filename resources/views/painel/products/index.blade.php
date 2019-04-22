@extends('painel.templates.template')

@section('content')

<h1 class="title-pg">Listagem dos produtos</h1>

<a href="{{route('produtos.create')}}" class="btn btn-primary btn-add">
    <span class="glyphicon glyphicon-plus"></span> Cadastrar
</a>

<table class="table table-striped">
    <tr>
        <th>Name</th>
        <th>Description</th> 
        <th width="100px">Ações</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>
            <a href="" class="actions edit">
                <span class="glyphicon glyphicon-pencil"></span>
            </a>
            <a href="" class="actions delete">
                <span class="glyphicon glyphicon-trash"></span>
            </a>
        </td>
    </tr>
    @endforeach

</table>

@endsection