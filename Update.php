<?php
/**
 * Created by PhpStorm.
 * User: valizada
 * Date: 27/08/15
 * Time: 11:01
 */

require('Message.php');
require('User.php');
require('GroupChat.php');
require('Audio.php');
require('Document.php');
require('PhotoSize.php');
require('Sticker.php');
require('Video.php');
require("Voice.php");
require('Contact.php');
require('Location.php');

class Update {

    private $update_id;
    //Typre of Message
    private $message;

    //Objcets of classes
    private $groupChat;
    private $audio;
    private $document;
    private $photoSize;
    private $sticker;
    private $video;
    private $voice;
    private $contact;
    private $location;

    public function __construct($rawJson){
        $jsonObject = json_decode($rawJson);
        $this->update_id = $jsonObject->update_id;
        $this->message = $this->parseMessage($jsonObject->message);
    }

    public function parseMessage($messageObject){
        $message = new Message();
        $message->setMessageId($messageObject->message_id);
        $message->setFrom($this->parseUser($messageObject->from));
        $message->setDate($messageObject->date);
        $message->setChat($this->parseChat($messageObject->chat));
        $message->setForwardFrom($this->parseUser($messageObject->forward_from));
        $message->setForwardDate($messageObject->forward_date);
        //TODO: reply to message attribute
        $message->setText($messageObject->text);
        $message->setAudio($this->parseAudio($messageObject->audio));
        $message->setDocument($this->parseDocument($messageObject->document));
        $message->setPhoto($this->parsePhotoSize($messageObject->photo));
        $message->setSticker($this->parseSticker($messageObject->sticker));
        $message->setVideo($this->parseVideo($messageObject->video));
        $message->setVoice($this->parseVoice($messageObject->voice));
        $message->setCaption($messageObject->caption);
        $message->setContact($this->parseContact($messageObject->contact));
        $message->setLocation($this->parseLocation($messageObject->location));
        $message->setNewChatParticipant($this->parseUser($messageObject->new_chat_participant));
        $message->setLeftChatParticipant($this->parseUser($messageObject->left_chat_participant));
        $message->setNewChatTitle($messageObject->new_chat_title);
        $message->setNewChatPhoto($this->parsePhotoSize($messageObject->new_chat_photo));
        //TODO: not sure about implementation of TRUE type
        $message->setDeleteChatPhoto($messageObject->delete_chat_photo);
        $message->setGroupChatCreated($messageObject->group_chat_created);

        return $message;
    }

    public function parseUser($userObject){
        $user = new User();
        $user->setId($userObject->id);
        $user->setFirstName($userObject->first_name);

        if(property_exists($userObject, 'last_name'))
            $user->setLastName($userObject->last_name);

        if(property_exists($userObject, 'username'))
            $user->setUserName($userObject->username);

        return $user;
    }

    /**
     * @return mixed
     */
    public function getUpdateId()
    {
        return $this->update_id;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}