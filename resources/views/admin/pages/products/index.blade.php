@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')



@section('content')
    <h1>Exibindo os produtos</h1>
    <a href="{{ route('products.create') }}">cadastrar</a>
    <hr>

    @component('admin.components.card')
        @slot('title')
            <h1>Título Card</h1>
        @endslot
            um card de exemplo
    @endcomponent

    @include('admin.alerts.alerts', ['content' => 'Alerta de preços'])

    @if (isset($products))
        @foreach ($products as $product)
            <p class='@if ($loop->last) last @endif'>{{ $product }}</p>
        @endforeach
    @endif

    <hr>



    @if ($teste === '123')
        é igual
    @elseif($teste == 123)
        É igual a 123
    @else
        é diferente
    @endif


    @unless ($teste === '123')
        sdfasdf
    @else
        fafas
    @endunless

    @isset($teste2)
        <p>{{ $teste2 }}</p>
    @endisset

    @empty($teste3)
        <p>vazio...</p>
    @endempty

    @auth
        <p>autenticado</p>
    @else
        <p>Não autenticado</p>
    @endauth

    @guest
        <p>Não autenticado</p>
    @endguest

    @switch($teste)
        @case(1)
            igual a 1
            @break
        @case(2)
            igual a 2
            @break
        @default

    @endswitch
@endsection
@push('styles')
    <style>
        .last {background: #CCC};
    </style>
@endpush

