<?php

/**
 * This object represents an audio file to be treated as music by the Telegram clients.
 *
 * Required params: $file_id, $duration.
 * Optional params: $performer, $title, $mime_type, $file_size.
 *
 * User: valizada
 * Date: 26/08/15
 * Time: 13:43
 */
class Audio
{
    private $file_id;
    private $duration;
    private $performer;
    private $title;
    private $mime_type;
    private $file_size;

    /**
     * @return String
     * Unique identifier for this file
     */
    public function getFileId()
    {
        return $this->file_id;
    }

    /**
     * @param mixed $file_id
     */
    public function setFileId($file_id)
    {
        $this->file_id = $file_id;
    }

    /**
     * @return Integer
     * Duration of the audio in seconds as defined by sender
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return String
     * Optional. Performer of the audio as defined by sender or by audio tags
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * @param mixed $performer
     */
    public function setPerformer($performer)
    {
        $this->performer = $performer;
    }

    /**
     * @return String
     * Optional. Title of the audio as defined by sender or by audio tags
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return String
     * Optional. MIME type of the file as defined by sender
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * @param mixed $mime_type
     */
    public function setMimeType($mime_type)
    {
        $this->mime_type = $mime_type;
    }

    /**
     * @return Integer
     * Optional. File size
     */
    public function getFileSize()
    {
        return $this->file_size;
    }

    /**
     * @param mixed $file_size
     */
    public function setFileSize($file_size)
    {
        $this->file_size = $file_size;
    }
}