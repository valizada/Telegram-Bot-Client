<?php

/**
 * This class will have all the methods needed
 * for the communication with the bot
 * User: valizada
 * Date: 27/08/15
 * Time: 17:48
 */
require_once('ParentClass.php');

class Client extends ParentClass
{
    private $requestUrl;
    private $log;

    public function __construct()
    {
        $this->log = new Logging();
        $this->log->lfile('log.txt');
        $this->requestUrl = $this->getURL();
    }

    public function getMe()
    {
        $url = $this->requestUrl . "getMe";
        // TODO: test it
        // TODO: add return value
        $this->curlMethod($url, null);
    }

    public function sendMessage($chat_id, $text, $disable_web_page_preview,
                                $reply_to_message_id, $reply_markup)
    {
        $url = $this->requestUrl . "sendMessage";
        $this->log->lwrite("url: " . $url);
        $data = array(
            'chat_id' => urlencode($chat_id),
            'text' => urlencode($text),
            'disable_web_page_preview' => urlencode($disable_web_page_preview),
            'reply_to_message_id' => urlencode($reply_to_message_id),
            'reply_markup' => urlencode($reply_markup)
        );

        $this->curlMethod($url, $data);
    }

    public function forwardMessage($chat_id, $from_chat_id, $message_id)
    {
        $url = $this->requestUrl . "forwardMessage";
        $data = array(
            'chat_id' => urlencode($chat_id),
            'from_chat_id' => urlencode($from_chat_id),
            'message_id' => urlencode($message_id)
        );

        $this->curlMethod($url, $data);
    }

    public function sendPhoto($chat_id, $photo, $caption,
                              $reply_to_message_id, $reply_markup)
    {
        $url = $this->requestUrl . "sendPhoto";
        $data = array(
            'chat_id' => urlencode($chat_id),
            'photo' => '@' . $photo,
            'caption' => urlencode($caption),
            'reply_to_message_id' => urlencode($reply_to_message_id),
            'reply_markup' => urlencode($reply_markup)
        );

        $this->curlMethod($url, $data);
    }

    public function sendAudio($chat_id, $audio, $duration, $performer,
                              $title, $reply_to_message_id, $reply_markup)
    {
        $url = $this->requestUrl . "sendAudio";
        $data = array(
            'chat_id' => urlencode($chat_id),
            'audio' => urlencode($audio),
            'duration' => urlencode($duration),
            'performer' => urlencode($performer),
            'title' => urlencode($title),
            'reply_to_message_id' => urlencode($reply_to_message_id),
            'reply_markup' => urlencode($reply_markup)
        );

        $this->curlMethod($url, $data);
    }

    public function sendDocument($chat_id, $document,
                                 $reply_to_message_id, $reply_markup)
    {
        $url = $this->requestUrl . "sendDocument";
        $data = array(
            'chat_id' => urlencode($chat_id),
            'document' => urlencode($document),
            'reply_to_message_id' => urlencode($reply_to_message_id),
            'reply_markup' => urlencode($reply_markup)
        );

        $this->curlMethod($url, $data);
    }

    public function sendSticker($chat_id, $sticker,
                                $reply_to_message_id, $reply_markup)
    {
        $url = $this->requestUrl . "sendSticker";
        $data = array(
            'chat_id' => urlencode($chat_id),
            'sticker' => urlencode($sticker),
            'reply_to_message_id' => urlencode($reply_to_message_id),
            'reply_markup' => urlencode($reply_markup)
        );

        $this->curlMethod($url, $data);
    }

    public function sendVideo($chat_id, $video, $duration, $caption,
                              $reply_to_message_id, $reply_markup)
    {
        $url = $this->requestUrl . "sendVideo";
        $data = array(
            'chat_id' => urlencode($chat_id),
            'video' => urlencode($video),
            'duration' => urlencode($duration),
            'caption' => urlencode($caption),
            'reply_to_message_id' => urlencode($reply_to_message_id),
            'reply_markup' => urlencode($reply_markup)
        );

        $this->curlMethod($url, $data);
    }

    public function sendVoice($chat_id, $voice, $duration,
                              $reply_to_message_id, $reply_markup)
    {
        $url = $this->requestUrl . "sendVoice";
        $data = array(
            'chat_id' => urlencode($chat_id),
            'voice' => urlencode($voice),
            'duration' => urlencode($duration),
            'reply_to_message_id' => urlencode($reply_to_message_id),
            'reply_markup' => urlencode($reply_markup)
        );

        $this->curlMethod($url, $data);
    }

    public function sendLocation($chat_id, $latitude, $longitude,
                                 $reply_to_message_id, $reply_markup)
    {
        $url = $this->requestUrl . "sendLocation";
        $data = array(
            'chat_id' => urlencode($chat_id),
            'latitude' => urlencode($latitude),
            'longitude' => urlencode($longitude),
            'reply_to_message_id' => urlencode($reply_to_message_id),
            'reply_markup' => urlencode($reply_markup)
        );

        $this->curlMethod($url, $data);
    }

    public function sendChatAction($chat_id, $action)
    {
        $url = $this->requestUrl . "sendChatAction";
        $data = array(
            'chat_id' => urlencode($chat_id),
            'action' => urlencode($action)
        );

        $this->curlMethod($url, $data);
    }

    public function getUserProfilePhotos($user_id, $offset, $limit)
    {
        $url = $this->requestUrl . "getUserProfilePhotos";
        $data = array(
            'user_id' => urlencode($user_id),
            'offset' => urlencode($offset),
            'limit' => urlencode($limit)
        );

        $this->curlMethod($url, $data);

        // TODO: add return
    }

    public function setWebhook($url, $certificate)
    {
        $requestUrl = $this->requestUrl . "setWebhook";
        $data = array(
            'url' => $url,
            'certificate' => urlencode($certificate)
        );

        $this->curlMethod($requestUrl, $data);
    }

    private function curlMethod($url, $fields)
    {
        //$fields_string = "";

        //  url-ify the data for the POST
        //foreach ($fields as $key => $value) {
        //    $fields_string .= $key . '=' . $value . '&';
        //}
        //rtrim($fields_string, '&');

        //  open connection
        $ch = curl_init();
        //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: multipart/form-data'));
        //  set the url
        curl_setopt($ch, CURLOPT_URL, $url);
        //  number of POST vars
        curl_setopt($ch, CURLOPT_POST, count($fields));
        //  POST data
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        //  To display result of curl
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //  execute post
        $result = curl_exec($ch);
        $this->log->lwrite("result curl: " . $result);
        echo $result."\n";
        //  close connection
        curl_close($ch);
    }
}
