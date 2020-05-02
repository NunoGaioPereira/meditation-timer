<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;1,400&display=swap" rel="stylesheet">
    <title>Meditation timer</title>
    <link rel="stylesheet" type="text/css" href="./css/meditation.css">
</head>
<body>
    <div class="app">
        <h3>Meditate</h3>
        <div class="time-picker" data-time="00:10">
            <div class="hour">
                <div class="hr-up"></div>
                <input type="number" class="hr" value="00">
                <div class="hr-down"></div>
            </div>

            <div class="separator">:</div>

            <div class="minute">
                <div class="min-up"></div>
                <input type="number" class="min" value="10">
                <div class="min-down"></div>
            </div>

        </div>
        
        <div class="sound-picker">
            <button class="active" data-sound="./includes/sounds/rain.mp3" data-video="./includes/video/rain.mp4"><img src="./includes/imgs/rain.svg" alt="rain"></button>
            <button data-sound="./includes/sounds/beach.mp3" data-video="./includes/video/beach.mp4"><img src="./includes/imgs/beach.svg" alt="beach"></button>
            <button data-sound="./includes/sounds/wind.mp3" data-video="./includes/video/wind.mp4"><img src="./includes/imgs/wind.svg" alt="wind"></button>
        </div>

        <div class="settings">
            <div class="setting">
                <span class="setting-title">Video</span>
                <label class="switch">
                  <input type="checkbox">
                  <span class="slider round"></span>
                </label>
            </div>
            <div class="setting">
                <span class="setting-title">Dark theme</span>
                <label class="switch">
                  <input type="checkbox">
                  <span class="slider round"></span>
                </label>
            </div>
        </div>  

        <a href="#/" id="start">Start</a>
    </div>

    <div class="modal">
        <div class="container">
            <div class="header">
                <svg version="1.1" class="unmute" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 50 50" xml:space="preserve">
                    <g>
                        <path class="st0" d="M27.6,44.2c-1.9-1-7.2-4.2-14.7-9.1l-2.7-1.8H6.4H2.5l-0.5-0.4c-0.2-0.1-0.6-0.5-0.8-0.7L1,31.8V25v-6.8
                            l0.3-0.5c0.2-0.2,0.6-0.6,0.8-0.7l0.5-0.4h3.9h3.9l2.8-1.8C19.4,10.7,25.2,7,27.2,6c1.4-0.7,1.7-0.8,2.2-0.2L29.8,6v19v19l-0.2,0.2
                            c-0.3,0.3-0.7,0.4-1,0.4C28.5,44.6,28.1,44.4,27.6,44.2L27.6,44.2z M39.7,40.1l-1-1.4l0.7-0.6c5.8-5.1,7.6-12.9,4.7-19.9
                            c-1.1-2.4-2.7-4.6-4.7-6.5l-0.8-0.7l1.1-1.4c0.6-0.7,1.1-1.4,1.1-1.4c0.2,0,1.4,1,2.3,2c7.1,7.2,7.9,18.8,1.8,26.9
                            c-1,1.3-2.1,2.4-3.1,3.3c-0.5,0.5-1,0.8-1,0.8C40.8,41.5,40.3,40.9,39.7,40.1L39.7,40.1z M34.6,35.6l-1.1-1.4l0.5-0.3
                            c1.2-1.1,2.2-2.3,2.9-3.7c0.9-1.8,1.2-3.2,1.2-5.2c0-2-0.3-3.4-1.2-5.1c-0.7-1.4-1.7-2.7-2.9-3.7l-0.5-0.4l1.1-1.4
                            c0.6-0.8,1.1-1.4,1.1-1.4c0.1,0,0.5,0.3,1,0.7c1.9,1.7,3.5,4.1,4.2,6.6c0.6,1.6,0.8,2.9,0.8,4.7c0,3.8-1.2,6.9-3.6,9.8
                            c-0.6,0.7-2.2,2.2-2.3,2.2S35.2,36.4,34.6,35.6L34.6,35.6z"/>
                    </g>
                </svg>

                <svg version="1.1" class="mute" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 50 50" xml:space="preserve">
                    <g>
                        <path class="st0" d="M25.3,42.6c-2.1-1.1-6.8-4-13.3-8.3l-2.4-1.6H6H2.4L2,32.4c-0.2-0.2-0.5-0.5-0.7-0.7L1,31.3V25v-6.3l0.3-0.4
                            c0.2-0.2,0.5-0.5,0.7-0.6l0.4-0.4H6h3.6l2.7-1.8c6.7-4.4,11-7.1,13.1-8.1c1-0.5,1.3-0.5,1.5-0.5c0.4,0.1,0.6,0.3,0.7,0.5
                            c0.2,0.3,0.2,34.9,0,35.2c-0.1,0.3-0.4,0.4-0.7,0.5C26.6,43.1,26.3,43.1,25.3,42.6L25.3,42.6z M32.8,35.3c-0.5-0.1-1.1-0.4-1.3-0.9
                            c-0.3-0.5-0.3-1.3-0.1-1.7c0.1-0.2,1.5-1.6,3.1-3.2l2.9-2.9l-2.9-2.9c-2-2-3-3-3.1-3.3c-0.4-0.9,0.1-2.1,1.1-2.5
                            c0.4-0.1,1.1-0.1,1.4,0.1c0.2,0.1,1.6,1.4,3.2,3l2.9,2.9l2.9-2.9c2-2,3-2.9,3.3-3c0.5-0.3,1.2-0.2,1.7,0.1c0.6,0.4,0.9,0.8,0.9,1.6
                            c0,0.3-0.1,0.6-0.1,0.8c-0.1,0.1-1.4,1.5-3.1,3.1l-2.9,3l2.9,2.9c2,2,2.9,3,3,3.2c0.4,1.2-0.1,2.3-1.3,2.6c-0.4,0.1-0.6,0.1-1.2,0
                            c-0.1-0.1-1.5-1.4-3.2-3.1l-3-3l-3,3c-1.6,1.7-3,3-3.1,3c0,0-0.3,0.1-0.4,0.1C33.4,35.4,33,35.4,32.8,35.3L32.8,35.3z"/>
                    </g>
                </svg>

                <svg class="cross" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 50 50" xml:space="preserve">
                    <g>
                        <path class="st0" d="M6.3,2L48,43.7c1.4,1.2,1.4,3.1,0,4.2c-1.2,1.4-3.1,1.4-4.2,0L2,6.3C0.7,5.1,0.7,3.2,2,2
                            C3.2,0.7,5.1,0.7,6.3,2L6.3,2z"/>
                        <path class="st0" d="M43.7,2L2,43.7c-1.4,1.2-1.4,3.1,0,4.2c1.2,1.4,3.1,1.4,4.2,0L48,6.3c1.4-1.2,1.4-3.1,0-4.2
                            C46.8,0.7,44.9,0.7,43.7,2L43.7,2z"/>
                    </g>
                </svg>
            </div>

            <div class="player-container">
                <audio class="song">
                  <source src="./includes/sounds/rain.mp3">
                </audio>
                <div class="track">
                    <img src="./includes/imgs/play.svg" alt="play" class="play">
                    <svg class="track-outline" width="493" height="493" viewBox="0 0 493 493" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <circle cx="246.5" cy="246.5" r="216.5" stroke-width="40"/>
                    </svg>
                     <svg class="moving-outline" width="493" height="493" viewBox="0 0 493 493" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <circle cx="246.5" cy="246.5" r="216.5" stroke-width="40"/>
                    </svg>
                </div>
                <h3 class="time-display">10:00</h3>
            </div>

        </div>
    </div>

    <script src="./js/main.js"></script>
</body>
</html>