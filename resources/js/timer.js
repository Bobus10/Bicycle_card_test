const timerEl = document.getElementById('timer');
const timeEnd = document.getElementById('timeEnd');
const hiddenTimeInput = document.querySelector('input[name="remainingTime"]');
const startingTime = parseInt(timerEl.getAttribute('data-starting-time'));
let currentTime = startingTime;

function updateCountDown() {
    const minutes = Math.floor(currentTime / 60);
    let seconds = currentTime % 60;

    timerEl.innerHTML = String(minutes).padStart(2, '0') + ':' + String(seconds).padStart(2, '0');

    hiddenTimeInput.value = currentTime;

    currentTime--;

    if (currentTime < 0) {
        timerEl.innerHTML = 'Czas minal';
        timeEnd.submit();
    }
}

setInterval(updateCountDown, 1000);
