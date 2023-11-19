<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riff Musica - Home</title>
</head>

<body>
    <div class="section-one">
        <!-- <h1>Sezione 1</h1> -->
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="img/live/live03.jpg">
                </div>
                <div class="swiper-slide">
                    <img src="img/sedi/sedi05.jpg">
                </div>
                <div class="swiper-slide">
                    <img src="img/sedi/sedi03.jpg">
                </div>
                <div class="swiper-slide">
                    <img src="img/sedi/sedi01.jpg">
                </div>
                <div class="swiper-slide">
                    <img src="img/sedi/sedi06.jpg">
                </div>
            </div>

            <!-- If we need pagination -->
            <!-- <div class="swiper-pagination"></div> -->

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
        </div>

        <h1>TEST</h1>
    </div>



    <div class="section-two">
        <div class="custom-shape-divider-top-1697795202">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>

        <h1>Sezione 2</h1>
        <div class="spacer"></div>
    </div>

    <div class="section-one">
        <div class="custom-shape-divider-top-1697795202">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>

        <h1>Sezione 3</h1>
        <div class="spacer"></div>
    </div>

    <div class="section-two">
        <div class="custom-shape-divider-top-1697795202">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>

        <h1>Sezione 4</h1>
        <div class="spacer"></div>
    </div>


















    <!-- <h1 id="home-title">Prova home</h1> -->

    <!-- <div class="search-options">
        <div class="search-box">
            <input type="text" name="search-input" id="search-input" placeholder="Cerca un post...">
            <button id="search-button">🔎</button>
        </div>

        <select id="search-tag" name="" id="">
            <option default value="">Tutti</option>
            <option value="">Tag 1</option>
            <option value="">Tag 2</option>
            <option value="">Tag 3</option>
            <option value="">Tag 4</option>
            <option value="">Tag 5</option>
        </select>

    </div> -->

    <!-- <div class="posts">
        <?php
        // require "utils/display_posts.php";
        // Posts::displayPost($conn);
        ?>
    </div> -->

    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            autoplay: {
                delay: 5000,
            },

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
</body>

</html>