<div class="mb-3 mx-2 col-md-4 " style="width:300px,height:200px">
    <div class="card" >
        <img src="/storage/{{$blog->image}}" width="150px" height="150px" object-fit="contain" class="card-img-top blogImg" alt="..." class="w-100"/>
        <div class="card-body">
          <h5 class="card-title">{{$blog->title}}</h5>
         <small>{{$blog->author->name}}-{{$blog->created_at->diffForHumans()}}</small>
         <p class="card-text">{{$blog->intro}}</p>
         <div class="tags">
          <a href="/categories/{{$blog->category->slug}}">
            <div class="badge bg-primary my-3">{{$blog->category->name}}</div>
          </a>
         </div>
         <a href="/blogs/{{$blog->slug}}" class="btn btn-primary">Read More</a>
        </div>
      </div>
</div>
