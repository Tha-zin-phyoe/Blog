<div class="col-md-4 mb-3 mx-2">
    <div class="card" style="width: 18rem;">
        <img src="./assets/hero.jpg" class="card-img-top blogImg" alt="...">
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
