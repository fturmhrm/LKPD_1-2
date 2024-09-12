const secondsElement = document.getElementById('seconds');
const startButton = document.getElementById('start');
const stopButton = document.getElementById('stop');

let countdown;
let timeLeft = 10; 
let isRunning = false; 


function startCountdown() {
    if (isRunning) {
        return;
    } else {
        isRunning = true;
        countdown = setInterval(() => {
            if (timeLeft > 0) {
                timeLeft--;
                secondsElement.textContent = timeLeft;
            } else {
                timeLeft = 10;
                clearInterval(countdown);
                isRunning = false;
                startCountdown();
            }
        },1000);
    }
}


function stopCountdown() {
    if (isRunning) {
        clearInterval(countdown);
        isRunning = false;
    }
}


startButton.addEventListener('click', startCountdown);

stopButton.addEventListener('click', stopCountdown);
