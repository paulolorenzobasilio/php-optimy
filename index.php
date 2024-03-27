<?php

require 'vendor/autoload.php';

use App\Utils\CommentManager;
use App\Utils\NewsManager;

$newsManager = new NewsManager();
$commentManager = new CommentManager();
foreach ($newsManager->listNews() as $news) {
    echo("############ NEWS " . $news["title"] . " ############\n");
    echo($news["body"] . "\n");
    foreach($commentManager->listComments() as $comment) {
        if($comment['news_id'] === $news['id']){
            echo("Comment " . $comment['id'] . " : " . $comment['body'] . "\n");
        }
    }
}