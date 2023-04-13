
<form action="{{ route('admin.projs.update') }}" method="POST"  enctype="multipart/form-data">
    @method('PUT') @csrf

    <label for="title" class="form-label">Title</label>
    <input
        type="text"
        class="form-control"
        id="title"
        name="title"
        value="{{ $proj->title}}"
    />

    <label for="description" class="form-label">Description</label>
    <input
        type="text"
        class="form-control"
        id="description"
        name="description"
        value="{{ $proj->description}}"
    />

    <label for="image" class="form-label">Image</label>
    <input
        type="file"
        class="form-control"
        id="image"
        name="image"
        value="{{ $proj->image }}"
    />

    <button type="submit" class="btn btn-primary">Salva</button>
</form>