@extends('layouts.main')

@section('title','Cadastrar')

@section('content')

@if(isset($msg))
        <div class="alert alert-success" role="alert">
        {{$msg}}
        </div>
    @endif
@endsection