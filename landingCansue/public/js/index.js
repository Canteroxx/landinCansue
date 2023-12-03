
    const modal = document.getElementById('infoModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalDescription = document.getElementById('modalDescription');
    const modalLink = document.getElementById('modalLink');
    const closeModal = document.getElementById('closeModal');

    function mostrarModal(titulo, descripcion, enlace) {
        modalTitle.textContent = titulo;
        modalDescription.textContent = descripcion;
        modalLink.href = enlace;
        modal.classList.remove('hidden');
    }

    document.getElementById('op-card').addEventListener('click', function() {
        modal.classList.add('flex');
        mostrarModal(
            'One Piece', 
            'Descripción de One Piece...', 
            'games/OnePiece'
        );
    });

    document.getElementById('ao-card').addEventListener('click', function() {
        modal.classList.add('flex');
        mostrarModal(
            'Ao Ashi', 
            'Descripción de Ao Ashi...', 
            'games/AoAshi'
        );
    });

    document.getElementById('sl-card').addEventListener('click', function() {
        modal.classList.add('flex');
        mostrarModal(
            'Solo Leveling', 
            'Descripción de Solo Leveling...', 
            'games/SoloLeveling'
        );
    });

    closeModal.addEventListener('click', function() {
        modal.classList.add('hidden');
    });
