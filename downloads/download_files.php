<?php
/**
 * Created by PhpStorm.
 * User: dan
 * Date: 27/07/16
 * Time: 19:28
 */

$url = 'https://wos.meulie.net';
include('import_connection.php');

$limit = 'limit 100';


echo '<h3>Additionals</h3>';

$results = $dbh->query("SELECT * FROM additionals " . $limit);

foreach ($results as $result) {

    print_R($result);
    echo '<br>';

//    for the filename try to download the file
    file_put_contents("additionals/" . $result['filename'], fopen($url . $result['url'], 'r'));
}


echo '<h3>downloads</h3>';

$results = $dbh->query("SELECT * FROM downloads " . $limit);

foreach ($results as $result) {

    print_R($result);
    echo '<br>';

//    for the filename try to download the file
    file_put_contents("downloads/" . $result['filename'], fopen($url . $result['url'], 'r'));
}



//downloads

echo '<h3>magazines</h3>';

$results = $dbh->query("SELECT * FROM magazines " . $limit);

foreach ($results as $result) {

    print_R($result);
    echo '<br>';

//    for the filename try to download the file
    // get the file name

    $path = explode('/', $result['url']);
    $count = count($path);

    print_R($path);
    echo 'count is: ' , $count;
    $filename = $path[$count -1];

    echo 'file is: ' , $filename , '<br>';
    file_put_contents("magazines/" . $filename, fopen($url . $result['url'], 'r'));
}