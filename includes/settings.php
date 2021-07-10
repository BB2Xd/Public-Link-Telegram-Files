<?php

#===============================================================================
#-------------------------------- Settings -------------------------------------
#===============================================================================

/*  Database */

#/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/

/*  Telegram Bot API Key */
define('API_KEY','1885614923:AAG7UBZaJlQ8eBrYSRB8BOXeW3hJVEMR-CI');  # Enter bot api token
define('APP_URL','https://api.telegram.org/bot'.API_KEY);   ## Don't edit this line ##

#===============================================================================
#-------------------------- Connect to database --------------------------------
#===============================================================================
try {
    $conn = new PDO('mysql:host=containers-us-west-9.railway.app;dbname=railway;port=7143;charset=utf8mb4', root, Hje662ftRASgSw6pbGu4);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Create tables
    include_once __DIR__ . '/tables.php';
    $conn->exec($filesTable);
    $conn->exec($usersTable);
}catch(PDOException $e) {
    file_put_contents('Error_log.txt', $e->getMessage());   # Save Errors in: 'Error_log.txt'
}

#\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\

/*  Folders */
$folder         =   'upload';   # Save All Files In Folder Name
$imageFolder    =   'image';    # Save Images In Folder Name
$videoFolder    =   'video';    # Save Videos In Folder Name
$musicFolder    =   'music';    # Save Musics In Folder Name
$fileFolder     =   'file';     # Save Other Files In Folder Name

#/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/

/*  Files Delete After... 
*   
*   You should enter in second, For example:
*   
*   60          =>      one minute
*   3600        =>      one hour
*   86400       =>      one day
*   172800      =>      two days
*   604800      =>      one week
*   
*/
$FilesDeleteAfter = 60;

#\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\

/* lang */
$lang = 'en';

#/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/

include_once __DIR__ . "/langs/$lang.php";
