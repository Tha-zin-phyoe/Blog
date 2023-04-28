<nav class="navbar navbar-dark bg-light mb-2">
    <div class="container">
        <a
            class="navbar-brand text-primary"
            href="/"
        >My Blog</a>
        <div class="d-flex">
            <a
                href="/#blogs"
                class="nav-link"
            >Blogs</a>
            @auth
            <a
                href=""
                class="nav-link"
            >Welcome {{auth()->user()->name}}</a>
            <img src="{{auth()->user()->avatar}}" alt="" width="50px" height="50px" class="rounded-circle">
            <form
                action="/logout"
                method="POST"
            >
                @csrf
                <button
                    type="submit"
                    href=""
                    class="nav-link btn btn-link"
                >Logout</button>
            </form>
            @else
            <a
                href="/register"
                class="nav-link"
            >Register</a>
            <a
                href="/login"
                class="nav-link"
            >Login</a>
            @endauth
            <a
                href="#subscribe"
                class="nav-link"
            >Subscribe</a>
        </div>
    </div>
</nav>
