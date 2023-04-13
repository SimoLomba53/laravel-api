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

<h1 class="text-center">MODIFICA PROGETTO</h1>
@vite('resources/js/app.js')

<form action="{{route('admin.projs.update',$proj)}}" method="POST">
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
    <label for="image" class="form-label">Image</label>
    <input type="text" class="form-control  @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image') ?? $proj->image}}">
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
</form>