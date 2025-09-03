
const loginCard = document.getElementById('loginCard');
const modalSenha = document.getElementById('modalEsqueciSenha');
const linkEsqueci = document.getElementById('esqueciSenhaLink');
const linkVoltar = document.getElementById('voltarLogin');
const formRecuperacao = document.getElementById('formRecuperacao');
const mensagemSucesso = document.getElementById('mensagemSucesso');

linkEsqueci.addEventListener('click', function(e) {
  e.preventDefault();
  loginCard.classList.add('d-none');
  modalSenha.classList.remove('d-none');
});

linkVoltar.addEventListener('click', function(e) {
  e.preventDefault();
  modalSenha.classList.add('d-none');
  loginCard.classList.remove('d-none');
  mensagemSucesso.classList.add('d-none');
});

formRecuperacao.addEventListener('submit', function(e) {
  e.preventDefault();
  const email = document.getElementById('emailRecuperacao').value;
  if (email.trim() === '' || !email.includes('@')) {
    alert('Por favor, insira um e-mail válido.');
    return;
  }
  mensagemSucesso.classList.add('d-none');
  setTimeout(() => {
    mensagemSucesso.classList.remove('d-none');
  }, 800);
});
