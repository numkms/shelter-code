<?php

/**
 * Class ShelterReception
 */
class ShelterReception extends ShelterInterfaces
{
    /**
     * @param string $name
     * @param string $yearsOld
     * @param string $animalKind
     * @return bool
     */
    public function takeTheAnimal(string $name, string $yearsOld, string $animalKind)
    {
        if (in_array($animalKind, $this->shelter->getAnimalKinds())) {
            $this->shelter->addAnimal(new $animalKind($name, $yearsOld));
            return true;
        } else {
            return false;
        }
    }
}
