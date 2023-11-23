window.onload = () => {
    const transitionElement = document.querySelector('.transition1');
    const anchors = document.querySelectorAll('.transition-a');

    setTimeout(() => {
        transitionElement.classList.remove('is-active');
    }, 100);


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