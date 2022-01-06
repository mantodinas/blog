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
    <div class="nav-bar-container">
        <div class="nav-bar">
            <div class="nav-bar-top">
                <img src="img/techno-blog2.png">
                <h1>techno blog</h1>
            </div>

            <div class="nav-bar-bottom">
                <a href="#">main</a>
                <a href="#">about</a>
                <input class="search" type="text" placeholder="Search blog..">
            </div>
        </div>
    </div>
</header>

<main>
    <div class="blog-container">

        <div class="blog">
            <div class="latest-blog-indigator"></div>
            
            <img class="blog-img" src="img/blog-example-img/blog1.jpg">
            <h2 class="blog-title">blog 1 title about technology</h2>
            <p class="short-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure molestias beatae deserunt delectus cum earum illum doloremque praesentium. Ipsa quae tempore quos beatae vitae, odio doloremque ipsam minima accusantium quam!</p>
            <p class="day-added">2022 01 01</p>
        </div>

        <div class="blog">
            <img class="blog-img" src="img/blog-example-img/blog2.jpg">
            <h2 class="blog-title">blog 2 title about technology</h2>
            <p class="short-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure molestias beatae deserunt delectus cum earum illum doloremque praesentium. Ipsa quae tempore quos beatae vitae, odio doloremque ipsam minima accusantium quam!</p>
            <p class="day-added">2022 01 01</p>
        </div>

        <div class="blog">
            <img class="blog-img" src="img/blog-example-img/blog3.jpg">
            <h2 class="blog-title">blog 3 title about technology</h2>
            <p class="short-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure molestias beatae deserunt delectus cum earum illum doloremque praesentium. Ipsa quae tempore quos beatae vitae, odio doloremque ipsam minima accusantium quam!</p>
            <p class="day-added">2022 01 01</p>
        </div>

        <div class="blog">
            <img class="blog-img" src="img/blog-example-img/blog4.jpg">
            <h2 class="blog-title">blog 4 title about technology</h2>
            <p class="short-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure molestias beatae deserunt delectus cum earum illum doloremque praesentium. Ipsa quae tempore quos beatae vitae, odio doloremque ipsam minima accusantium quam!</p>
            <p class="day-added">2022 01 01</p>
        </div>

        <div class="blog">
            <img class="blog-img" src="img/blog-example-img/blog5.jpg">
            <h2 class="blog-title">blog 5 title about technology</h2>
            <p class="short-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure molestias beatae deserunt delectus cum earum illum doloremque praesentium. Ipsa quae tempore quos beatae vitae, odio doloremque ipsam minima accusantium quam!</p>
            <p class="day-added">2022 01 01</p>
        </div>

        <div class="blog">
            <img class="blog-img" src="img/blog-example-img/blog6.jpg">
            <h2 class="blog-title">blog 6 title about technology</h2>
            <p class="short-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure molestias beatae deserunt delectus cum earum illum doloremque praesentium. Ipsa quae tempore quos beatae vitae, odio doloremque ipsam minima accusantium quam!</p>
            <p class="day-added">2022 01 01</p>
        </div>

        <div class="blog">
            <img class="blog-img" src="img/blog-example-img/blog7.jpg">
            <h2 class="blog-title">blog 7 title about technology</h2>
            <p class="short-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure molestias beatae deserunt delectus cum earum illum doloremque praesentium. Ipsa quae tempore quos beatae vitae, odio doloremque ipsam minima accusantium quam!</p>
            <p class="day-added">2022 01 01</p>
        </div>
    </div>
</main>

<footer>
    <div class="footer-container" id="about">
        <div class="footer-top">
            <div class="tooltip" data-tooltip="instagram">
                <a href="https://www.instagram.com/m.petrauskas/">
                    <img src="#">
                </a>
            </div>

            <div class="tooltip" data-tooltip="twitter">
                <a href="https://twitter.com/Mantodinas">
                    <img src="#">
                </a>
            </div>

            <div class="tooltip" data-tooltip="linkedin">
                <a href="https://www.linkedin.com/in/mantas-petrauskas-56781b142/">
                    <img src="#">
                </a>
            </div>

            <div class="tooltip" data-tooltip="github">
                <a href="https://github.com/mantodinas">
                    <img src="#">
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