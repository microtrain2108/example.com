<?php
include '../../core/db_connect.php';

//Build the page metadata
$meta = [];
$meta['description'] = "Posts MicroTrain2108 Post List";
$meta['keywords'] = "posts, MicroTrain2108, post list";

$content=null;
$stmt = $pdo->query("SELECT * FROM posts");

while ($row = $stmt->fetch())
{

    $content .= "<a href=\"view.php?slug={$row['slug']}\">{$row['title']}</a>";
}

$content .="<p><a href=\"add.php\">New Post</a><br>";

include '../../core/layout.php';
