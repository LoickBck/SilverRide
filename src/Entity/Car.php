<?php

namespace App\Entity;

use App\Repository\CarRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarRepository::class)]
class Car
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Brand = null;

    #[ORM\Column(length: 255)]
    private ?string $Model = null;

    #[ORM\Column]
    private ?int $Manufacture = null;

    #[ORM\Column(length: 255)]
    private ?string $Color = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $Price = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Immatriculation = null;

    #[ORM\Column]
    private ?int $Owner = null;

    #[ORM\Column(length: 255)]
    private ?string $CoverImage = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?float $Kilometers = null;

    #[ORM\Column(type: Types::INTEGER, nullable: true)]
    private ?int $NumberOfOwners = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CubicCapacity = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?float $Power = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $FuelType = null;

    #[ORM\Column]
    private ?int $YearOfManufacture = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Transmission = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Description = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Options = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrand(): ?string
    {
        return $this->Brand;
    }

    public function setBrand(string $Brand): static
    {
        $this->Brand = $Brand;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->Model;
    }

    public function setModel(string $Model): static
    {
        $this->Model = $Model;

        return $this;
    }

    public function getManufacture(): ?int
    {
        return $this->Manufacture;
    }

    public function setManufacture(int $Manufacture): static
    {
        $this->Manufacture = $Manufacture;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->Color;
    }

    public function setColor(string $Color): static
    {
        $this->Color = $Color;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->Price;
    }

    public function setPrice(string $Price): static
    {
        $this->Price = $Price;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->Immatriculation;
    }

    public function setImmatriculation(?string $Immatriculation): static
    {
        $this->Immatriculation = $Immatriculation;

        return $this;
    }

    public function getOwner(): ?int
    {
        return $this->Owner;
    }

    public function setOwner(int $Owner): static
    {
        $this->Owner = $Owner;

        return $this;
    }

    public function getCoverImage(): ?string
    {
        return $this->CoverImage;
    }

    public function setCoverImage(?string $CoverImage): static
    {
        $this->CoverImage = $CoverImage;

        return $this;
    }

    public function getKilometers(): ?float
    {
        return $this->Kilometers;
    }

    public function setKilometers(?float $Kilometers): static
    {
        $this->Kilometers = $Kilometers;

        return $this;
    }

    public function getNumberOfOwners(): ?int
    {
        return $this->NumberOfOwners;
    }

    public function setNumberOfOwners(?int $NumberOfOwners): static
    {
        $this->NumberOfOwners = $NumberOfOwners;

        return $this;
    }

    public function getCubicCapacity(): ?string
    {
        return $this->CubicCapacity;
    }

    public function setCubicCapacity(?string $CubicCapacity): static
    {
        $this->CubicCapacity = $CubicCapacity;

        return $this;
    }

    public function getPower(): ?float
    {
        return $this->Power;
    }

    public function setPower(?float $Power): static
    {
        $this->Power = $Power;

        return $this;
    }

    public function getFuelType(): ?string
    {
        return $this->FuelType;
    }

    public function setFuelType(?string $FuelType): static
    {
        $this->FuelType = $FuelType;

        return $this;
    }

    public function getYearOfManufacture(): ?int
    {
        return $this->YearOfManufacture;
    }

    public function setYearOfManufacture(int $YearOfManufacture): static
    {
        $this->YearOfManufacture = $YearOfManufacture;

        return $this;
    }

    public function getTransmission(): ?string
    {
        return $this->Transmission;
    }

    public function setTransmission(?string $Transmission): static
    {
        $this->Transmission = $Transmission;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getOptions(): ?string
    {
        return $this->Options;
    }

    public function setOptions(?string $Options): static
    {
        $this->Options = $Options;

        return $this;
    }
}
