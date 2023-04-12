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
            <td>
             <a href="{{ route('admin.projs.edit', $proj) }}">Modifica</a>
            </td>
            <td>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $proj->id }}">
                  Elimina              
                </button>
            </td>
            <div class="modal fade" id="delete-modal-{{ $proj->id }}" tabindex="-1" aria-labelledby="delete-modal-{{ $proj->id }}-label"
              aria-hidden="true">
             <div class="modal-dialog">
              <div class="modal-content">
               <div class="modal-header">
                 <h1 class="modal-title fs-5" id="delete-modal-{{ $proj->id }}-label">Conferma eliminazione</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body text-start">
                Sei sicuro di voler eliminare il progetto {{ $proj->title }} con ID
               {{ $proj->id }}? <br>
                 L'operazione non è reversibile
                </div>
               <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>

              <form action="{{ route('admin.projs.destroy', $proj) }}" method="POST" class="">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Elimina</button>
              </form>
             </div>
            </div>
           </div>
          </div> 
        </tr>
        @endforeach
    </tbody>
</table>
  
</section>
@endsection
</body>
</html>