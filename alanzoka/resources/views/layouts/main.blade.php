<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('img/alanzoka-logo2.png') }}">
    <title>Alanzoka Jogos - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://db.onlinewebfonts.com/c/263d1b0befdb7b043e3e544858bff0e5?family=MikadoBlack" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/9201ff288af8431261748d322a3ecabd?family=MikadoRegular" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="/DataTables/datatables.css" />
    <link rel="stylesheet" href="/js/datatable.js">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

<div id="wrapper">
    <nav class="navbar navbar-expand-lg fixed-top" >
        <div class="container-fluid" id="navbar-logo">
                <a class="navbar-brand" href="{{route('jogos-home')}}">
                <img id="navbar-img" src="https://www.imagensempng.com.br/wp-content/uploads/2023/08/9712.png" alt="Logo" class="align-text-center">
                Alanzoka - Jogos    
                </a>
            <div class="navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                @if(Request::segment(1)!=null)
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('jogos-programados')}}">Programados</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('jogos-lancamentos')}}">Lançamentos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('jogos-finalizados',['ano'=>anoatual()])}}">Finalizados</a>
                    </li>                
                @endif
                    @if(isset(Auth::user()->name))
                    <div class="dropdown show">
                    <a style=" color: #F29F05;"class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{route('dashboard')}}">Ger. Perfil</a>
                        <a class="dropdown-item" href="{{route('jogos-cadastrar')}}">Cadastro de Jogos</a>
                        <a class="dropdown-item" href="{{route('jogos-historico')}}">Histórico</a>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                        <button type="submit" class="dropdown-item" href="">Logout</button>
                        </form>
                    </div>
                    </div>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="body-content">
    @yield('content')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/DataTables/datatables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
<script>
new DataTable('#tabelao', {
    scrollX: true,
    ordering: false,
    info: false,
    language: {
        search: 'Pesquisa',
        url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json'}
});

new DataTable('table.display',{
    scrollX: true,
    ordering: false,
    info: false,
    ordering: false,
    paging: true,
    language: {
        search: 'Pesquisa',
        url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json'}
});

</script>
<footer>
	<span>&copy; 2023 - Todos os direitos reservados: Alanzoka The Gamer</span>
</footer>
</div>
</body>
</html>