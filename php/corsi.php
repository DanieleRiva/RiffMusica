<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header("location: ../index.php?page=corsi");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corsi</title>
</head>

<body>

    <div class="body-wrapper">

        <div class="section-one">
            <div class="centered">
                <div class="section-content">
                    <h1><span style="color: rgb(var(--color-secondary));">CHITARRA</span></h1>
                    <p>Impara a padroneggiare la chitarra grazie al nostro corso alla RIFF.</p>
                    <div class="spacer"></div>
                    <h4>Docenti di chitarra:</h4>

                    <div class="docenti">
                        <div class="docente" data-tilt data-tilt-max="8">
                            <a href="?page=docente&docente=paolo">
                                <img src="img/docenti/chitarra/paolo/paolo01.jpg" alt="">
                                <div class="docente-name">
                                    Paolo
                                </div>
                            </a>
                        </div>

                        <div class="docente" data-tilt data-tilt-max="8">
                            <a href="?page=docente&docente=aron">
                                <img src="img/docenti/chitarra/aron/aron01.jpg" alt="">
                                <div class="docente-name">
                                    Aron
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-two" id="section-scroll">
            <div class="custom-shape-divider-top-1697795202">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>

            <div class="centered">
                <div class="section-content">
                    <h1><span style="color: rgb(var(--color-secondary));">BASSO</span></h1>
                    <p>Impara a padroneggiare il basso grazie al nostro corso alla RIFF.</p>
                    <div class="spacer"></div>
                    <h4>Docenti di basso:</h4>

                    <div class="docenti">
                        <div class="docente" data-tilt data-tilt-max="8">
                            <a href="?page=docente&docente=simo">
                                <img src="img/docenti/basso/simo/simo01.webp" alt="">
                                <div class="docente-name">
                                    Simone
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="section-one" id="section-scroll">
            <div class="custom-shape-divider-top-1697795202">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>

            <div class="centered">
                <div class="section-content">
                    <h1><span style="color: rgb(var(--color-secondary));">CANTO</span></h1>
                    <p>Impara a padroneggiare la tua voce grazie al nostro corso alla RIFF.</p>
                    <div class="spacer"></div>
                    <h4>Docenti di canto:</h4>

                    <div class="docenti">
                        <div class="docente" data-tilt data-tilt-max="8">
                            <a href="?page=docente&docente=ilaria">
                                <img src="img/docenti/canto/ilaria/ilaria03.jpg" alt="">
                                <div class="docente-name">
                                    Ilaria
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-two" id="section-scroll">
            <div class="custom-shape-divider-top-1697795202">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>

            <div class="centered">
                <div class="section-content">
                    <h1><span style="color: rgb(var(--color-secondary));">PIANOFORTE</span></h1>
                    <p>Impara a padroneggiare il pianoforte grazie al nostro corso alla RIFF.</p>
                    <div class="spacer"></div>
                    <h4>Docenti di pianoforte:</h4>

                    <div class="docenti">
                        <div class="docente" data-tilt data-tilt-max="8">
                            <a href="?page=docente&docente=mattia">
                                <img src="img/docenti/piano/mattia/mattia01.jpg" alt="">
                                <div class="docente-name">
                                    Mattia
                                </div>
                            </a>
                        </div>

                        <div class="docente" data-tilt data-tilt-max="8">
                            <a href="?page=docente&docente=pietro">
                                <img style="object-position: left;" src="img/docenti/piano/pietro/pietro01.jpg" alt="">
                                <div class="docente-name">
                                    Pietro
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-one" id="section-scroll">
            <div class="custom-shape-divider-top-1697795202">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>

            <div class="centered">
                <div class="section-content">
                    <h1><span style="color: rgb(var(--color-secondary));">BATTERIA</span></h1>
                    <p>Impara a padroneggiare la batteria grazie al nostro corso alla RIFF.</p>
                    <div class="spacer"></div>
                    <h4>Docenti di batteria:</h4>

                    <div class="docenti">
                        <div class="docente" data-tilt data-tilt-max="8">
                            <a href="?page=docente&docente=edo">
                                <img style="object-position: right;" src="img/docenti/batteria/edo/edo01.jpg" alt="">
                                <div class="docente-name">
                                    Edo
                                </div>
                            </a>
                        </div>

                        <div class="docente" data-tilt data-tilt-max="8">
                            <a href="?page=docente&docente=christian">
                                <img src="img/docenti/batteria/christian/christian01.jpg" alt="">
                                <div class="docente-name">
                                    Christian
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 
        TiltJS
     -->
    <script src="js/tilt.jquery.min.js">
        // TiltJS
        $('.js-tilt').tilt({
            maxTilt: 10,
            perspective: 1000, // Transform perspective, the lower the more extreme the tilt gets.
            easing: "cubic-bezier(.03,.98,.52,.99)", // Easing on enter/exit.
            scale: 1.5, // 2 = 200%, 1.5 = 150%, etc..
            speed: 300, // Speed of the enter/exit transition.
            transition: true, // Set a transition on enter/exit.
            disableAxis: null, // What axis should be disabled. Can be X or Y.
            reset: true, // If the tilt effect has to be reset on exit.
            glare: true, // Enables glare effect
            maxGlare: 1 // From 0 - 1.
        })
    </script>
</body>

</html>