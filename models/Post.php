<?php

class Post
{
    private ?int $id;
    private string $title;
	private string $excerpt;
    private string $content;
	private int $author;
    private ?DateTime $createdAt;
    
    private array $categories = [];
    

    public function __construct(?int $id, string $title, string $excerpt, string $content, int $author, ?DateTime $createdAt)
    {
        $this->id = $id;
        $this->title = $title;
		$this->excerpt = $excerpt;
        $this->content = $content;
        $this->author = $author;
        $this->createdAt = $createdAt;
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
	
	public function getExcerpt(): string
    {
        return $this->excerpt;
    }

    public function setExcerpt(string $excerpt): void
    {
        $this->excerpt = $excerpt;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }
	
	public function getAuthor(): int
    {
        return $this->author;
    }

    public function setAuthor(?int $author): void
    {
        $this->author = $author;
    }

    public function getCreatedAt(): ?datetime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?int $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
    
    public function getCategories(): array
    {
        return $this->categories;
    }

    public function setCategories(array $categories): void
    {
        $this->categories = $categories;
    }

    public function addCategory(Category $category): void
    {
        if (!in_array($category, $this->categories, true)) {
            $this->categories[] = $category;
        }
    }

    public function removeCategory(Category $category): void
    {
        foreach ($this->categories as $key => $value) {
            if ($value === $category) {
                unset($this->categories[$key]);
            }
        }
    }
}
