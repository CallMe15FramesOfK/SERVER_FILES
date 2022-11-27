var canvas = document.getElementById('canvas'),
    ctx = canvas.getContext('2d'),
    x = 0,
    last = performance.now();

function draw(timestamp) {
  requestAnimationFrame(draw);
  
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  ctx.beginPath();
  ctx.rect(x, 20, 20, 20);
  ctx.fillStyle = "#3dfef3";
  ctx.fill();
  
  x += (timestamp - last) / 20;
  last = timestamp;
}
requestAnimationFrame(draw);