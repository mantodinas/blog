<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Page Title</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<style>
</style>
<script src="{{ asset('js/app.js') }}"></script>
<body>

<header>
    <div class="nav-bar">
        <a class="main-btn" href="{{ route('post.index') }}">main</a>
        <a class="about-btn" href="{{ route('about') }}">about</a>
        <input id="post-search-input" class="search-input" type="text" placeholder="Search blog...">
        <a id="post-search-btn" class="search-btn" href="#">search</a>
        @auth
        <a class="create-blog" href="{{ route('post.create') }}">create post</a>
        <a class="logout" href="{{ route('logout') }}">logout</a>
        @endauth
        <button class="dropdown-btn"></button>
        <div class="navbar-dropdown">
            <a class="dropdown-btn" href="#"></a>
        </div>
    </div>

    <div class="logo-container">
        <div class="logo">
            <h1 class="text1">techno</h1>
            <h1 class="text2">blog</h1>
        </div>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer>
    <div class="footer-container" id="about">
        <div class="footer-top">
            <div class="social-networks">
                <a href="https://www.instagram.com/m.petrauskas/">
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
            </div>

            <div class="social-networks">
                <a href="https://twitter.com/Mantodinas">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>

            <div class="social-networks">
                <a href="https://www.linkedin.com/in/mantas-petrauskas-56781b142/">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>

            <div class="social-networks">
                <a href="https://github.com/mantodinas">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>
                Info
                <br> Website created for educational purposes learning and improving front end.
                <br> Designed by Mantas Petrauskas
            </p>
        </div>
    </div>
</footer>

</body>
</html>