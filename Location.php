<?php

/**
 * This object represents a point on the map.
 * Required params: $longitude, $latitude.
 * User: valizada
 * Date: 26/08/15
 * Time: 14:21
 */
class Location
{
    private $longitude;
    private $latitude;

    /**
     * @return Float
     * Longitude as defined by sender
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return Float
     * Latitude as defined by sender
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }
}