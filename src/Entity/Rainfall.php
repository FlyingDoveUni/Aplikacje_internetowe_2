<?php

namespace App\Entity;

use App\Repository\RainfallRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RainfallRepository::class)]
class Rainfall
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $deszcz = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeszcz(): ?float
    {
        return $this->deszcz;
    }

    public function setDeszcz(float $deszcz): static
    {
        $this->deszcz = $deszcz;

        return $this;
    }
}
