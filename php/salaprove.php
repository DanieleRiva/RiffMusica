<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riff Musica - Sala Prove</title>
</head>

<body>
    <div class="body-wrapper">

        <!-- <div class="spacer"></div> -->

        <div class="section-one">

            <div class="centered">
                <div class="section-content">
                    <h1>SALA <span style="color: rgb(var(--color-secondary));">PROVE</span></h1>
                    <p>Sala prove di circa 60mq molto <span style="color: rgb(var(--color-secondary));">spaziosa</span>, con ottima <span style="color: rgb(var(--color-secondary));">acustica</span>.</p>
                    <p>Per info e prenotazioni:</p>

                    <div class="lezione-gratuita">
                        <!-- <p>Chiamaci: </p> -->
                        <a id="a-header" class="section-btn" href="tel:+393294686229">3294686229</a>
                        <!-- <p>Oppure: </p> -->
                        <a href="https://wa.me/393294686229" class="social-icon social-icon--whatsapp" target="_blank">
                            <i class="fa fa-whatsapp"></i>
                            <div class="tooltip">Whatsapp</div>
                        </a>
                    </div>

                </div>

                <div class="spacer"></div>

                <div class="row">
                    <div class="column">
                        <a href="img/salaprove/salaprove03.jpg"><img src="img/salaprove/salaprove03.jpg"></a>
                        <a href="img/salaprove/salaprove01.jpg"><img src="img/salaprove/salaprove01.jpg"></a>
                        <a href="img/salaprove/salaprove02.jpg"><img src="img/salaprove/salaprove02.jpg"></a>
                        <a href="img/salaprove/salaprove04.jpg"><img src="img/salaprove/salaprove04.jpg"></a>
                    </div>
                    <div class="column">
                        <a href="img/salaprove/salaprove05.jpg"><img src="img/salaprove/salaprove05.jpg"></a>
                        <a href="img/salaprove/salaprove06.jpg"><img src="img/salaprove/salaprove06.jpg"></a>
                        <a href="img/salaprove/salaprove07.jpg"><img src="img/salaprove/salaprove07.jpg"></a>
                    </div>
                    <div class="column">
                        <a href="img/salaprove/salaprove08.jpg"><img src="img/salaprove/salaprove08.jpg"></a>
                        <a href="img/salaprove/salaprove09.jpg"><img src="img/salaprove/salaprove09.jpg"></a>
                        <a href="img/salaprove/salaprove10.jpg"><img src="img/salaprove/salaprove10.jpg"></a>
                    </div>
                    <!--  <div class="column">
                <img src="img/salaprove/salaprove10.jpg">
                <img src="img/salaprove/salaprove11.jpg">
            </div> -->
                </div>
            </div>

        </div>

        <div class="spacer"></div>

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