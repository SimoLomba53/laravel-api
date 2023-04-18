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
  


<h1 class="text-center">MODIFICA PROGETTO</h1>

<form action="{{route('admin.projs.update',$proj)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="col-6 offset-3">
 <div>
    <label for="title" class="form-label">Titolo</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ?? $proj->title}}">
     @error('title')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
 </div>
 <div>
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control  @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description') ?? $proj->description}}">
    @error('description')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
 </div>
  <div>
    <label for="type_id" class="form-label">Type</label>
     <select name="type_id" id="type_id" class="form-select @error('type_id') is invalid @enderror">
     <option value="">NO TYPE</option>
     @foreach($types as $type){
      <option @if (old('type_id',$proj->type_id) == $type->id) selected @endif value="{{$type->id}}">{{$type->label}}</option>
     }
     @endforeach
    </select>
    @error('type_id')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
 </div>
 <div>
    <label for="image" class="form-label">Image</label>
    <input type="file" class="form-control  @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image') ?? $proj->image}}">
    @error('image')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
 </div>
 <div>
    <button type="submit" class="btn btn-primary">Salva</button>
 </div>
</div>

@if ($errors->any())
  <div class="alert alert-danger">
    <h4>Correggi i seguenti errori per proseguire: </h4>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
</form>
</body>
</html>