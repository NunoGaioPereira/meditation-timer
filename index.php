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
    <!-- <div class="app"></div> -->
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

    <a href="#/" id="start">Start</a>

    <div class="modal">
        <div class="header">

        </div>
    </div>

    <script src="./js/main.js"></script>
</body>
</html>