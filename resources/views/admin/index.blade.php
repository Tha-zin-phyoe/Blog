<x-layout>
    <div class="row">
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item"><a href="/admin/blogs">Dashboard</a></li>
                <li class="list-group-item"><a href="/admin/blogs/create">Create Blogs</a></li>
              </ul>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Intro</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                    <tr>
                        <td>{{$blog->id}}</td>
                        <td>{{$blog->title}}</td>
                        <td>{{$blog->intro}}</td>
                        <td >
                            <div class="d-flex">
                                <a class="btn btn-warning mx-2" href="/admin/blogs/{{$blog->slug}}/edit">Edit</a>
                            <form action="/admin/blogs/{{$blog->slug}}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                            </div>


                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
            {{$blogs->links()}}
        </div>
    </div>
</x-layout>
