    @csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" value="{{ $model->title }}">
    </div>

    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" class="form-control" name="slug" id="slug" value="{{ $model->slug }}">
    </div>

    <div class="form-group">
        <label for="published_at">Published Date/Time</label>
        <input type="text" class="form-control" name="published_at" id="published_at"
            value="{{ $model->published_at }}">
    </div>

    <div class="form-group">
        <label for="excerpt">Excerpt</label>
        <textarea class="form-control" name="excerpt" id="excerpt">{{ $model->excerpt }}</textarea>
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" name="body" id="body">{{ $model->body }}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-dark">Submit</button>
    </div>
