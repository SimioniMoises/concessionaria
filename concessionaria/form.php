<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="color">
    <form class="row g-3">
        <div class="mb-3">
            <label for="Tipo" class="form-label">Tipo</label>
            <select id="Tipo" class="form-select" placeholder="Informe o tipo do veículo">
                <option></option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="Modelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="Modelo" placeholder="Informe o modelo">
        </div>
        <div class="col-12">
            <label for="Ano" class="form-label">Ano</label>
            <input type="text" class="form-control" id="Ano" placeholder="Informe o ano do veículo">
        </div>
        <div class="col-12">
            <label for="Marca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="Marca" placeholder="Ex:Chevrolet">
        </div>
        <div class="mb-3">
            <label for="Cor" class="form-label">Cor</label>
            <select id="Cor" class="form-select" placeholder="Informe a cor do veículo">
                <option></option>
            </select>
        </div>
        <label for="Acessório">Acessório</label>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="Acessório" style="height: 100px"></textarea>

        </div>

        <div class="mb-3">
            <label for="Combustível" class="form-label">Combustível</label>
            <select id="Combustível" class="form-select" placeholder="Gasolina Aditivada/Etanol/Diesel">
                <option></option>
            </select>
        </div>
        <div class="col-12">
            <label for="foto" class="form-label">Foto</label>
            <input type="text" class="form-control" id="foto" placeholder="Link(URL) da foto">
        </div>

        <a href=welcome.php><button type="button" class="btn btn-primary">Cadastrar </button></a>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>

</html>