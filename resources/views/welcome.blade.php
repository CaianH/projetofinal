<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicShop</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="#">Início</a></li>
            <li><a href="http://localhost:8000/produto">Produto</a></li>
            <li><a href="#">Sobre Nós</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </nav>
</header>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light" _msttexthash="285103" _msthash="14">Music Shop</h1>
            <p class="lead text-body-secondary" _msttexthash="21445086" _msthash="15">Algo curto e importante sobre a coleção abaixo – seu conteúdo, o criador, etc. Torne-o curto e doce, mas não muito curto para que as pessoas não simplesmente pulem por cima dele.</p>
            <p>
                <a href="http://localhost:8000/produto" class="btn btn-primary my-2" _msttexthash="522860" _msthash="16">Cadastrar</a>
                <a href="#" class="btn btn-secondary my-2" _msttexthash="344032" _msthash="17">Relatório</a>
            </p>
        </div>
    </div>
</section>

<div class="album py-5 bg-body-tertiary">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($produtos as $produto)
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Espaço reservado: Miniatura" preserveAspectRatio="xMidYMid slice" focusable="false" _mstaria-label="470535" _mstHash="18"><title _mstTextHash="308451" _mstHash="19">Espaço reservado</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em" _mstTextHash="135850" _mstHash="20">Miniatura</text></svg>
                        <div class="card-body">
                            <p class="card-text" _msttexthash="10082852" _msthash="21">Este é um cartão mais amplo com texto de apoio abaixo como um lead natural para conteúdo adicional. Este conteúdo é um pouco mais longo.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" _msttexthash="61152" _msthash="22">Vista</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" _msttexthash="75699" _msthash="23">Editar</button>
                                </div>
                                <small class="text-body-secondary" _msttexthash="117624" _msthash="24">9 minutos</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2023 Minha Loja de Instrumentos Musicais</p>
</footer>
</body>
</html>
