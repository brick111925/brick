const canvas = document.getElementById("canvas");
const ctx = canvas.getContext("2d");
canvas.width = 600;
canvas.height = 400;

let x = 50, y = 350, vx = 5, vy = -15, g = 0.5;

function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.beginPath();
    ctx.arc(x, y, 10, 0, Math.PI * 2);
    ctx.fillStyle = "red";
    ctx.fill();

    x += vx;
    y += vy;
    vy += g;

    if (y > 350) {
        vy *= -0.7;
    }

    requestAnimationFrame(draw);
}
draw();
