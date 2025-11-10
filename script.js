document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('a[data-target]');
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // Impede o link de recarregar a página
            const url = this.getAttribute('href');
            const targetSelector = this.getAttribute('data-target');
            const target = document.querySelector(targetSelector);

            // Carrega o conteúdo da página no elemento alvo
            fetch(url)
                .then(response => response.text())
                .then(html => {
                    target.innerHTML = html;
                    // Atualiza o link ativo (opcional)
                    links.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                })
                .catch(err => {
                    target.innerHTML = "<p>Erro ao carregar conteúdo.</p>";
                    console.error(err);
                });
        });
    });
});
