<?php
/**
 * This object represents a sticker.
 *
 * Required params: $file_id, $width, $height.
 * Optional params: $thumb, $file_size.
 * User: valizada
 * Date: 26/08/15
 * Time: 14:20
 */

class Sticker {
    private $file_id;
    private $width;
    private $height;
    private $thumb;
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
     * Sticker width
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return Integer
     * Sticker height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return PhotoSize
     * Optional. Sticker thumbnail in .webp or .jpg format
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * @param mixed $thumb
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
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