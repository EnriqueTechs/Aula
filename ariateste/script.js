document.addEventListener('DOMContentLoaded', function() {

    const links = document.querySelectorAll('a[data-target]');

    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const url = this.getAttribute('href');       // arquivo a ser carregado
            const targetSelector = this.getAttribute('data-target');
            const target = document.querySelector(targetSelector);

            // Carregar o conteúdo da página com FETCH
            fetch(url)
                .then(response => response.text())
                .then(html => {

                    target.innerHTML = html; // conteúdo carregado

                    // Atualizar link ativo (opcional)
                    links.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');

                    // Se a página carregada contém o vídeo, inicializa os links
                    initVideoPage();
                })
                .catch(err => {
                    target.innerHTML = "<p>Erro ao carregar conteúdo.</p>";
                    console.error(err);
                });
        });
    });

});