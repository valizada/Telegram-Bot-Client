<?php

/**
 * For now this class will contain all the sensitive data, such as TelegramBots Api
 *
 * User: valizada
 * Date: 26/08/15
 * Time: 11:23
 */
class ParentClass
{

    private $URL = "https://api.telegram.org/YOUR_TOKEN_GOES_HERE/";

    /**
     * @return mixed
     */
    public function getURL()
    {
        return $this->URL;
    }
}