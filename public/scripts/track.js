const track = document.querySelector(".track");
const images = Array.from(track.children);

const spacing = 130;

let baseSpeed = 1;
let slowFactor = 0.2;

let currentSpeed = baseSpeed;
let targetSpeed = baseSpeed;

let positions = images.map((_, i) => i * spacing);

track.addEventListener("mouseenter", () => {
    targetSpeed = baseSpeed * slowFactor;
});

track.addEventListener("mouseleave", () => {
    targetSpeed = baseSpeed;
});

function animate() {
    currentSpeed += (targetSpeed - currentSpeed) * 0.05;

    const trackWidth = track.offsetWidth;

    for (let i = 0; i < images.length; i++) {
        let x = positions[i];

        x -= currentSpeed;

        if (x < -spacing) {
            x += spacing * images.length;
        }

        positions[i] = x;

        const y = Math.sin(x * 0.01) * 25;

        images[i].style.transform =
            `translate(${x}px, calc(-50% + ${y}px))`;
    }

    requestAnimationFrame(animate);
}

animate();