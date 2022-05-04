<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a>Winning 
        <?php
        use App\Models\User;
            if($Room->score1 > $Room->score2){
                $userwin = User::where('id', $Room->user1)->first();
                echo $userwin->name;
            }
            else if($Room->score1 < $Room->score2){
                $userwin = User::where('id', $Room->user2)->first();
                echo $userwin->name;
            }
            else {
                echo "empate";
            }
        ?>

    </a>
</body>
</html>