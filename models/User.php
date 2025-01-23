<?php

class User
{
    private ?int $id = null;
    public function __construct(private string $name, private string $email) {}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getname(): string
    {
        return $this->name;
    }

    public function setname(string $name): void
    {
        $this->name = $name;
    }



    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}
