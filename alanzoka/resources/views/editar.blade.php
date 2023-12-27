@extends('layouts.main')

@section('title','Editar'.' - '.$jogos->nome_jogo)

@section('content')

@if(isset($msg))
        <div class="alert alert-success" role="alert">
        {{$msg}}
        </div>
    @endif
    
    <div class="div-flex">
        <div class="x_title">
            <h1>Editar Jogo</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('jogos-update',['id'=>$jogos->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Nome*:</label>
                        <div class="col-sm-8">
                            <input value="{{$jogos->nome_jogo}}" required="" name="nome_jogo" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Tipo*:</label>
                        <div class="col-sm-4">
                            <select required="" name="tipo_jogo" class="form-select" aria-label="Default select example">
                                <option value="{{$jogos->tipo_jogo}}" selected>{{$jogos->tipo_jogo}}</option>
                                <option value="Jogo">Jogo</option>
                                <option value="Saga">Saga</option>
                                <option value="Trilogia">Trilogia</option>
                                <option value="Evento">Evento</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Categoria*:</label>
                        <div class="col-sm-4">
                            <select required="" name="categ_jogo" class="form-select" aria-label="Default select example">
                                <option value="{{$jogos->categ_jogo}}" selected>{{$jogos->categ_jogo}}</option>
                                <option value="Ação">Ação</option>
                                <option value="Aventura">Aventura</option>
                                <option value="RPG">RPG</option>
                                <option value="Terror">Terror</option>
                                <option value="Casual">Casual</option>
                                <option value="Corrida">Corrida</option>
                                <option value="Esportes">Esportes</option>
                                <option value="Estratégia">Estratégia</option>
                                <option value="Indie">Indie</option>
                                <option value="Multijogador">Multijogador</option>
                                <option value="Simulação">Simulação</option>
                                <option value="Gerenciamento">Gerenciamento</option>
                                <option value="Mundo Aberto">Mundo Aberto</option>
                                <option value="Puzzle">Puzzle</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Duração(h):</label>
                        <div id="inline" class="col-sm-4">
                            <input value="{{$jogos->dur_i}}" type="number" name="dur_i" class="form-control"><span>-</span>
                            <input value="{{$jogos->dur_f}}" type="number" name="dur_f" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Data p/Jogar:</label>
                        <div id="inline" class="col-sm-4">
                            <input value="{{$jogos->data_i}}" name="data_i" type="date" class="form-control"><span>-</span>
                            <input value="{{$jogos->data_f}}" name="data_f" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Obs:</label>
                        <div class="col-sm-8">
                            <input value="{{$jogos->obs_jogo}}" name="obs_jogo" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label id="status" class="col-sm-4 col-form-label">Status*:</label>
                        <div class="col-sm-4">
                            <select required="" name="status_jogo" class="form-select" aria-label="Default select example">
                                <option value="{{$jogos->status_jogo}}" selected>{{$jogos->status_jogo}}</option>
                                <option value="Programado">Programado</option>
                                <option value="Lancamento">Lançamento</option>
                                <option value="Finalizado">Finalizado</option>
                                <option value="Pausado">Pausado</option>
                            </select>
                        </div>
                    </div>

                        <button type="submit" class="btn btn-success">Atualizar</button>
                        <button value="1" type="submit" name="limpar_cad" class="btn btn-danger">Limpar</button>                        
                </form>

            </div>
        </div>
    </div>
@endsection