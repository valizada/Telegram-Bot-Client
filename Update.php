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

class Update
{

    private $update_id;
    //Type of Message
    private $message;

    public function __construct($rawJson)
    {
        $jsonObject = json_decode($rawJson);
        $this->update_id = $jsonObject->update_id;
        $this->message = $this->parseMessage($jsonObject->message);
    }

    public function parseMessage($messageObject)
    {
        $message = new Message();
        $message->setMessageId($messageObject->message_id);
        $message->setFrom($this->parseUser($messageObject->from));
        $message->setDate($messageObject->date);
        // TODO: test it for User and GroupChat types
        $message->setChat($this->parseChat($messageObject->chat));
        if (property_exists($messageObject, 'forward_from'))
            $message->setForwardFrom($this->parseUser($messageObject->forward_from));
        if (property_exists($messageObject, 'forward_date'))
            $message->setForwardDate($messageObject->forward_date);
        // TODO: reply to message attribute
        if (property_exists($messageObject, 'text'))
            $message->setText($messageObject->text);
        if (property_exists($messageObject, 'audio'))
            $message->setAudio($this->parseAudio($messageObject->audio));
        if (property_exists($messageObject, 'document'))
            $message->setDocument($this->parseDocument($messageObject->document));
        if (property_exists($messageObject, 'photo'))
            $message->setPhoto($this->parsePhotoSize($messageObject->photo));
        if (property_exists($messageObject, 'sticker'))
            $message->setSticker($this->parseSticker($messageObject->sticker));
        if (property_exists($messageObject, 'video'))
            $message->setVideo($this->parseVideo($messageObject->video));
        if (property_exists($messageObject, 'voice'))
            $message->setVoice($this->parseVoice($messageObject->voice));
        if (property_exists($messageObject, 'caption'))
            $message->setCaption($messageObject->caption);
        if (property_exists($messageObject, 'contact'))
            $message->setContact($this->parseContact($messageObject->contact));
        if (property_exists($messageObject, 'location'))
            $message->setLocation($this->parseLocation($messageObject->location));
        if (property_exists($messageObject, 'new_chat_participant'))
            $message->setNewChatParticipant($this->parseUser($messageObject->new_chat_participant));
        if (property_exists($messageObject, 'left_chat_participant'))
            $message->setLeftChatParticipant($this->parseUser($messageObject->left_chat_participant));
        if (property_exists($messageObject, 'new_chat_title'))
            $message->setNewChatTitle($messageObject->new_chat_title);
        if (property_exists($messageObject, 'new_chat_photo'))
            $message->setNewChatPhoto($this->parsePhotoSize($messageObject->new_chat_photo));
        // TODO: not sure about implementation of TRUE type
        if (property_exists($messageObject, 'delete_chat_photo'))
            $message->setDeleteChatPhoto($messageObject->delete_chat_photo);
        if (property_exists($messageObject, 'group_chat_created'))
            $message->setGroupChatCreated($messageObject->group_chat_created);
        return $message;
    }

    public function parseUser($userObject)
    {
        $user = new User();
        $user->setId($userObject->id);
        $user->setFirstName($userObject->first_name);

        if (property_exists($userObject, 'last_name'))
            $user->setLastName($userObject->last_name);

        if (property_exists($userObject, 'username'))
            $user->setUserName($userObject->username);

        return $user;
    }

    public function parseChat($chatObject)
    {
        if (property_exists($chatObject, 'title')) {
            $groupChat = new GroupChat();
            $groupChat->setId($chatObject->id);
            $groupChat->setTitle($chatObject->title);
            return $groupChat;
        }

        return $this->parseUser($chatObject);
    }

    public function parseAudio($audioObject)
    {
        $audio = new Audio();
        $audio->setFileId($audioObject->file_id);
        $audio->setDuration($audioObject->duration);

        if (property_exists($audioObject, 'performer'))
            $audio->setPerformer($audioObject->performer);
        if (property_exists($audioObject, 'title'))
            $audio->setTitle($audioObject->title);
        if (property_exists($audioObject, 'mime_type'))
            $audio->setMimeType($audioObject->mime_type);
        if (property_exists($audioObject, 'file_size'))
            $audio->setFileSize($audioObject->file_size);

        return $audio;
    }

    public function parseDocument($documentObject)
    {
        $document = new Document();
        $document->setFileId($documentObject->file_id);
        if (property_exists($documentObject, 'thumb'))
            $document->setThumb($this->parsePhotoSize($documentObject->thumb));
        if (property_exists($documentObject, 'file_name'))
            $document->setFileName($documentObject->file_name);
        if (property_exists($documentObject, 'mime_type'))
            $document->setMimeType($documentObject->mime_type);
        if (property_exists($documentObject, 'file_size'))
            $document->setFileSize($documentObject->file_size);

        return $document;
    }

    // TODO: photoSize is an array of 4 sizes,
    // which should be considered
    public function parsePhotoSize($photoSizeObject)
    {
        $photoSize = new PhotoSize();
        $photoSize->setFileId($photoSizeObject->file_id);
        $photoSize->setWidth($photoSizeObject->width);
        $photoSize->setHeight($photoSizeObject->height);
        if (property_exists($photoSizeObject, 'file_size'))
            $photoSize->setFileSize($photoSizeObject->file_size);

        return $photoSize;
    }

    public function parseSticker($stickerObject)
    {
        $sticker = new Sticker();
        $sticker->setFileId($stickerObject->file_id);
        $sticker->setWidth($stickerObject->width);
        $sticker->setHeight($stickerObject->height);
        if (property_exists($stickerObject, 'thumb'))
            $sticker->setThumb($this->parsePhotoSize($stickerObject->thumb));
        if (property_exists($stickerObject, 'file_size'))
            $sticker->setFileSize($stickerObject->file_size);

        return $sticker;
    }

    public function parseVideo($videoObject)
    {
        $video = new Video();
        $video->setFileId($videoObject->file_id);
        $video->setWidth($videoObject->width);
        $video->setHeight($videoObject->height);
        $video->setDuration($videoObject->duration);
        if (property_exists($videoObject, 'thumb'))
            $video->setThumb($this->parsePhotoSize($videoObject->thumb));
        if (property_exists($videoObject, 'mime_type'))
            $video->setMimeType($videoObject->mime_type);
        if (property_exists($videoObject, 'file_size'))
            $video->setFileSize($videoObject->file_size);

        return $video;
    }


    public function parseVoice($voiceObject)
    {
        $voice = new Voice();
        $voice->setFileId($voiceObject->file_id);
        $voice->setDuration($voiceObject->duration);
        if (property_exists($voiceObject, 'mime_type'))
            $voice->setMimeType($voiceObject->mime_type);
        if (property_exists($voiceObject, 'file_size'))
            $voice->setFileSize($voiceObject->file_size);

        return $voice;
    }

    public function parseContact($contactObject)
    {
        $contact = new Contact();
        $contact->setPhoneNumber($contactObject->phone_number);
        $contact->setFirstName($contactObject->first_name);
        if (property_exists($contactObject, 'last_name'))
            $contact->setLastName($contactObject->last_name);
        if (property_exists($contactObject, 'user_id'))
            $contact->setUserId($contactObject->user_id);

        return $contact;
    }

    public function parseLocation($locationObject)
    {
        $location = new Location();
        $location->setLongitude($locationObject->longitude);
        $location->setLatitude($locationObject->latitude);

        return $location;
    }

    public function getUpdateId()
    {
        return $this->update_id;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
