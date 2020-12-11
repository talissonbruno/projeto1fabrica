
              // Captura o evento load da página
            window.onload = function () {
                // Localiza o elemento
                var div = document.getElementById('mostrar');
                // O link
                var clique = document.getElementById('menu-hamburguer');
                // Captura o evento de clique no link
                clique.onclick = function () {
                    // Verifica se getComputedStyle é suportado
                    if (clique.checked) {
                    div.style.display = 'block';
                    } else {
                            div.style.display = 'none';
                    }
                }
            
         }
        