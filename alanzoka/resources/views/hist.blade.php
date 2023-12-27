@extends('layouts.main')

@section('title','Home')

@section('content')
    <div class="div-flex">
        <div class="x_title">
         <h1>Histórico de Jogos</h1>
        </div>
        <div class="card">
        <div class="table-center">
            <table id="tabelao" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Jogo/Saga</th>
                    <th>Duração(h)</th>
                    <th>Data Inicial</th>
                    <th>Data Final</th>
                    <th>Status</th>
                    <th>Obs</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jogos as $jogo)
                <tr>
                    <td><a href="{{route('jogos-visualizar',['id'=>$jogo->id])}}">{{$jogo->nome_jogo}}</a></td>
                    <td>{{$jogo->dur_i}} - {{$jogo->dur_f}}</td>
                    <td>
                        @if($jogo->data_i < '2000-00-00')
                        --
                        @else
                        {{datas($jogo->data_i)}}
                        @endif
                    </td>
                    <td>
                        @if($jogo->data_f < '2000-00-00')
                        --
                        @else
                        {{datas($jogo->data_f)}}
                        @endif
                    </td>
                    <td>{{$jogo->status_jogo}}</td>
                    <td id="obs">
                    @if($jogo->obs_jogo == null)
                            
                    @else                            
                    ({{$jogo->obs_jogo}})
                    @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>

            <a href="{{route('jogos-export')}}">Baixar</a>
        </div>
        </div>
    </div>
@endsection