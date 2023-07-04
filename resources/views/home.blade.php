@extends('layouts.app')

@section('titulo')
    Pagina Principal
@endsection('')

@section('contenido')
    
    <x-listar-post :post=$post />



@endsection('')