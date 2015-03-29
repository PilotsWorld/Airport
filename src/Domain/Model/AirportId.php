<?php

namespace PilotsWorld\Airport\Domain\Model;

class AirportId
{
    protected $id;

    /**
     * AirportId constructor.
     *
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
