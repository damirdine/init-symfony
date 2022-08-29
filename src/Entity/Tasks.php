<?php

namespace App\Entity;

use App\Repository\TasksRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TasksRepository::class)]
class Tasks
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Tasks = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTasks(): ?string
    {
        return $this->Tasks;
    }

    public function setTasks(string $Tasks): self
    {
        $this->Tasks = $Tasks;

        return $this;
    }
}
