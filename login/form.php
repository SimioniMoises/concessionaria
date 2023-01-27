<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="color">
    <form class="row g-3">
        <div class="col-md-6">
            <label for="Tipo" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="Tipo" placeholder="Selecione um tipo de veículo">
        </div>
        <div class="col-md-6">
            <label for="modelo" class="form-label">modelo</label>
            <input type="password" class="form-control" id="modelo" placeholder="Informe o modelo">
        </div>
        <div class="col-12">
            <label for="ano" class="form-label">ano</label>
            <input type="text" class="form-control" id="ano" placeholder="Informe o ano">
        </div>
        <div class="col-12">
            <label for="marca" class="form-label">marca</label>
            <input type="text" class="form-control" id="marca" placeholder="Chevrolet">
        </div>
        <div class="form-floating">

            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Acessorios</label>

        </div>

        <div class="col-md-6">
            <label for="combustivel" class="form-label">combustivel</label>
            <input type="text" class="form-control" id="combustivel">
        </div>
        <div class="col-12">
            <label for="foto" class="form-label">Foto</label>
            <input type="text" class="form-control" id="foto" placeholder="Link da foto">
        </div>


    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>

</html>