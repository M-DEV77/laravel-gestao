@extends('site.layouts.base')
@section('titulo','Produto')
@section('conteudo')

<h1>Produto:  {{$nome}}</h1>
<h2>
    você escolheu o produto: {{$nome}} que custa: R$: {{$preco}}
</h2>
@endsection



