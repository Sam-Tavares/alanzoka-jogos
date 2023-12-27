@extends('layouts.main')

@section('title','Programados')

@section('content')
    <div class="div-flex">
        <div class="row x_title">
        <div class="col-sm-2"></div>
         <h1 class="col-sm-8">Jogos Programados</h1>
         <div class="col-sm-2 h-icon">
            <a href="{{route('jogos-home')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-down-left-square-fill" viewBox="0 0 16 16">
                <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm8.096-10.803L6 9.293V6.525a.5.5 0 0 0-1 0V10.5a.5.5 0 0 0 .5.5h3.975a.5.5 0 0 0 0-1H6.707l4.096-4.096a.5.5 0 1 0-.707-.707z"/>
            </svg>
            </a>
        </div>
        </div>
        <div class="card">
            <div class="table-center">
                <table id="tabelao" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Jogo/Saga</th>
                        <th>Duração(h)</th>
                        <th>Obs</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jogos as $jogo)
                    <tr>
                        <td style="width:50%"><a href="{{route('jogos-visualizar',['id'=>$jogo->id])}}">{{$jogo->nome_jogo}}</a></td>
                        <td style="width:20%">{{$jogo->dur_i}} - {{$jogo->dur_f}}</td>
                        <td style="width:30%">
                            @if($jogo->obs_jogo == null)
                            
                            @else                            
                            {{$jogo->obs_jogo}}
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection