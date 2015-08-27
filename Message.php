<?php

/**
 * This object represents a message.
 * Required params are: $message_id, $from, $date, $chat.
 *
 * Optionals are: $forward_from, $forward_date, $reply_to_message, $text,
 * $audio
 * User: valizada
 * Date: 26/08/15
 * Time: 09:57
 */
class Message
{
    private $message_id;
    private $from;
    private $date;
    private $chat;
    private $forward_from;
    private $forward_date;
    private $reply_to_message;
    private $text;
    private $audio;
    private $document;
    private $photo;
    private $sticker;
    private $video;
    private $voice;
    private $caption;
    private $contact;
    private $location;
    private $new_chat_participant;
    private $left_chat_participant;
    private $new_chat_title;
    private $new_chat_photo;
    private $delete_chat_photo;
    private $group_chat_created;

    /**
     * @return
     * unique message identifier
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * @param mixed
     * unique message identifier
     */
    public function setMessageId($message_id)
    {
        $this->message_id = $message_id;
    }

    /**
     * @return "User"
     * sender
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param mixed "User"
     * sender
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return
     * date the message was sent in Unix time
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed
     * date the message was sent in Unix time
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed "User or GroupChat"
     * Conversation the message belongs to — user in case of a private message,
     * GroupChat in case of a group
     */
    public function getChat()
    {
        return $this->chat;
    }

    /**
     * @param mixed "User or GroupChat"
     * Conversation the message belongs to — user in case of a private message,
     * GroupChat in case of a group
     */
    public function setChat($chat)
    {
        $this->chat = $chat;
    }

    /**
     * @return "User"
     * Optional. For forwarded messages, sender of the original message
     */
    public function getForwardFrom()
    {
        return $this->forward_from;
    }

    /**
     * @param mixed "User"
     * Optional. For forwarded messages, sender of the original message
     */
    public function setForwardFrom($forward_from)
    {
        $this->forward_from = $forward_from;
    }

    /**
     * @return mixed
     * Optional. For forwarded messages, date the original message was sent in Unix time
     */
    public function getForwardDate()
    {
        return $this->forward_date;
    }

    /**
     * @param mixed
     * Optional. For forwarded messages, date the original message was sent in Unix time
     */
    public function setForwardDate($forward_date)
    {
        $this->forward_date = $forward_date;
    }

    /**
     * @return mixed "Message"
     * Optional. For replies, the original message.
     * Note that the Message object in this field will not contain further reply_to_message fields
     * even if it itself is a reply.
     */
    public function getReplyToMessage()
    {
        return $this->reply_to_message;
    }

    /**
     * @param mixed "Message"
     * Optional. For replies, the original message.
     * Note that the Message object in this field will not contain further reply_to_message fields
     * even if it itself is a reply.
     */
    public function setReplyToMessage($reply_to_message)
    {
        $this->reply_to_message = $reply_to_message;
    }

    /**
     * @return
     * Optional. For text messages, the actual UTF-8 text of the message
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed
     * Optional. For text messages, the actual UTF-8 text of the message
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed "Audio"
     * Optional. Message is an audio file, information about the file
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * @param mixed "Audio"
     * Optional. Message is an audio file, information about the file
     */
    public function setAudio($audio)
    {
        $this->audio = $audio;
    }

    /**
     * @return mixed
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param mixed $document
     */
    public function setDocument($document)
    {
        $this->document = $document;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getSticker()
    {
        return $this->sticker;
    }

    /**
     * @param mixed $sticker
     */
    public function setSticker($sticker)
    {
        $this->sticker = $sticker;
    }

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param mixed $video
     */
    public function setVideo($video)
    {
        $this->video = $video;
    }

    /**
     * @return mixed
     */
    public function getVoice()
    {
        return $this->voice;
    }

    /**
     * @param mixed $voice
     */
    public function setVoice($voice)
    {
        $this->voice = $voice;
    }

    /**
     * @return mixed
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * @param mixed $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getNewChatParticipant()
    {
        return $this->new_chat_participant;
    }

    /**
     * @param mixed $new_chat_participant
     */
    public function setNewChatParticipant($new_chat_participant)
    {
        $this->new_chat_participant = $new_chat_participant;
    }

    /**
     * @return mixed
     */
    public function getLeftChatParticipant()
    {
        return $this->left_chat_participant;
    }

    /**
     * @param mixed $left_chat_participant
     */
    public function setLeftChatParticipant($left_chat_participant)
    {
        $this->left_chat_participant = $left_chat_participant;
    }

    /**
     * @return mixed
     */
    public function getNewChatTitle()
    {
        return $this->new_chat_title;
    }

    /**
     * @param mixed $new_chat_title
     */
    public function setNewChatTitle($new_chat_title)
    {
        $this->new_chat_title = $new_chat_title;
    }

    /**
     * @return mixed
     */
    public function getNewChatPhoto()
    {
        return $this->new_chat_photo;
    }

    /**
     * @param mixed $new_chat_photo
     */
    public function setNewChatPhoto($new_chat_photo)
    {
        $this->new_chat_photo = $new_chat_photo;
    }

    /**
     * @return mixed
     */
    public function getDeleteChatPhoto()
    {
        return $this->delete_chat_photo;
    }

    /**
     * @param mixed $delete_chat_photo
     */
    public function setDeleteChatPhoto($delete_chat_photo)
    {
        $this->delete_chat_photo = $delete_chat_photo;
    }

    /**
     * @return mixed
     */
    public function getGroupChatCreated()
    {
        return $this->group_chat_created;
    }

    /**
     * @param mixed $group_chat_created
     */
    public function setGroupChatCreated($group_chat_created)
    {
        $this->group_chat_created = $group_chat_created;
    }

}