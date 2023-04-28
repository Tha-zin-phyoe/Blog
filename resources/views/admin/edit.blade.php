<x-layout>
    <div class="row">
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item"><a href="/admin/blogs">Dashboard</a></li>
                <li class="list-group-item"><a href="/admin/blogs/create">Create Blogs</a></li>
            </ul>
        </div>
        <div class="col-md-8">
            <form method="POST" action="/admin/blogs/create" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input required name="title" type="text" class="form-control" id="title"
                        value="{{$blog->title?? old('title') }}">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{$blog->slug??old('slug')}}">
                    @error('slug')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="intro">Intro</label>
                    <input type="text" class="form-control" id="intro" name="intro" value="{{$blog->intro??old('intro')}}">
                    @error('intro')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="post">Post</label>
                    <textarea type="text" class="form-control" id="post" rows="5" name="body">{{$blog->body??old('body')}}</textarea>
                    @error('body')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image">Upload Image</label>
                    <input type="file" class="form-control" id="image" name="image" value="{{ old('intro') }}">
                    @error('body')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="category">Category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</x-layout>
