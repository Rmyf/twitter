
<?php

include_once('Tweet.php');
$instanceTweet = new Tweet();





$tweets=[
    ['pseudo'=>'test',
    'message' => 'mon premier tweet',
    'avatar'=> 'avatar.jpeg',
    'retweets' =>2,
    'likes' => 14,
    'date'=>'12-06-2017'],

    ['pseudo' => 'test2',
    'message' => 'mon second tweet',
    'avatar'=> 'avatar2.png',
    'retweets' =>4,
    'likes' => 25,
    'date'=>'12-06-2017'],

    ['pseudo' => 'test3',
    'message' => 'mon dernier tweet',
    'avatar'=> 'avatar3.jpeg',
    'retweets' =>3,
    'likes' => 8,
    'date'=>'12-06-2017']
    ];


foreach($tweets as $tweet){
    echo '<section class="tweet">';
    echo '<h2 class="pseudo">'.$tweet['pseudo'].'</h2>';
    echo '<p class="message">'.$tweet['message'].'</p>';
    echo '<img class= "avatar" src="images/'.$tweet['avatar'].'"/>';
    echo '<p class="retweets">'.$tweet['retweets'].'Likes:'.$tweet['likes'].'</p>';
    echo '<p class="date">'.$tweet['date'].'</p>';
    echo '</section>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tweeter</title>
</head>
<body>
<div class=timeline><h2>TIMELINE</h2></div>
<div class=tendance><h2> TENDANCES</h2></div>


<style>

        .timeline{
         
            width: 50%;
            background-color: #1DA1F2;
            border: 1px solid black;    
        }
        .tendance{
            width: 50%;
            background-color: #E8F5FD;
            border: 1px solid black;   

        }
        
      
    </style>

</body>
</html>





