<?php

abstract class Animal
{
    public function falar()
    {
        return "Som";
    }

    public function mover()
    {
        return "Anda";
    }
}

class Cachorro extends Animal
{
    public function falar()
    {
        return "Late";
    }
}

class Gato extends Animal
{
    public function falar()
    {
        return "Mia";
    }
}

class Passaro extends Animal
{
    public function falar()
    {
        return "Canta";
    }

    public function mover()
    {
      return "Avoia e " . parent::mover();
    }

}

$pluto = new Cachorro();

$som = $pluto->falar();
$move = $pluto->mover();

echo $som . "<br>";
echo $move . "<br>";

echo "<hr>";

$garfield = new Gato();

$som = $garfield->falar();
$move = $garfield->mover();

echo $som . "<br>";
echo $move . "<br>";

echo "<hr>";

$calozinha = new Passaro();

$som = $calozinha->falar();
$move = $calozinha->mover();

echo $som . "<br>";
echo $move . "<br>";
