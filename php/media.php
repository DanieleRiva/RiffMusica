<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riff Musica - Media</title>
</head>

<body>
    <div class="body-wrapper">

        <div class="spacer"></div>

        <div class="section-one">
            <div class="centered">
                <div class="section-content">
                    <h1>LE NOSTRE <span style="color: rgb(var(--color-secondary));">SEDI</span></h1>

                    <div class="swiper media">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img loading="lazy" src="img/sedi/sedi02-small.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="img/sedi/sedi10-small.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="img/sedi/sedi07-small.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="img/sedi/sedi08-small.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="img/sedi/sedi09-small.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="img/sedi/sedi15-small.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="img/sedi/sedi16-small.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="img/sedi/sedi17-small.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="img/sedi/sedi18-small.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="img/sedi/sedi19-small.jpg">
                            </div>
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev swiper-button-media"></div>
                        <div class="swiper-button-next swiper-button-media"></div>

                        <div class="swiper-pagination"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-two">
            <div class="custom-shape-divider-top-1697795202">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>

            <div class="centered">
                <div class="section-content">
                    <h1>EVENTI <span style="color: rgb(var(--color-secondary));">LIVE</span></h1>

                    <div class="swiper media">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img loading="lazy" src="img/live/live06-small.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="img/live/live02-small.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="img/live/live03-small.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="img/live/live04-small.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="img/live/live05-small.jpg">
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" src="img/live/live01-small.jpg">
                            </div>
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev swiper-button-media"></div>
                        <div class="swiper-button-next swiper-button-media"></div>

                        <div class="swiper-pagination"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

            <div class="spacer"></div>
        </div>

    </div>

    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            grabCursor: true,
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
                dynamicBullets: true,
            },
        });
    </script>
</body>

</html>