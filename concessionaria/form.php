<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<a href="welcome.php"><button type="text" class="btn btn-primary"> Voltar </button></a>

<body class="color">



    <form class="row g-3" method="post" id="cadastro" action="conectar.php">
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <select id="tipo" name="tipo" class="form-select" placeholder="Informe o tipo do veículo">
                <option>Carro</option>
                <option>Moto</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" name="modelo" class="form-control" id="modelo" placeholder="Informe o modelo">
        </div>
        <div class="col-12">
            <label for="ano" class="form-label">Ano</label>
            <input type="number" name="ano" class="form-control" id="ano" placeholder="Informe o ano do veículo">
        </div>
        <div class="col-12">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" name="marca" class="form-control" id="marca" placeholder="Ex:Chevrolet">
        </div>
        <div class="mb-3">
            <label for="cor" class="form-label">Cor</label>
            <select id="cor" name="cor" class="form-select" placeholder="Informe a cor do veículo">
                <option>Amarelo</option>
                <option>Azul</option>
                <option>Roxo</option>
                <option>Preto</option>
                <option>Grafite</option>
            </select>
        </div>
        <label for="acessorio">Acessórios</label>
        <div class="form-floating">
            <textarea name="acessorio" class="form-control" placeholder="Air-bag, Sensor..." id="acessorio" style="height: 100px"></textarea>

        </div>

        <div class="mb-3">
            <label for="combustivel" class="form-label">Combustível</label>
            <select id="combustivel" name="combustivel" class="form-select" placeholder="Gasolina Aditivada/Etanol/Diesel">
                <option>Gasolina</option>
                <option>Etanol</option>
                <option>Diesel</option>
            </select>
        </div>
        <div class="col-12">
            <label for="foto" class="form-label">Foto</label>
            <input type="text" name="foto" class="form-control" id="foto" placeholder="Link(URL) da foto">
        </div>
        <div class="botao">
            <button type="submit" class="btn btn-primary"> Cadastrar </button>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>

</html>