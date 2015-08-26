<?php
/**
 * Upon receiving a message with this object, Telegram clients will display
 * a reply interface to the user (act as if the user has selected the bot‘s
 * message and tapped ’Reply'). This can be extremely useful if you want
 * to create user-friendly step-by-step interfaces without having to sacrifice privacy mode.
 *
 * User: valizada
 * Date: 26/08/15
 * Time: 14:22
 */

class ForceReply {
    private $force_reply;
    private $selective;

    /**
     * @return True
     * Shows reply interface to the user, as if they manually selected
     * the bot‘s message and tapped ’Reply'
     */
    public function getForceReply()
    {
        return $this->force_reply;
    }

    /**
     * @param mixed $force_reply
     */
    public function setForceReply($force_reply)
    {
        $this->force_reply = $force_reply;
    }

    /**
     * @return Boolean
     * Optional. Use this parameter if you want to force reply from specific users only.
     * Targets: 1) users that are @mentioned in the text of the Message object;
     * 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.
     */
    public function getSelective()
    {
        return $this->selective;
    }

    /**
     * @param mixed $selective
     */
    public function setSelective($selective)
    {
        $this->selective = $selective;
    }

}