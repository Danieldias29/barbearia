let indiceAtual = 0;

function mudarSlide(direcao) {
  const slides = document.getElementById('slides');
  const totalSlides = slides.children.length;

  indiceAtual += direcao;

  // Volta para o primeiro slide se passar do último
  if (indiceAtual >= totalSlides) {
    indiceAtual = 0;
  }

  // Vai para o último slide se voltar antes do primeiro
  if (indiceAtual < 0) {
    indiceAtual = totalSlides - 1;
  }

  // Move a faixa de slides horizontalmente
  slides.style.transform = `translateX(-${indiceAtual * 100}%)`;
}
