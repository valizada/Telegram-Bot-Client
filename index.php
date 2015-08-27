<?php
echo "hey";
require('Logging.php');
require('ParentClass.php');

require('Update.php');

class DemoApp
{
    public function run()
    {
        $log = new Logging();
        $parenClass = new ParentClass();
        // set path and name of log file (optional)
        $log->lfile('log.txt');
        $json = file_get_contents('php://input');
        $log->lwrite("post: " . $json);

        $update = new Update($json);

        $message = $update->getMessage();
        $chat = $message->getChat();
        $userID = $chat->getId();

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

    }
}

$demo = new DemoApp();
$demo->run();