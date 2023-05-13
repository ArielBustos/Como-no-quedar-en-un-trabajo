window.addEventListener('load', async () => {
  const canvas = document.querySelector("canvas");
  canvas.height = canvas.offsetHeight;
  canvas.width = canvas.offsetWidth;

  signaturePad = new SignaturePad(canvas, {});
});

const canvas = document.getElementById('ejemplo');
const ctx = canvas.getContext('2d');

let isDrawing = false;
let lastX = 0;
let lastY = 0;

function startDrawing(e) {
  isDrawing = true;
  lastX = e.clientX - canvas.offsetLeft;
  lastY = e.clientY - canvas.offsetTop;
}

function draw(e) {
  if (!isDrawing) return;
  ctx.beginPath();
  ctx.moveTo(lastX, lastY);
  ctx.lineTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
  ctx.stroke();
  lastX = e.clientX - canvas.offsetLeft;
  lastY = e.clientY - canvas.offsetTop;
}

function stopDrawing() {
  isDrawing = false;
}

canvas.addEventListener('mousedown', startDrawing);
canvas.addEventListener('mousemove', draw);
canvas.addEventListener('mouseup', stopDrawing);

const clearButton = document.getElementById('clear');
clearButton.addEventListener('click', function() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
});

const saveButton = document.getElementById('save');
saveButton.addEventListener('click', function() {
  const dataURL = canvas.toDataURL('image/png');
  const pdf = new jsPDF();
  pdf.addImage(dataURL, 'PNG', 0, 0, 200, 150);
  pdf.save('firma.pdf');
});
