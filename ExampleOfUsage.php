<?php
include 'Animals.php';
include 'Shelter.php';
include 'ShelterInterfaces.php';
include 'ShelterReception.php';
include 'ShelterExtradition.php';
include 'Dog.php';
include 'Cat.php';
include 'Turtle.php';
$shelter = new Shelter();
$shelter->reception->takeTheAnimal('Ajondra', 3, Cat::class);
$shelter->showAnimalsListByKind(Dog::class);
$shelter->extradition->giveTheLongTermedAnimal(Dog::class);
$shelter->extradition->giveTheLongTermedAnimal();
