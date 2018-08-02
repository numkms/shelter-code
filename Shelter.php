<?php

/**
 * Class Shelter
 * @property ShelterReception $reception
 * @property ShelterExtradition $extradition
 */
class Shelter
{
    public $reception;
    public $extradition;
    protected $animals = [];

    /**
     * Shelter constructor.
     */
    public function __construct()
    {
        $this->reception = new ShelterReception($this);
        $this->extradition = new ShelterExtradition($this);
    }

    /**
     * @param $animal
     */
    public function addAnimal($animal)
    {
        $this->animals[] = $animal;
    }

    /**
     * @return array
     */
    public function getAnimalKinds()
    {
        return [
            Dog::class,
            Cat::class,
            Turtle::class
        ];
    }

    /**
     * @param string|null $animalKind
     * @param bool $sort
     * @return array
     */
    public function getAnimalsList(string $animalKind = null, $sort = true)
    {
        $animals = $this->animals;
        if ($animalKind) {
            foreach ($animals as $key => $animal) {
                if (get_class($animal) != $animalKind) {
                    unset($animals[$key]);
                }
            }
        }

        if ($animalKind && $sort) {
            usort($animals, function ($first, $second) {
                return strtolower($first->getName()) > strtolower($second->getName());
            });
        }

        return $animals;
    }

    /**
     * @param string $animalKind
     */
    public function showAnimalsListByKind(string $animalKind)
    {
        $animalsString = '';
        /** @var Animals $animal */
        foreach ($this->getAnimalsList($animalKind) as $animal) {
            $animalsString .= get_class($animal) . ' ' . $animal->getName() . ' ' . $animal->getYearsOld() . PHP_EOL;
        }
        echo nl2br($animalsString);
    }

    /**
     * @param $key
     */
    public function removeAnimalByKey($key)
    {
        unset($this->animals[$key]);
    }
}
