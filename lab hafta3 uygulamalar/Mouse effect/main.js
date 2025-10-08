const flag = document.getElementById('flag');

let mouseX = window.innerWidth / 2;
let mouseY = window.innerHeight / 2;
let flagX = mouseX;
let flagY = mouseY;

const ease = 0.05; 




let halfW = flag.offsetWidth / 2;
let halfH = flag.offsetHeight / 2;

function updateHalf() {
  halfW = flag.offsetWidth / 2;
  halfH = flag.offsetHeight / 2;
}
window.addEventListener('resize', updateHalf);
flag.addEventListener('load', updateHalf);

window.addEventListener('mousemove', (e) => {
  mouseX = e.clientX;
  mouseY = e.clientY;
});

function animate() {
  flagX += (mouseX - flagX) * ease;
  flagY += (mouseY - flagY) * ease;

  flag.style.left = (flagX - halfW) + "px";
  flag.style.top  = (flagY - halfH) + "px";

  requestAnimationFrame(animate);
}
animate();
