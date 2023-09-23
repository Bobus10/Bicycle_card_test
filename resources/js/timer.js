const timerEl = document.getElementById('timer');
const startingTime = parseInt(timerEl.getAttribute('startingTime'));
let time = startingTime;

function updateCountDown() {
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;

    timerEl.innerHTML = String(minutes).padStart(2, '0') + ':' + String(seconds).padStart(2, '0');
    time--;

    if (seconds < 0) {
        timerEl.innerHTML = 'Czas minal';
        timeEnd.submit();
    }
}

setInterval(updateCountDown, 1000);
