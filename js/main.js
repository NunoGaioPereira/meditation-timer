const time_picker_element = document.querySelector('.time-picker');

const hr_element = document.querySelector('.time-picker .hour .hr');
const min_element = document.querySelector('.time-picker .minute .min');

const hr_up = document.querySelector('.time-picker .hour .hr-up');
const hr_down = document.querySelector('.time-picker .hour .hr-down');

const min_up = document.querySelector('.time-picker .minute .min-up');
const min_down = document.querySelector('.time-picker .minute .min-down');

let hour = 0;
let minute = 0;

// Event listeners
hr_up.addEventListener('click', hour_up);
hr_down.addEventListener('click', hour_down);

min_up.addEventListener('click', minute_up);
min_down.addEventListener('click', minute_down);

function hour_up () {
    hour++;
    if (hour > 23) {
        hour = 0;
    }
    setTime();
}

function hour_down () {
    hour--;
    if (hour < 0) {
        hour = 0;
    }
    setTime();
}

function minute_up () {
    minute++;
    if (minute > 59) {
        minute = 0;
        hour++;
    }
    setTime();
}

function minute_down () {
    if (minute == 0) {
        minute = 0;
        // hour--;
    }
    else {
        minute--;
    }
    setTime();
}

function setTime() {
    hr_element.value = formatTime(hour);
    min_element.value = formatTime(minute);
    time_picker_element.dataset.time = formatTime(hour) + ':' + formatTime(minute);
}

function formatTime(time) {
    if (time < 10) {
        time = '0' + time;
    }
    return time;
}
