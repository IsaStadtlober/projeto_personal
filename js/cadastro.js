// Avançar do Card 1 para o Card 2
document.getElementById('btnAvancar1').addEventListener('click', function () {
    document.getElementById('cadastroCard1').classList.add('d-none');
    document.getElementById('cadastroCard2').classList.remove('d-none');
});

// Avançar do Card 2 para o Card 3
document.getElementById('btnAvancar2').addEventListener('click', function () {
    document.getElementById('cadastroCard2').classList.add('d-none');
    document.getElementById('cadastroCard3').classList.remove('d-none');
});

// Atualizar o nome do arquivo selecionado (foto de perfil)
document.getElementById('foto_perfil').addEventListener('change', function () {
    const fileName = this.files[0] ? this.files[0].name : 'Nenhum arquivo selecionado';
    document.getElementById('file-name').textContent = fileName;
});