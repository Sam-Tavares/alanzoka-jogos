@extends('layouts.main')

@section('title',$jogos->nome_jogo)

@section('content')
    
    <div class="div-flex">
        <div class="x_title">
            <div class="row">
            <div class="col"></div>
            <h1 class="col h1">Jogo</h1>            
                <div class="col btn1">
                @if(isset(Auth::user()->name))
                    <a href="{{route('jogos-editar',['id'=>$jogos->id])}}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg>
                    </a>
                    <form class="btn1" action="{{route('jogos-destroy',['id'=>$jogos->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                    <button class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                        </svg>
                    </button>
                    </form>
                @endif
                </div>            
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('jogos-store') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Nome:</label>
                        <span class="col-sm-4 col-form-span" >{{$jogos->nome_jogo}}</span>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Tipo:</label>
                        <span class="col-sm-4 col-form-span" >{{$jogos->tipo_jogo}}</span>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Categoria:</label>
                        <span class="col-sm-4 col-form-span" >{{$jogos->categ_jogo}}</span>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Duração(h):</label>
                        <div id="inline" class="col-sm-2">
                        <span class="col-form-span" >{{$jogos->dur_i}}</span><span>-</span>
                        <span class="col-form-span" >{{$jogos->dur_f}} </span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Data p/Jogar:</label>
                        <div id="inline" class="col-sm-4">
                        <span class="col-form-span" >
                        @if($jogos->data_i < '2000-00-00')
                        
                        @else
                        {{datas($jogos->data_i)}}
                        @endif
                        </span><span>-</span>
                        <span class="col-form-span" >
                        @if($jogos->data_f < '2000-00-00')
                        
                        @else
                        {{datas($jogos->data_f)}}
                        @endif
                        </span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Obs:</label>
                        <span class="col-sm-4 col-form-span" >{{$jogos->obs_jogo}}</span>
                    </div>
                    <div class="mb-3 row">
                        <label id="status" class="col-sm-4 col-form-label">Status:</label>
                        <span class="col-sm-4 col-form-span" >{{$jogos->status_jogo}}</span>
                    </div>                    
                </form>

            </div>
        </div>
    </div>
@endsection