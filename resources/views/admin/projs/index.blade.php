<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <th scope="col">Type</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
        
        </tr>
    </thead>
    <tbody>
        @foreach ($projs as $proj)
        <tr>
            <th scope="row">{{ $proj->id }}</th>
            <td>{{ $proj->title }}</td>
            <td>{{ $proj->type?->label }}</td>
            <td>{{ $proj->description }}</td>
            <td><img class="w-25" src="{{ asset(  $proj->image) }}" alt=""></td>
            <td class="g-5">
             <a href="{{ route('admin.projs.show', $proj) }}"><i class="fa-solid fa-circle-info"></i></a>
             <a href="{{ route('admin.projs.create') }}"><i class="fa-solid fa-circle-plus"></i></a>
             <a href="{{ route('admin.projs.edit', $proj) }}"><i class="fa-solid fa-pen"></i></a>
            </td>
            <td>
              <button type="button" class="btn btn-danger d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $proj->id }}">
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