<?php
class Place
{
    private $city_name;
    private $date;
    private $duration;
    private $reason;

    function __construct($city_name, $date, $duration, $reason)
    {
        $this->city_name = $city_name;
        $this->date = $date;
        $this->duration = $duration;
        $this->reason = $reason;
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
