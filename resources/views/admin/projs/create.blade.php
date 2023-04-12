

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

<section class="conteiner p-5">
   <form action="{{ route('admin.projs.store') }}" method="POST">
    @csrf
<table class="table">
    <label for="Title" class="form-label">Title</label>
    <input type="text" class="form-control" id="Title" name="Title" />

    <label for="Description" class="form-label">Description</label>
    <input type="text" class="form-control" id="Description" name="Description" />

    <label for="Image" class="form-label">Image</label>
    <input type="text" class="form-control" id="Image" name="Image" />

    <button type="submit" class="btn btn-primary mt-3 text-center">Salva</button>
</table>
</form>
</section>
@endsection
</body>
</html>

