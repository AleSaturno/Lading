let currentSlide = 0;

function changeSlide(n) {
    const slides = document.querySelectorAll('.carousel img');
    currentSlide = (currentSlide + n + slides.length) % slides.length;
    slides.forEach((slide, index) => {
        slide.style.transform = `translateX(-${currentSlide * 100}%)`;
    });
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
