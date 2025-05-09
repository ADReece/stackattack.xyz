<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stack Attack</title>
    <link rel="icon" type="image/x-icon" href="https://wiki.leagueoflegends.com/en-us/images/Heartsteel_item.png">
    @vite('resources/css/app.css')
</head>
<body class="p-0 m-0 bg-white dark:bg-gray-800">
    <div class="flex items-center justify-center w-screen h-screen">
        <div class="p-1 border border-orange-500">
            <img onclick="play()"
            src="https://wiki.leagueoflegends.com/en-us/images/Heartsteel_item.png?be381"
            alt="BONK" 
            class="object-cover w-64 m-auto" 
          />
          <audio id="audio" src="https://interactive-examples.mdn.mozilla.net/media/cc0-audio/t-rex-roar.mp3"></audio>
        </div>
      </div>
      <script>
        const audio = new Audio({{asset('sounds/heartsteel.mp3')}});

        function play() {
          audio.play();
        }
      </script>
</body>
</html>