// Inicia la animación cuando se hace clic en el botón
document.getElementById('start').addEventListener('click', () => {
    // Seleccionar todas las fases y la entrega final
    const steps = document.querySelectorAll('.step');
    const end = document.querySelector('.end');

    // Retraso inicial
    let delay = 0;

    // Animación secuencial para cada fase
    steps.forEach((step) => {
        gsap.to(step, {
            opacity: 1,
            y: 0,
            duration: 1,
            delay: delay,
            ease: "power2.out"
        });
        delay += 1.4; // Retraso progresivo para cada elemento
    });

    // Animación para la entrega final
    gsap.to(end, {
        opacity: 1,
        y: 0,
        duration: 1,
        delay: delay,
        ease: "power2.out"
    });
});
