let currentSlide = 0;

function changeSlide(n) {
    const slides = document.querySelectorAll('.carousel-images img');
    const totalSlides = slides.length;
    currentSlide = (currentSlide + n + totalSlides) % totalSlides;
    const offset = -currentSlide * 100;
    document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`;
}

function autoChangeSlide() {
    changeSlide(1);
    setTimeout(autoChangeSlide, 5000); // Cambia de imagen cada 3 segundos
}

document.getElementById('register-btn').addEventListener('click', function() {
    const formContainer = document.getElementById('form-container');
    formContainer.style.display = formContainer.style.display === 'none' || formContainer.style.display === '' ? 'flex' : 'none';
});

document.getElementById('close-btn').addEventListener('click', function() {
    document.getElementById('form-container').style.display = 'none';
});

window.addEventListener('click', function(event) {
    const formContainer = document.getElementById('form-container');
    if (event.target === formContainer) {
        formContainer.style.display = 'none';
    }
});

window.onload = autoChangeSlide;
