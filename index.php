<?php

require 'bootstrap.php';

$newsRepository = $entityManager->getRepository('App\Entity\News');
$commentManager = $entityManager->getRepository('App\Entity\Comment');
foreach ($newsRepository->findAll() as $news) {
    echo("############ NEWS " . $news->getTitle() . " ############\n");
    echo($news->getBody() . "\n");
    foreach($commentManager->findAll() as $comment) {
        if($comment->getNewsId() === $news->getId()){
            echo("Comment " . $comment->getId() . " : " . $comment->getBody() . "\n");
        }
    }
}