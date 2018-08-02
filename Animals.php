<?php

/**
 * Class Animals
 * @property string $name
 * @property integer $yearsOld
 */
class Animals
{
    protected $name;
    protected $yearsOld;

    /**
     * Animals constructor.
     * @param $name
     * @param $yearsOld
     */
    public function __construct($name, $yearsOld)
    {
        $this->name = $name;
        $this->yearsOld = $yearsOld;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getYearsOld()
    {
        return $this->yearsOld;
    }
}
