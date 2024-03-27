<?php

require 'bootstrap.php';

$newsRepository = $entityManager->getRepository('App\Entity\News');
$commentRepository = $entityManager->getRepository('App\Entity\Comment');
foreach ($newsRepository->findAll() as $news) {
    echo("############ NEWS " . $news->getTitle() . " ############\n");
    echo($news->getBody() . "\n");
    foreach($news->getComments() as $comment){
        echo("Comment " . $comment->getId() . " : " . $comment->getBody() . "\n");
    }
}