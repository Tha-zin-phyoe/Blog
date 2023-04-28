@props(['blogs','categories'])
<section class="p-5" id="blog">
    <h3 class="text-center mb-3">Blogs</h3>
    <x-category-dropdown/>

       <form class="d-flex" action="/" method="GET">
           <input class="form-control me-1" type="search" placeholder="Search Blogs" aria-label="Search" name="search"  value="{{request('search')}}">
           <button class="btn btn-primary" type="submit">Search </button>
        </form>
</section>

<section>
    <div class="row flex-nowrap">
        @if ($blogs->count())
        @foreach ($blogs as $blog)
         <x-blog-card :blog="$blog" />

        @endforeach
        @else
            <p>Page not found</p>
        @endif
        {{$blogs->links()}}
    </div>
</section>
