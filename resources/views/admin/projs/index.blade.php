<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>
<body>
    @extends('layouts.app')


@section('content')

<section class="conteiner">
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
        
        </tr>
    </thead>
    <tbody>
        @foreach ($projs as $proj)
        <tr>
            <th scope="row">{{ $proj->id }}</th>
            <td>{{ $proj->title }}</td>
            <td>{{ $proj->description }}</td>
            <td>{{ $proj->image }}</td>
            <td>
                <a href="{{ route('admin.projs.show', $proj) }}"> Dettaglio </a>
            </td>
            <td>
            <a href="{{ route('admin.projs.create') }}">Crea pasta</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
  
</section>
@endsection
</body>
</html>