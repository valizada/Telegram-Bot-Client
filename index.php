<?php
echo "hey";
require('Logging.php');
require('ParentClass.php');

$log = new Logging();
$parenClass = new ParentClass();
// set path and name of log file (optional)
$log->lfile('log.txt');
$json = file_get_contents('php://input');
$log->lwrite("post: " . $json);
$json_decoded = json_decode($json);
$log->lwrite("updateID: " . $json_decoded->update_id);
$log->lwrite("\r\n");
// set json string to php variables
$updateID = $json_decoded->update_id;
$messageObject = $json_decoded->message;
$messageID = $messageObject->message_id;
$fromUserObject = $messageObject->from;
$date = $messageObject->date;
$chatObject = $messageObject->chat;
$userID = $fromUserObject->id;
$log->lwrite("user id: " . $userID);
$userFirstName = $fromUserObject->first_name;
$userLastName = $fromUserObject->last_name;
$userName = $fromUserObject->username;
$log->lwrite("username: " . $userName);

//API Url
$url = $parenClass->getURL() . 'sendMessage';

//Initiate cURL.
$ch = curl_init($url);

$jsonData = "chat_id=" . $userID . "&text=here";

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 2);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

//Execute the request
$result = curl_exec($ch);

$log->lclose();
