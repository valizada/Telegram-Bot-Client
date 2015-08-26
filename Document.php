<?php
/**
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 *
 * Required params: $file_id.
 * Optional params: $thumb, $file_name, $mime_type, $file_size.
 * User: valizada
 * Date: 26/08/15
 * Time: 14:20
 */

class Document {
    private $file_id;
    private $thumb;
    private $file_name;
    private $mime_type;
    private $file_size;

    /**
     * @return String
     * Unique file identifier
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
     * @return PhotoSize
     * Optional. Document thumbnail as defined by sender
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
     * @return String
     * Optional. Original filename as defined by sender
     */
    public function getFileName()
    {
        return $this->file_name;
    }

    /**
     * @param mixed $file_name
     */
    public function setFileName($file_name)
    {
        $this->file_name = $file_name;
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