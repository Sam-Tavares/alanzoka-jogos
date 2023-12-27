@extends('layouts.main')

@section('title','Home')

@section('content')
    <div class="div-flex">
        <div class="x_title">
         <h1>Sobre Alanzoka</h1>
        </div>
        <div class="card">
            <br>
        <h3>Sempre jogando alguma coisa aí.</h3>
        
        <br>

        <div class="row">
            <a class="mid col-sm-3" href="https://www.twitch.tv/alanzoka" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-twitch" viewBox="0 0 16 16">
                <path d="M3.857 0 1 2.857v10.286h3.429V16l2.857-2.857H9.57L14.714 8V0H3.857zm9.714 7.429-2.285 2.285H9l-2 2v-2H4.429V1.143h9.142v6.286z"/>
                <path d="M11.857 3.143h-1.143V6.57h1.143V3.143zm-3.143 0H7.571V6.57h1.143V3.143z"/>
            </svg>twitch.tv/alanzoka</a>

            <a class="mid col-sm-3" href="https://www.youtube.com/alanzoka" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
            </svg>youtube.com/alanzoka</a>

            <a class="mid col-sm-3" href="https://www.youtube.com/@LivesAlanzoka" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
            </svg>youtube.com/@LivesAlanzoka</a>

            <a class="mid col-sm-3" href="https://www.instagram.com/alanzoka" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg>instagram.com/alanzoka</a>
        </div>  
        <br>
        </div>
    </div>

    <div class="r-home">
        <div class="c-home c-1">
            <div class="row x_title">
                <h2 class="col">Programados</h2>
                <div class="col h-icon">
                <a href="{{route('jogos-programados')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                    <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                </svg>
                </a>
                </div>
            </div>
            <div class="t-home wrap">
                <table id="" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Jogo/Saga</th>
                            <th>Duração(h)</th>
                            <th>Obs</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jogos_prog as $jogo)
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

        <div class="c-home">
            <div class="row x_title">
                <h2 class="col">Lançamentos</h2>
                <div class="col h-icon">
                    <a href="{{route('jogos-lancamentos')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                    <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                    </svg>
                    </a>
                </div>
            </div>
            <div class="t-home">
                <table id="" class="table table-striped">
                <thead>
                    <tr>
                        <th>Jogo/Saga</th>
                        <th>Lançamento</th>
                        <th>Obs</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jogos_lanc as $jogo)
                    <tr>
                        <td style="width:50%"><a href="{{route('jogos-visualizar',['id'=>$jogo->id])}}">{{$jogo->nome_jogo}}</a></td>
                        <td style="width:20%">
                        @if($jogo->data_i < '2000-00-00')
                        --
                        @else
                        {{datas($jogo->data_i)}}
                        @endif
                        </td>
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

            <div class="c-home">
                    <div class="row x_title">
                        <h2 class="col">Finalizados</h2>
                        <div class="col h-icon">
                            <a href="{{route('jogos-finalizados',['ano'=>anoatual()])}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
                            <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
                            </svg>
                            </a>
                        </div>
                    </div>
                <div class="t-home">
                    <table id="" class="table">
                    <thead>
                        <tr>
                            <th>Jogo/Saga</th>
                            <th>Data</th>
                            <th>Obs</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jogos_final as $jogo)
                        <tr>
                            <td style="width:50%"><a href="{{route('jogos-visualizar',['id'=>$jogo->id])}}">{{$jogo->nome_jogo}}</a></td>
                            <td style="width:20%">{{datas($jogo->data_f)}}</td>
                            <td style="width:30%">
                            @if($jogo->obs_jogo == null)
                                    
                            @else                            
                            ({{$jogo->obs_jogo}})
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