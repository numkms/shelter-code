<?php

/**
 * Class ShelterExtradition
 */
class ShelterExtradition extends ShelterInterfaces
{
    /**
     * @param null $animalKind
     * @return bool
     */
    public function giveTheLongTermedAnimal($animalKind = null)
    {
        if ($animalKind) {
            $animals = $this->shelter->getAnimalsList($animalKind, false);
        } else {
            $animals = $this->shelter->getAnimalsList(null, false);
        }
        if ($animals) {
            $longTermedAnimalIndex = max(array_keys($animals));
            if (isset($animals[$longTermedAnimalIndex])) {
                $animalForGive = $animals[$longTermedAnimalIndex];
                $this->shelter->removeAnimalByKey($longTermedAnimalIndex);
                return $animalForGive;
            }
        }

        return false;
    }
}
