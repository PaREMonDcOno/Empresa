function init(elemid) {
  let canvas = document.getElementById(elemid);
  let c = canvas.getContext("2d");
  let w = (canvas.width = window.innerWidth);
  let h = (canvas.height = window.innerHeight);

  let particlesArray = [];
  let lineDistance = 150; // Distância para as linhas se conectarem

  // Função para criar partículas
  function Particle(x, y) {
    this.x = x;
    this.y = y;
    this.size = Math.random() * 20 + 1; // Tamanho da partícula
    this.speedX = Math.random() * 2 - 1; // Velocidade X
    this.speedY = Math.random() * 2 - 1; // Velocidade Y
    this.color = `rgba(0, 191, 255, 0.8)`; // Cor das partículas (azul elétrico)
  }

  // Atualiza a partícula
  Particle.prototype.update = function() {
    this.x += this.speedX;
    this.y += this.speedY;

    if (this.size > 0.2) this.size -= 0.1; // Fazendo a partícula desaparecer aos poucos
  };

  // Desenha a partícula
  Particle.prototype.draw = function() {
    c.fillStyle = this.color;
    c.beginPath();
    c.arc(this.x, this.y, this.size, 0, Math.PI * 2);
    c.closePath();
    c.fill();
  };

  // Conecta partículas com linhas
  function connectParticles() {
    for (let i = 0; i < particlesArray.length; i++) {
      for (let j = i; j < particlesArray.length; j++) {
        let dx = particlesArray[i].x - particlesArray[j].x;
        let dy = particlesArray[i].y - particlesArray[j].y;
        let distance = Math.sqrt(dx * dx + dy * dy);
        if (distance < lineDistance) {
          c.strokeStyle = `rgba(0, 191, 255, ${1 - distance / lineDistance})`;
          c.lineWidth = 0.5;
          c.beginPath();
          c.moveTo(particlesArray[i].x, particlesArray[i].y);
          c.lineTo(particlesArray[j].x, particlesArray[j].y);
          c.stroke();
        }
      }
    }
  }

  // Função para gerar novas partículas
  function createParticles(e) {
    let xPos = e.x;
    let yPos = e.y;
    for (let i = 0; i < 3; i++) {
      particlesArray.push(new Particle(xPos, yPos));
    }
  }

  // Função para animar as partículas
  function animateParticles() {
    c.clearRect(0, 0, w, h); // Limpa o canvas
    for (let i = 0; i < particlesArray.length; i++) {
      particlesArray[i].update();
      particlesArray[i].draw();
      if (particlesArray[i].size <= 0.2) {
        particlesArray.splice(i, 1); // Remove partículas pequenas
        i--;
      }
    }
    connectParticles(); // Desenha as linhas entre as partículas
    requestAnimationFrame(animateParticles); // Chama novamente a animação
  }

  // Evento de movimento do mouse para gerar partículas
  canvas.addEventListener("mousemove", createParticles);

  animateParticles(); // Inicia a animação
}

window.onload = function() {
  init("backgroundCanvas");
};
