document.addEventListener("DOMContentLoaded", function () {
    const image = document.querySelector(".hero-img-wrap");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    image.classList.add("show");
                    observer.unobserve(image); // ek baar hi chale
                }
            });
        },
        {
            threshold: 0.3
        }
    );

    observer.observe(image);
});


document.addEventListener("DOMContentLoaded", () => {
    const leftElement = document.querySelector(".hero-img-left");

    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.3 }
    );

    if (leftElement) {
        observer.observe(leftElement);
    }
});


document.addEventListener("DOMContentLoaded", () => {
    const image = document.querySelector(".img-left");

    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.3 }
    );

    if (image) observer.observe(image);
});