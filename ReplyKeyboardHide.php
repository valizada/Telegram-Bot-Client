<?php

/**
 * Upon receiving a message with this object, Telegram clients will hide the current
 * custom keyboard and display the default letter-keyboard. By default, custom keyboards
 * are displayed until a new keyboard is sent by a bot. An exception is made for one-time
 * keyboards that are hidden immediately after the user presses a button.
 *
 * User: valizada
 * Date: 26/08/15
 * Time: 14:22
 */
class ReplyKeyboardHide
{
    private $hide_keyboard;
    private $selective;

    /**
     * @return True
     * Requests clients to hide the custom keyboard
     */
    public function getHideKeyboard()
    {
        return $this->hide_keyboard;
    }

    /**
     * @param mixed $hide_keyboard
     */
    public function setHideKeyboard($hide_keyboard)
    {
        $this->hide_keyboard = $hide_keyboard;
    }

    /**
     * @return    Boolean    Optional. Use this parameter if you want to hide keyboard for specific users only.
     * Targets: 1) users that are @mentioned in the text of the Message object;
     * 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.
     * Example: A user votes in a poll, bot returns confirmation message in reply to the vote
     * and hides keyboard for that user, while still showing the keyboard with poll
     * options to users who haven't voted yet.
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