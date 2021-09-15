<?php
class komputer
{
    private $jenisProcessor = "Intel Core I7";

    public function tampilkanJenisProcessor()
    {
        return $this->jenisProcessor;
    }
}

class Laptop extends komputer
{
    public function getProcessor()
    {
        return $this->jenisProcessor;
    }
}

$komputer = new komputer();
$laptop = new Laptop();

echo $komputer->tampilkanJenisProcessor();

echo $laptop->getProcessor();