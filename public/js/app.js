
document.addEventListener("DOMContentLoaded", function () {
    const fileInput = document.getElementById('imagem');
    const imagePreview = document.getElementById('imagem-preview');

    fileInput.addEventListener('change', function () {
        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                imagePreview.src = e.target.result;
            };
            reader.readAsDataURL(fileInput.files[0]);
        } else {
            imagePreview.src = 'data:image/png;base64,'; // Limpa a visualização se o usuário não selecionar nenhum arquivo
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    var deleteButtons = document.querySelectorAll('.delete-product');

    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var productId = button.getAttribute('data-id');

            // Exibe um modal de confirmação
            if (confirm('Tem certeza que deseja excluir este produto?')) {
                // Se o usuário confirmar, redirecione para a rota de exclusão
                window.location.href = '/excluir-produto/' + productId;
            }
        });
    });
});
document.addEventListener("DOMContentLoaded", function() {
    var cards = document.querySelectorAll('.card1');

    document.getElementById('filtroGeral').addEventListener('input', filtrarCards);

    function filtrarCards() {
        var termoPesquisa = document.getElementById('filtroGeral').value.toLowerCase();

        cards.forEach(function(card) {
            var nome = card.querySelector('.card-title').textContent.toLowerCase();
            var descricao = card.querySelector('.card-text').textContent.toLowerCase();
            var preco = parseFloat(card.querySelector('#preco').textContent.replace('R$', '').trim());

            if (nome.includes(termoPesquisa) || descricao.includes(termoPesquisa) || preco.toString().includes(termoPesquisa)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
});
document.addEventListener('DOMContentLoaded', function () {
    // Aguarde o DOM estar pronto

    // Selecione o botão e o campo de filtro pelo ID
    var btnRelatorio = document.getElementById('btnRelatorio');
    var filtroGeral = document.getElementById('filtroGeral');

    // Adicione um ouvinte de evento ao botão
    btnRelatorio.addEventListener('click', function (e) {
        // Impedir o comportamento padrão de clicar no link
        e.preventDefault();

        // Obter o valor do campo de filtro
        var filtro = filtroGeral.value;

        // Redirecionar para a rota de relatório com o parâmetro de filtro
        window.location.href = '/relatorios?filtro=' + encodeURIComponent(filtro);
    });
});

$(document).ready(function() {
    $('#btnExportarCSV').on('click', function() {
        var urlBackend = '/gerar-csv';  // ajuste conforme necessário

        $.ajax({
            url: urlBackend,
            method: 'GET',
            success: function(response) {
                var link = document.createElement('a');
                link.href = 'data:text/csv;charset=utf-8,' + encodeURIComponent(response);
                link.download = 'relatorio_produtos.csv';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            },
            error: function(error) {
                console.error('Erro ao exportar CSV:', error);
            }
        });
    });
});


