<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta ="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body class="container">
<div class="row">

    <div class="col-sm-10 offset-sm-1 text-center">
        <h2 style="margin: 25px 0">
            <img src="{{ url('/') }}/logotipo.jpg" />
        </h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-10 offset-sm-1">
        <h2>Registar novo socio</h2>
        <form method="POST" action="/associado/novo">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nome_completo">Nome Completo:</label>
                <input type="text" class="form-control" id="nome_completo" name="nome_completo">
            </div>
            <div class="form-group">
                <label for="">Sexo:</label>
                <select name="sexo" id="sexo" class="form-control">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Email:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone">
            </div>
            <div class="form-group">
                <label for="morada">Morada:</label>
                <input type="text" class="form-control" id="morada" name="morada">
            </div>
            <div class="form-group">
                <label for="">Freguesia:</label>
                <input type="text" class="form-control" id="freguesia" name="freguesia">
            </div>
            <div class="form-group">
                <label for="">Distrito:</label>
                <input type="text" class="form-control" id="distrito" name="distrito">
            </div>
            <div class="form-group">
                <label for="">Concelho:</label>
                <input type="text" class="form-control" id="concelho" name="concelho">
            </div>
            <div class="form-group">
                <label for="">Codigo Postal:</label>
                <input type="text" class="form-control" id="codigo_postal" name="codigo_postal">
            </div>
            <div class="form-group">
                <button style="cursor:pointer" type="submit" class="btn btn-primary">Criar Registo</button>
            </div>
        </form>
    </div>
</div>
<div class="row">

</div>.

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

