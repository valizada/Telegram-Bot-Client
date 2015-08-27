<?php

/**
 * This object represent a user's profile pictures.
 *
 * Required params: $total_count, $photos.
 * User: valizada
 * Date: 26/08/15
 * Time: 14:21
 */
class UserProfilePhotos
{
    private $total_count;
    private $photos;

    /**
     * @return Integer
     * Total number of profile pictures the target user has
     */
    public function getTotalCount()
    {
        return $this->total_count;
    }

    /**
     * @param mixed $total_count
     */
    public function setTotalCount($total_count)
    {
        $this->total_count = $total_count;
    }

    /**
     * @return Array of Array of PhotoSize
     * Requested profile pictures (in up to 4 sizes each)
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param mixed $photos
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }
}