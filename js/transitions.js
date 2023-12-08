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

// document.addEventListener('DOMContentLoaded', () => {
//     const transitionElement = document.querySelector('.transition1');
//     const anchors = document.querySelectorAll('.transition-a');

//     setTimeout(() => {
//         transitionElement.classList.remove('is-active');
//     }, 100);

//     for (let i = 0; i < anchors.length; i++) {
//         const anchor = anchors[i];

//         anchor.addEventListener('click', e => {
//             e.preventDefault();

//             let target = e.target.href;

//             setTimeout(() => {
//                 transitionElement.classList.add('is-active');

//                 window.location.href = target;
//             }, 300);
//         });
//     }
// });

// const transitionElement = document.querySelector('.transition1');

// window.addEventListener("load", function () {
//     transitionElement.classList.remove("is-active");
//     this.document.body.classList.remove("is-active");
// });