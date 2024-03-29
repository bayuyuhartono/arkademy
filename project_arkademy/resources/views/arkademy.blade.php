<!DOCTYPE html>
<html lang="Bayu Puguh Yuhartono - Arkademy">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a class="navbar-brand" href="#"><img class="d-block" src="data:image/png;base64,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" alt="logo" style="width: 123px;"></a>
                    </div>
                </div>
            </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="btn btn-outline-danger" href="/add">ADD</a>
        </div>
    </nav>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Cashier</th>
                <th scope="col">Product</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $p)
            <tr>
                <td scope="row">{{ $i++ }}</td>
                <td>{{ $p->cashier }}</td>
                <td>{{ $p->namaproduk }}</td>
                <td>{{ $p->kateg }}</td>
                <td>{{ $p->harga }}</td>
                <td>
                    {{-- <a href="/edit/{{ $p->idpro }}">Edit</a>
                    | --}}
                    <a href="/delete/{{ $p->idpro }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</html>
