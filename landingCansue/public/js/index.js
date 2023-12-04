
    const modal = document.getElementById('infoModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalDescription = document.getElementById('modalDescription');
    const modalLink = document.getElementById('modalLink');
    const closeModal = document.getElementById('closeModal');

    function mostrarModal(titulo, descripcion, enlace) {
        modalTitle.textContent = titulo;
        modalDescription.textContent = descripcion;
        modalLink.href = enlace;

        modalTitle.style.color = 'black';
        modalDescription.style.color = 'black';

        modal.classList.remove('hidden');
    }

    if(document.getElementById('op-card')){
        document.getElementById('op-card').addEventListener('click', function() {
            modal.classList.add('flex');
            mostrarModal(
                'One Piece', 
                'Descripción de One Piece...', 
                'OnePiece'
            );
        });
    }

    if(document.getElementById('mop-card')){
        document.getElementById('mop-card').addEventListener('click', function() {
            modal.classList.add('flex');
            mostrarModal(
                'One Piece', 
                'Descripción de One Piece...', 
                'games/OnePiece'
            );
        });
    }
    if(document.getElementById('ao-card')){
        document.getElementById('ao-card').addEventListener('click', function() {
            modal.classList.add('flex');
            mostrarModal(
                'Ao Ashi', 
                'Descripción de Ao Ashi...', 
                'AoAshi'
            );
        });
    }
    if(document.getElementById('mao-card')){
        document.getElementById('mao-card').addEventListener('click', function() {
            modal.classList.add('flex');
            mostrarModal(
                'Ao Ashi', 
                'Descripción de Ao Ashi...', 
                'games/AoAshi'
            );
        });
    }

    if(document.getElementById('sl-card')){
        document.getElementById('sl-card').addEventListener('click', function() {
            modal.classList.add('flex');
            mostrarModal(
                'Solo Leveling', 
                'Descripción de Solo Leveling...', 
                'SoloLeveling'
            );
        });
    }
    if(document.getElementById('msl-card')){
        document.getElementById('msl-card').addEventListener('click', function() {
            modal.classList.add('flex');
            mostrarModal(
                'Solo Leveling', 
                'Descripción de Solo Leveling...', 
                'games/SoloLeveling'
            );
        });
    }
    if (document.getElementById('bl-card')){
        document.getElementById('bl-card').addEventListener('click', function() {
            modal.classList.add('flex');
            mostrarModal(
                'Blue Lock', 
                'Descripción de Blue Lock...', 
                'BlueLock'
            );
        });
    }
    if (document.getElementById('hk-card')){
        document.getElementById('hk-card').addEventListener('click', function() {
            modal.classList.add('flex');
            mostrarModal(
                'Haikyuuu', 
                'Descripción de Haikyuuu...', 
                'Haikyuuu'
            );
        });
    }
    if (document.getElementById('jk-card')){
        document.getElementById('jk-card').addEventListener('click', function() {
            modal.classList.add('flex');
            mostrarModal(
                'Jujutsu Kaisen', 
                'Descripción de Jujutsu Kaisen...', 
                'JujutsuKaisen'
            );
        });
    }
    if (document.getElementById('knb-card')){
        document.getElementById('knb-card').addEventListener('click', function() {
            modal.classList.add('flex');
            mostrarModal(
                'Kuroko No Basquet', 
                'Descripción de Kuroko No Basquet...', 
                'KurokoNoBasquet'
            );
        });
    }
    if (document.getElementById('fw-card')){
        document.getElementById('fw-card').addEventListener('click', function() {
            modal.classList.add('flex');
            mostrarModal(
                'Food Wars', 
                'Descripción de Food Wars...', 
                'Foodwars'
            );
        });
    }
    if (document.getElementById('ol-card')){
        document.getElementById('ol-card').addEventListener('click', function() {
            modal.classList.add('flex');
            mostrarModal(
                'Overlord', 
                'Descripción de Overlord...', 
                'Overlord'
            );
        });
    }
    if (document.getElementById('tny-card')){
        document.getElementById('tny-card').addEventListener('click', function() {
            modal.classList.add('flex');
            mostrarModal(
                'Tate No Yuusha', 
                'Descripción de Tate No Yuusha...', 
                'TateNoYuusha'
            );
        });
    }
    if (document.getElementById('tssdk-card')){
        document.getElementById('tssdk-card').addEventListener('click', function() {
            modal.classList.add('flex');
            mostrarModal(
                'Tensei Shitara Slime Datta Ken', 
                'Descripción de Tensei Shitara Slime Datta Ken...', 
                'Slime'
            );
        });
    }
    closeModal.addEventListener('click', function() {
        modal.classList.add('hidden');
    });
