@if($post->exists)
<form action="{{ route('admin.posts.update', $post) }}" method="POST">
    @method('PUT')
    @else
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @endif
        @csrf
        <div class="form-row">
            <div class="col-12 mb-3">
                <label for="title">Titolo</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $post->title }}" required>
            </div>
            <div>
                <label for="category_id">Categoria</label>
                <select class="custom-select" id="category_id" name="category_id">
                    <option value="">Nessuna categoria</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if($post->category_id === $category->id) selected
                        @endif>{{ $category->label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-12">
                <label for="content">Contenuto</label>
                <textarea class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="col-12 mb-3">
                <label for="image">Url immagine</label>
                <input type="url" class="form-control" id="image" name="image" value="{{ $post->image }}" required>
            </div>
        </div>