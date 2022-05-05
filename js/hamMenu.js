const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const video = document.querySelector('.video-container');
    const backAbout = document.querySelector('.bgImage');

    burger.addEventListener('click', () => {

        nav.classList.toggle('nav-active');

        burger.classList.toggle('toggle');

    });
}

navSlide();

//backAbout.classList.toggle('active-blur');
//video.classList.toggle('active-blur');