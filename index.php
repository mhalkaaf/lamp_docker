<?php

$connect = mysqli_connect(
    'db',
    'root',
    '',
    'lamp_docker'
);

$query = 'SELECT * FROM blog';
$result = mysqli_query($connect, $query);

echo '<h1>MySQL Content:</h1>';

while($record = mysqli_fetch_assoc($result))
{
    echo '<h2>'.$record['title'].'</h2>';
    echo '<p2>'.$record['content'].'</h2>';
    echo 'Posted: '.$record['date'].'</h2>';
    echo '<hr>';

}