<?php

namespace App\Entity;

use App\Repository\NotationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Link;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Put;
use ApiPlatform\Metadata\GetCollection;

#[ORM\Entity(repositoryClass: NotationRepository::class)]
#[ApiResource(
    operations: [ new Post() ]
)]
#[ApiResource(
    uriTemplate: '/beers/{beerId}/notations', 
    uriVariables: [
        'beerId' => new Link(
            fromClass: Beer::class,
            toProperty: 'beer'
        )
    ], 
    operations: [ new GetCollection() ]
)]

#[ApiResource(
    uriTemplate: '/beers/{beerId}/notations/{id}',
    uriVariables: [
        'beerId' => new Link(
            fromClass: Beer::class,
            toProperty: 'beer'
        ),
        'id' => new Link(fromClass: Notation::class),
    ],
    operations: [ new Get(), new Put(), new Delete(), new Patch() ]
)]

class Notation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $comment = null;

    #[ORM\Column]
    private ?int $note = null;

    #[ORM\ManyToOne(inversedBy: 'notations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Beer $beer = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): static
    {
        $this->comment = $comment;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): static
    {
        $this->note = $note;

        return $this;
    }

    public function getBeer(): ?beer
    {
        return $this->beer;
    }

    public function setBeer(?beer $beer): static
    {
        $this->beer = $beer;

        return $this;
    }
}
