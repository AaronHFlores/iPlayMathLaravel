<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a >{{$Room->user1}}</a>
    <a>Esperando jugador </a>
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
          Echo.channel('{{$Room->room}}')
            .listen('.User-End',(data)=>{
              window.location.href = "/podium";
            });
      </script>
      <script>
        Echo.channel('{{$Room->room}}')
          .listen('.Finish-Game',(data)=>{
            window.location.href = "/UpdateScoreMultiplayer/1/0/1/1";
          });
      </script>
</body>
</html>