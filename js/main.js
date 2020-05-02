const app = () => {

    const time_picker_element = document.querySelector('.time-picker');

    const hr_element = document.querySelector('.time-picker .hour .hr');
    const min_element = document.querySelector('.time-picker .minute .min');

    const hr_up = document.querySelector('.time-picker .hour .hr-up');
    const hr_down = document.querySelector('.time-picker .hour .hr-down');

    const min_up = document.querySelector('.time-picker .minute .min-up');
    const min_down = document.querySelector('.time-picker .minute .min-down');

    const start = document.getElementById('start');
    const modal = document.querySelector('.modal');
    const cross = document.querySelector('.cross');
    const app_body = document.querySelector('.app');

    const mute = document.querySelector('.mute');
    const unmute = document.querySelector('.unmute');
    unmute.addEventListener('click', muteSounds);
    mute.addEventListener('click', muteSounds);
    function muteSounds () {
        mute.classList.toggle('active');
        unmute.classList.toggle('unactive');
        if(song.muted == true){
            song.muted = false;
        }
        else {
            song.muted = true;
        }
    }

    start.addEventListener('click', openModal);
    cross.addEventListener('click', closeModal);

    let hour = 0;
    let minute = 10;

    const video_check = document.querySelector('.videoCheck');
    let videoCheck = video_check.checked;
    video_check.addEventListener('click', () => {
        videoCheck = video_check.checked;
        console.log(videoCheck);
    });

    // Event listeners
    hr_up.addEventListener('click', hour_up);
    hr_down.addEventListener('click', hour_down);

    min_up.addEventListener('click', minute_up);
    min_down.addEventListener('click', minute_down);

    hr_element.addEventListener('change', hour_change);
    min_element.addEventListener('change', minute_change);

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
            hour_up();
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

    function hour_change (e) {
        if (e.target.value > 23) {
            e.target.value = 23;
        }
        else if (e.target.value < 0) {
            e.target.value = '00';
        }

        if (e.target.value == "") {
            e.target.value = formatTime(hour);
        }

        hour = e.target.value;
    }

    function minute_change (e) {
        if (e.target.value > 59) {
            e.target.value = 59;
        }
        else if (e.target.value < 0) {
            e.target.value = '00';
        }

        if (e.target.value == "") {
            e.target.value = formatTime(minute);
        }

        minute = e.target.value;
    }

    function openModal () {
        modal.classList.toggle('open');
        app_body.classList.toggle('open');
        play.classList.toggle('open');
        if(!video_check.checked) {
            video.style.display = 'none';
        }
        else {
            video.style.display = 'initial';   
        }
    }

    function closeModal () {
        stopPlaying(song);
        modal.classList.toggle('open');
        app_body.classList.toggle('open');
        play.classList.toggle('open');
    }

    const song = document.querySelector('.song');
    const play = document.querySelector('.play');
    const outline = document.querySelector('.moving-outline circle');
    const video = document.querySelector('.video-container video');

    // Sounds
    const sounds = document.querySelectorAll('.sound-picker button');
    // Time display
    const timeDisplay = document.querySelector('.time-display');
    const timeSelect = document.querySelectorAll('.time-select button');
    // Length of outline
    // const outlineLenght = outline.getTotalLength();
    const outlineLenght = '1359.76';
    // Duration
    let fakeDuration = 600;


    // Animate outline
    outline.style.strokeDasharray = outlineLenght + "px"; //Total length // 100 px between each dash
    outline.style.strokeDashoffset = outlineLenght + "px"; // hide

    // Pick sound
    sounds.forEach(sound =>{
        sound.addEventListener('click', function(){
            song.src = this.getAttribute('data-sound');
            video.src = this.getAttribute('data-video');

            // checkPlaying(song);
            activateButtons(sound);
        }); 
    });

    // Play sound
    play.addEventListener('click', () => {
        checkPlaying(song);
    });

    // Select sound
    timeSelect.forEach(option =>{
        option.addEventListener('click', function(){
          // use function() to be able to use this
          song.currentTime = 0; // reset time
          fakeDuration = this.getAttribute('data-time');
          timeDisplay.textContent = `${Math.floor(fakeDuration / 60)}:${Math.floor(fakeDuration % 60)}0`;
          // Pause everything
          song.pause();
          song.currentTime = 0;
          play.src = './includes/imgs/play.svg';
          video.pause();
        })
    });

    // Stop and play the sounds
    const checkPlaying = song =>{
        if (song.paused) {
          song.play();
          video.play();
          play.src = "./includes/imgs/pause.svg";
        }
        else {
          song.pause();
          video.pause();
          play.src = "./includes/imgs/play.svg"; 
        }
    };

    const stopPlaying = song =>{
        if (song.paused) {
          return;
        }
        else {
          song.pause();
          video.pause();
          play.src = "./includes/imgs/play.svg"; 
        }
    };

    // Animate circle
    song.ontimeupdate = () => {
        let currentTime = song.currentTime;
        let elapsed = fakeDuration - currentTime;
        let seconds = Math.floor(elapsed % 60);
        let minutes = Math.floor(elapsed / 60);

        // Animate circle
        let progress = outlineLenght - (currentTime / fakeDuration) * outlineLenght;
        outline.style.strokeDashoffset = progress + "px";

        // Animate text
        if(seconds == 0) { timeDisplay.textContent = `${minutes}:${seconds}0`; }
        else { timeDisplay.textContent = `${minutes}:${seconds}`; }

        if(currentTime >= fakeDuration) {
          song.pause();
          song.currentTime = 0;
          play.src = './includes/imgs/play.svg';
          video.pause();
        }
    }

    function activateButtons (cur_sound) {
        // Pick sound
        sounds.forEach(sound =>{
            if(sound.classList.contains("active")) {
                sound.classList.remove('active');
            }
            cur_sound.classList.add('active');
        });
    }
};

app();