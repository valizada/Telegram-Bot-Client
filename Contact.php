<?php

/**
 * This object represents a phone contact.
 *
 * Required params: $phone_number, $first_name.
 * Optional params: $last_name, $user_id.
 * User: valizada
 * Date: 26/08/15
 * Time: 14:21
 */
class Contact
{
    private $phone_number;
    private $first_name;
    private $last_name;
    private $user_id;

    /**
     * @return String
     * Contact's phone number
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @param mixed $phone_number
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
    }

    /**
     * @return String
     * Contact's first name
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return String
     * Optional. Contact's last name
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return Integer
     * Optional. Contact's user identifier in Telegram
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
}