<?php

/**
 * This object represents a group chat.
 * Required parameters: $id and $title
 * User: valizada
 * Date: 26/08/15
 * Time: 09:54
 */
class GroupChat
{

    private $id;
    private $title;

    /**
     * @return
     * unique identifier for this group chat
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param
     * unique identifier for this group chat
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return
     * group name
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param
     * group name
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}