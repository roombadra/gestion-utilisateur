<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FSR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Student</a>
                    <a class="nav-link" href="#">Library</a>
                </div>
            </div>
        </div>
    </nav>

    <button type="button" class="btn btn-primary" style="margin: 2%">Créer un étudiant</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Matricule</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Email</th>
                <th scope="col">age</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{ $student->matricule }}</th>
                    <td>{{ $student->nom }}</td>
                    <td>{{ $student->prenom }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->age }}</td>
                    <td>
                        <button type="button" class="btn btn-primary">Modifier</button>
                        <button type="button" class="btn btn-danger">Supprimer</button>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $students->links() }}
</body>

</html>
