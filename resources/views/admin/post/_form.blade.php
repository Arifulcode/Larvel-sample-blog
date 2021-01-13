<div class="form-group">
    <label for="category">Category</label>
    <select name="category_id" class="form-control" id="category">
        <option value="">Select Category</option>
        @foreach($categories as $category)
            <option @if(old('category_id',isset($post)?$post->category_id:null)) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    @error('category_id')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="author">Author</label>
    <select name="author_id" class="form-control" id="author">
        <option value="">Select Author</option>
        @foreach($authors as $author)
            <option @if(old('author_id',isset($post)?$post->author_id:null)) selected @endif value="{{ $author->id }}">{{ $author->name }}</option>
        @endforeach
    </select>
    @error('author_id')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="title">Title</label>
    <input value="{{ old('title',isset($post->title)?$post->title:null) }}" name="title" type="text" class="form-control" id="title" placeholder="Title">
    @error('title')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" class="form-control" id="content" rows="6">{{ old('content',isset($post->content)?$post->content:null) }}</textarea>
    @error('content')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="#">Featured</label>
    <div class="form-check">
        <label class="form-check-label">
            <input @if(old('is_featured') == 1) checked @endif value="1" type="checkbox" class="form-check-input" name="is_featured" id="is_featured">
            Yes
        </label>
    </div>
    @error('is_featured')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="#">Status</label>
    <div class="form-check">
        <label class="form-check-label">
            <input @if(old('status',isset($post)?$post->status:null) == 'published') checked @endif value="published" type="radio" class="form-check-input" name="status" id="published">
            Published
        </label>
    </div>
    <div class="form-check">

        <label class="form-check-label">
            <input @if(old('status',isset($post)?$post->status:null) == 'unpublished') checked @endif value="unpublished" type="radio" class="form-check-input" name="status" id="unpublished">
            Unpublished
        </label>
    </div>
    @error('status')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label>Image</label>
    <input type="file" name="image" class="file-upload-default">
    <div class="input-group col-xs-12">
        <input name="image" type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
        <span class="input-group-append">
          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
        </span>
    </div>
    @error('image')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
