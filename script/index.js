const modal = document.getElementById("infoModal");
const modalTitle = document.getElementById("modalTitle");
const modalDescription = document.getElementById("modalDescription");
const modalLink = document.getElementById("modalLink");
const closeModal = document.getElementById("closeModal");

function mostrarModal(titulo, descripcion, enlace) {
  modalTitle.textContent = titulo;
  modalDescription.textContent = descripcion;
  modalLink.href = enlace;
  modal.classList.remove("hidden");
}

document.getElementById("op-card").addEventListener("click", function () {
  modal.classList.add("flex");
  mostrarModal(
    "One Piece",
    "Descripción de One Piece...",
    "pages/games/OnePiece.html"
  );
});

document.getElementById("ao-card").addEventListener("click", function () {
  modal.classList.add("flex");
  mostrarModal(
    "Ao Ashi",
    "Descripción de Ao Ashi...",
    "../pages/games/AoiAshi.html"
  );
});

document.getElementById("sl-card").addEventListener("click", function () {
  modal.classList.add("flex");
  mostrarModal(
    "Solo Leveling",
    "Descripción de Solo Leveling...",
    "/ruta-a-pagina-de-solo-leveling"
  );
});

closeModal.addEventListener("click", function () {
  modal.classList.add("hidden");
});

const cards = document.querySelectorAll('.card');

cards.forEach(card => {
  card.addEventListener('mouseenter', function() {
    viewMore(card);
  });

  card.addEventListener('mouseleave', function() {
    card.style.backgroundColor = "";
    const viewMoreText = card.querySelector('.view-more');
    if (viewMoreText) {
      card.removeChild(viewMoreText);
    }
  });
});

function viewMore(card) {
    const viewMoreText = document.createElement('span');
    viewMoreText.textContent = "Ver más";
    viewMoreText.style.position = "absolute";
    viewMoreText.style.top = "50%";
    viewMoreText.style.left = "50%";
    viewMoreText.style.transform = "translate(-50%, -50%)";
    viewMoreText.style.color = "white";
    viewMoreText.style.fontWeight = "bold";
    viewMoreText.classList.add('view-more');
    card.appendChild(viewMoreText);
}