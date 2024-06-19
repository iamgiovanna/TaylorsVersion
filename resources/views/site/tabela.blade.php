<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Adicione o link para o Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="{{ asset('assets/c.png') }}" type="image/x-icon">

</head>

<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Dados Recebidos</h2>
    <div class="table-responsive">
      <table class="table table-bordered">

        <thead class="thead-blue">
            <tr>

                <th scope="col" class="px-6 py-3">
                    Nome
                </th>
                <th scope="col" class="px-6 py-3">
                    Telefone
                </th>
                <th scope="col" class="px-6 py-3">
                    Endereço
                </th>
                <th scope="col" class="px-6 py-3">
                    Sexo
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($_POST as $key => $value)
                @if ($key != '_token')
                <td class="px-6 py-4">{{ $value }}</td>
                @endif


                @endforeach
            </tr>

  </div>

  <!-- Adicione os scripts do Bootstrap e jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
