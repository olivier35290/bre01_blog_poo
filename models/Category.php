<?php

class Category
{
    private ?int $id;
    private string $title;
    private string $description;
    
    private array $posts = [];
    
    public function __construct(?int $id, string $title, string $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
    
    public function getDescription(): string
    {
        return $this->description;
    }
    
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    
    public function setPosts(array $posts): void
    {
        $this->posts = $posts;
    }

    public function addPost(Post $post): void
    {
        if (!in_array($post, $this->posts, true)) {
            $this->posts[] = $post;
        }
    }

    public function removePost(Post $post): void
    {
        foreach ($this->posts as $key => $value) {
            if ($value === $post) {
                unset($this->posts[$key]);
            }
        }
    }
}
