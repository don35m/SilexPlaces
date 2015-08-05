<?php
class Place
{
    private $city_name;
    private $date;
    private $duration;
    private $reason;
    private $image;

    function __construct($city_name, $date, $duration, $reason, $image)
    {
        $this->city_name = $city_name;
        $this->date = $date;
        $this->duration = $duration;
        $this->reason = $reason;
        $this->image = $image;
    }

    function setCityName($new_city_name)
    {
        $this->city_name = (string) $new_city_name;
    }

    function getCityName()
    {
        return $this->city_name;
    }

    function setDate($date)
    {
        $this->date = (string) $date;
    }

    function getDate()
    {
        return $this->date;
    }

    function setDuration($duration)
    {
        $this->duration = (string) $duration;
    }

    function getDuration()
    {
        return $this->duration;
    }

    function setReason($reason)
    {
        $this->reason = (string) $reason;
    }

    function getReason()
    {
        return $this->reason;
    }

    function setImage($new_image)
    {
        $this->image = $new_image;
    }

    function getImage()
    {
        return $this->image;
    }

    function save()
    {
        array_push($_SESSION['list_of_places'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_places'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_places'] = array();
    }
}
?>
