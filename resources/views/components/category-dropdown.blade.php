<div class="d-flex justify-content-center">
    <div class="mx-2">
     <div class="dropdown">
         <button class="btn btn-outline-primary mb-3 dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{$currentCategory?$currentCategory->name:'Filter by Category'}}
         </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
             @foreach ($categories as $category)
             <a class="dropdown-item" href="/?category={{$category->slug}}">{{$category->name}}</a>
             @endforeach
         </div>
       </div>
    </div>
    <div>
        {{-- <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>Filter by Tag</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select> --}}
    </div>
</div>
