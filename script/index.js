//Componentes del modal
const modal = document.getElementById("infoModal");
const modalTitle = document.getElementById("modalTitle");
const modalDescription = document.getElementById("modalDescription");
const modalLink = document.getElementById("modalLink");
const closeModal = document.getElementById("closeModal");

//Funcion para mostrar modal
// +1 Funcion con 2 argumentos
function mostrarModal(titulo, descripcion, enlace) {
  modalTitle.textContent = titulo;
  modalDescription.textContent = descripcion;
  modalLink.href = enlace;
  modal.classList.remove("hidden");
}

//Tarjeta de One Piece
// +1 Evento manejado
document.getElementById("op-card").addEventListener("click", function () {
  modal.classList.add("flex");
  mostrarModal(
    "One Piece",
    "Descripción de One Piece...",
    "pages/games/OnePiece.php"
  );
});

//Tarjeta de Ao Ashi
document.getElementById("ao-card").addEventListener("click", function () {
  modal.classList.add("flex");
  mostrarModal(
    "Ao Ashi",
    "Descripción de Ao Ashi...",
    "pages/games/AoAshi.php"
  );
});


//Tarjeta de Solo Leveling
document.getElementById("sl-card").addEventListener("click", function () {
  modal.classList.add("flex");
  mostrarModal(
    "Solo Leveling",
    "Descripción de Solo Leveling...",
    "pages/games/SoloLeveling.php"
  );
});

//Cerrar Modales
closeModal.addEventListener("click", function () {
  modal.classList.add("hidden");
});


// Mostrar "Ver mas al hacer hover en las tarjetas"
const cards = document.querySelectorAll('.card');

// Recorrer cada tarjeta y aplicar la funcion "viewMore" pasandole la tarjeta que corresponde
cards.forEach(card => {
  // +1 Evento manejado
  card.addEventListener('mouseenter', function() {
    viewMore(card);
  });
  // +1 Evento manejado
  card.addEventListener('mouseleave', function() {
    card.style.backgroundColor = "";
    const viewMoreText = card.querySelector('.view-more');
    if (viewMoreText) {
      card.removeChild(viewMoreText);
    }
  });
});

// Funcion para mostrar "Ver mas" en cada tarjeta
// +1 Funcion
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
