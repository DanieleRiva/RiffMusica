window.onload = () => {
    // var items = [
    //     "I nostri corsi sono molto convenienti!",
    //     "Offriamo ai nostri studenti la possibilità di partecipare a eventi dal vivo",
    //     "I nostri insegnanti vengono da posti di alta istruzione"
    // ];
    // var item = items[Math.floor(Math.random() * items.length)];
    // document.getElementById("loading-text").textContent = item;

    const transitionElement = document.querySelector('.transition1');
    const anchors = document.querySelectorAll('.transition-a');

    setTimeout(() => {
        transitionElement.classList.remove('is-active');
    }, 300);


    for (let i = 0; i < anchors.length; i++) {
        const anchor = anchors[i];

        anchor.addEventListener('click', e => {
            e.preventDefault();

            let target = e.target.href;

            transitionElement.classList.add('is-active');

            setTimeout(() => {
                window.location.href = target;
            }, 300);
        });
    }
};