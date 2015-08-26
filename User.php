<?php
/**
 * This object represents a Telegram user or bot.
 * Required parameters are: $id and $first_name.
 * Optionals: $last_name and $username
 *
 * User: valizada
 * Date: 26/08/15
 * Time: 09:46
 */

class User {
    private $id;
    private $first_name;
    private $last_name;
    private $user_name;

    /**
     * @return
     * unique identifier for this user or bot
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param
     * unique identifier for this user or bot
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return User‘s or bot’s first name
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param User‘s or bot’s first name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return User‘s or bot’s last name
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param User‘s or bot’s last name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return User‘s or bot’s username
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @param User‘s or bot’s username
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }
}