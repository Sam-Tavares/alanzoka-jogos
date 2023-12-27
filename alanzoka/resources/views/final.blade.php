@extends('layouts.main')

@section('title','Finalizados')

@section('content')

    <div class="div-flex">
        <div class="row x_title">
        <div class="col-sm-2"></div>
         <h1 class="col-sm-8">Jogos Finalizados: {{count($jogos)}}</h1>
         <div class="col-sm-2 h-icon">
            <a href="{{route('jogos-home')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-down-left-square-fill" viewBox="0 0 16 16">
                <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm8.096-10.803L6 9.293V6.525a.5.5 0 0 0-1 0V10.5a.5.5 0 0 0 .5.5h3.975a.5.5 0 0 0 0-1H6.707l4.096-4.096a.5.5 0 1 0-.707-.707z"/>
            </svg>
            </a>
        </div>
        
        @php
        $m=1
        @endphp
        <form action="{{ route('jogos-ano') }}" method="post" class="d-flex" role="search">
            @csrf
            <div class="pesquisa">
            <select style="font-family: MikadoBlack" name="ano" class="form-select" >
                <option value="">({{$ano}})</option>
                @for($a=anoatual(); $a>=2020; $a--)
                <option value="{{$a}}">{{$a}}</option>
               @endfor
            </select>
            <button class="btn btn-outline-success" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg></button>            
            </div>
        </form>

        @foreach($meses as $mes)
        <div class="table-month">
            <h2>{{$mes}}</h2>
            <div class="table-finalr">
            <table id="" class="table" style="width:100%">
            <thead>
                <tr>
                    <th>Jogo/Saga</th>
                    <th>Data</th>
                    <th>Obs</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jogos as $jogo)
                @if(mes($jogo->data_f)==$m)
                <tr>
                    <td style="width:50%"><a href="{{route('jogos-visualizar',['id'=>$jogo->id])}}">{{$jogo->nome_jogo}}</a></td>
                    <td style="width:30%">{{datas($jogo->data_f)}}</td>
                    <td style="width:20%">
                    @if($jogo->obs_jogo == null)
                            
                    @else                            
                    ({{$jogo->obs_jogo}})
                    @endif
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
            </table>
            </div>            
        </div>
        
        @php
        $m=$m+1
        @endphp

        @endforeach
    </div>
@endsection