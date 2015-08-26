<?php

/**
 * This object represents one size of a photo or a file / sticker thumbnail.
 *
 * Required params: $file_id, $width, $height
 * Optional: $file_size
 *
 * User: valizada
 * Date: 26/08/15
 * Time: 12:25
 */
class PhotoSize
{
    private $file_id;
    private $width;
    private $height;
    private $file_size;

    /**
     * @return mixed
     * Unique identifier for this file
     */
    public function getFileId()
    {
        return $this->file_id;
    }

    /**
     * @param mixed
     * Unique identifier for this file
     */
    public function setFileId($file_id)
    {
        $this->file_id = $file_id;
    }

    /**
     * @return mixed
     * Photo width
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed
     * Photo width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     * Photo height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed
     * Photo height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     * Optional. File size
     */
    public function getFileSize()
    {
        return $this->file_size;
    }

    /**
     * @param mixed
     * Optional. File size
     */
    public function setFileSize($file_size)
    {
        $this->file_size = $file_size;
    }
}