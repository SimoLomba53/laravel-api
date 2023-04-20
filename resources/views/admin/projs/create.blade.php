

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
   <form action="{{ route('admin.projs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
<table class="table">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}"  />
    
    <label for="type_id" class="form-label">Type</label>
    <select name="type_id" id="type_id" class="form-select @error('type_id') is invalid @enderror">
     <option value="">NO TYPE</option>
     @foreach($types as $type){
      <option @if (old('type_id',$proj->type_id) == $type->id) selected @endif value="{{$type->id}}">{{$type->label}}</option>
     }
     @endforeach
    </select>
    
    
 <label class="form-label">Technologies</label>

<div class="form-check @error('technologies') is-invalid @enderror p-0">
  @foreach ($technologies as $technology)
    <input
      type="checkbox"
      id="technology-{{ $technology->id }}"
      value="{{ $technology->id }}"
      name="technologies[]"
      class="form-check-control"
      @if (in_array($technology->id, old('technologies', $proj_technologies ?? []))) checked @endif
    >
    <label for="technology-{{ $technology->id }}">
      {{ $technology->label }}
    </label>
    <br>
  @endforeach
</div>

 @error('technologies')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
 @enderror



    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description') }}" />
    

    <label for="image" class="form-label">Image</label>
    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image') }}"  />
    

    <button type="submit" class="btn btn-primary mt-3 text-center">Salva</button>

    @if ($errors->any())
  <div class="alert alert-danger mt-5">
    <h4>Correggi i seguenti errori per proseguire: </h4>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
</table>
</form>
</section>
@endsection
</body>
</html>

