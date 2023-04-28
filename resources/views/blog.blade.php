<x-layout>
    <!-- single blog section -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <img
                    src="/storage/{{$blog->image}}"
                    class="card-img-top"
                    alt="..."
                />
                <h3 class="my-3">{{$blog->title}}</h3>
                <div>
                    <div>Author - <a href="/?username={{$blog->author->username}}">{{$blog->author->name}}</a></div>
                    <div><a href="/categories/{{$blog->category->slug}}"><span
                                class="badge bg-primary">{{$blog->category->name}}</span></a></div>
                    <div class="text-secondary">{{$blog->created_at->diffForHumans()}}</div>
                    <form  action="/blogs/{{$blog->slug}}/subscription" method="POST">
                        @csrf
                       @auth
                       @if(auth()->user()->isSubscribed($blog))
                       <button type="submit" class="btn btn-danger mt-3">Unsubscribe</button>
                       @else
                       <button type="submit"  class="btn btn-warning mt-3">subscribe</button>
                       @endif

                       @endauth

                    </form>
                </div>
                <p class="lh-md mt-3">
                    {{$blog->body}}
                </p>
            </div>
        </div>
    </div>


    <section class="container">
        <div class="row ">
            <div class="col-md-8  mx-auto">
                <form action="/blogs/{{$blog->slug}}" method="POST">
                    @csrf
                  <div class="form-group mb-3">
                    <textarea name="body" id="" cols="10" rows="5" class="form-control"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>

     <x-comments :comments="$blog->comments()->latest()->paginate(3)"/>
    <x-blogs_you_may_like_section :randomBlogs="$randomBlogs" />
</x-layout>
