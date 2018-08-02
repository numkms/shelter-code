<?php

/**
 * Class ShelterInterfaces
 * @property Shelter $shelter
 */
class ShelterInterfaces
{
    protected $shelter;

    /**
     * ShelterInterfaces constructor.
     * @param Shelter $shelter
     */
    public function __construct(Shelter $shelter)
    {
        $this->shelter = $shelter;
    }
}
