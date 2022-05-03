<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a >{{$Room->room}}</a>
  <a href="/game">Empezar juego</a>
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
          Echo.channel('{{$Room->room}}')
            .listen('.New-Game',(data)=>{
              window.location.href = "/game";
            });
      </script>
</body>
</html>