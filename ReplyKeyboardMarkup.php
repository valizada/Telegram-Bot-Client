<?php
/**
 * This object represents a custom keyboard with reply options
 * Required params: $keyboard.
 *
 * Optional params: $resize_keyboard, $one_time_keyboard, $selective.
 * User: valizada
 * Date: 26/08/15
 * Time: 14:22
 */

class ReplyKeyboardMarkup {
    private $keyboard;
    private $resize_keyboard;
    private $one_time_keyboard;
    private $selective;

    /**
     * @return Array of Array of String
     * Array of button rows, each represented by an Array of Strings
     */
    public function getKeyboard()
    {
        return $this->keyboard;
    }

    /**
     * @param mixed $keyboard
     */
    public function setKeyboard($keyboard)
    {
        $this->keyboard = $keyboard;
    }

    /**
     * @return Boolean
     * Optional. Requests clients to resize the keyboard vertically for optimal fit
     * (e.g., make the keyboard smaller if there are just two rows of buttons).
     * Defaults to false, in which case the custom keyboard is always of the same
     * height as the app's standard keyboard.
     */
    public function getResizeKeyboard()
    {
        return $this->resize_keyboard;
    }

    /**
     * @param mixed $resize_keyboard
     */
    public function setResizeKeyboard($resize_keyboard)
    {
        $this->resize_keyboard = $resize_keyboard;
    }

    /**
     * @return Boolean
     * Optional. Requests clients to hide the keyboard as soon as it's been used.
     * Defaults to false.
     */
    public function getOneTimeKeyboard()
    {
        return $this->one_time_keyboard;
    }

    /**
     * @param mixed $one_time_keyboard
     */
    public function setOneTimeKeyboard($one_time_keyboard)
    {
        $this->one_time_keyboard = $one_time_keyboard;
    }

    /**
     * @return Boolean
     * Optional. Use this parameter if you want to show the keyboard to specific users only.
     * Targets: 1) users that are @mentioned in the text of the Message object;
     * 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.
     *
     * Example: A user requests to change the bot‘s language, bot replies to the request with a keyboard
     * to select the new language. Other users in the group don’t see the keyboard.
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