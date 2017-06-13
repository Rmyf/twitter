

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
    echo '<h2 class="pseudo">' . $tweet['pseudo'] . '</h2>';
    echo '<img class="avatar" src="images/' . $tweet['avatar'] . '"/>'; 
    echo '<p class="message">' . $tweet['message'] . '</p>';
    echo '<p class=infos">Retweets:  ' . $tweet['retweets'] . '  Likes: '. $tweet['likes'] . '</p>';
    echo '<p class="date">' . $tweet['date'] . '</p>';
    echo '</section>';
    }
?>



    <style>



body {
background-color:#f5f8fa;

background-image:url(images/twitter.png);
background-repeat: no-repeat;
background-position:center;

}



section {
    width:30%;
    border: 1px solid lightgrey;
    border-radius: 6px;
    background-color: white;
    

}

h2, p {
    font-family:sans-serif;
    color: #66757f;
}

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

</head>
<body>


</body>
</html>





