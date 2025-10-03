// cronometro.js

// Classe do cronômetro
class Cronometro {
    constructor(displayElement) {
        this.displayElement = displayElement; // Elemento onde mostra o tempo
        this.totalSeconds = 0; // Tempo total em segundos
        this.interval = null; // Intervalo do setInterval
        this.paused = false; // Se está pausado
    }

    // Inicia o cronômetro
    start() {
        this.reset();
        this.interval = setInterval(() => {
            if (!this.paused) {
                this.totalSeconds++;
                this.updateDisplay();
            }
        }, 1000);
    }

    // Pausa o cronômetro
    pause() {
        this.paused = true;
    }

    // Retoma o cronômetro
    resume() {
        this.paused = false;
    }

    // Reseta o cronômetro
    reset() {
        clearInterval(this.interval);
        this.totalSeconds = 0;
        this.paused = false;
        this.updateDisplay();
    }

    // Atualiza o display do tempo
    updateDisplay() {
        const minutes = String(Math.floor(this.totalSeconds / 60)).padStart(2, '0');
        const seconds = String(this.totalSeconds % 60).padStart(2, '0');
        this.displayElement.textContent = `${minutes}:${seconds}`;
    }
}

// Instância global
let cronometro;

// Mostra o cronômetro na tela
function mostrarCronometro() {
    const container = document.getElementById('cronometroContainer');
    const display = document.getElementById('cronometroDisplay');

    container.style.display = 'block';

    if (!cronometro) {
        cronometro = new Cronometro(display);
    }

    cronometro.start();
}

// Finaliza e esconde o cronômetro
function finalizarCronometro() {
    const container = document.getElementById('cronometroContainer');
    if (cronometro) {
        cronometro.reset();
    }
    container.style.display = 'none';
}
