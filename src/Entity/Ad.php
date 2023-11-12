<?php

namespace App\Entity;

use App\Repository\AdRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdRepository::class)]
class Ad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $Slug = null;

    #[ORM\Column]
    private ?float $Price = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Introduction = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Content = null;

    #[ORM\Column(length: 255)]
    private ?string $coverImage = null;

    #[ORM\Column(length: 255)]
    private ?string $Car = null;

    #[ORM\OneToMany(mappedBy: 'Ad', targetEntity: Image::class)]
    private Collection $images;

    #[ORM\OneToMany(mappedBy: 'Ad', targetEntity: Image::class)]
    private Collection $del;

    public function __construct()
    {
        $this->images = new ArrayCollection();
        $this->del = new ArrayCollection();
    }

        /**
     * Permet d'intialiser le slug automatiquement si on ne le donne pas
     *
     * @return void
     */
    #[ORM\PrePersist]
    #[ORM\PreUpdate]
    public function initializeSlug(): void
    {
        if(empty($this->slug))
        {
            $slugify = new Slugify();
            $this->slug = $slugify->slugify($this->title);
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->Slug;
    }

    public function setSlug(string $Slug): static
    {
        $this->Slug = $Slug;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->Price;
    }

    public function setPrice(float $Price): static
    {
        $this->Price = $Price;

        return $this;
    }

    public function getIntroduction(): ?string
    {
        return $this->Introduction;
    }

    public function setIntroduction(string $Introduction): static
    {
        $this->Introduction = $Introduction;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(string $Content): static
    {
        $this->Content = $Content;

        return $this;
    }

    public function getCoverImage(): ?string
    {
        return $this->coverImage;
    }

    public function setCoverImage(string $coverImage): static
    {
        $this->coverImage = $coverImage;

        return $this;
    }

    public function getCar(): ?string
    {
        return $this->Car;
    }

    public function setCar(string $Car): static
    {
        $this->Car = $Car;

        return $this;
    }

    /**
     * @return Collection<int, Image>
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): static
    {
        if (!$this->images->contains($image)) {
            $this->images->add($image);
            $image->setAd($this);
        }

        return $this;
    }

    public function removeImage(Image $image): static
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getAd() === $this) {
                $image->setAd(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Image>
     */
    public function getDel(): Collection
    {
        return $this->del;
    }

    public function addDel(Image $del): static
    {
        if (!$this->del->contains($del)) {
            $this->del->add($del);
            $del->setAd($this);
        }

        return $this;
    }

    public function removeDel(Image $del): static
    {
        if ($this->del->removeElement($del)) {
            // set the owning side to null (unless already changed)
            if ($del->getAd() === $this) {
                $del->setAd(null);
            }
        }

        return $this;
    }
}
