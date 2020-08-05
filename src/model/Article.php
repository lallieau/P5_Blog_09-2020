<?php

namespace App\src\model;

class Article
{
    private $id;
    private $title;
    private $chapo;
    private $content;
    private $author;
    private $createdAt;
    private $editAt;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id =$id;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getChapo()
    {
        return $this->chapo;
    }
    public function setChapo($chapo)
    {
        $this->chapo = $chapo;
    }

    public function getContent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getAuthor()
    {
        return $this->author;
    }
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getEditAt()
    {
        return $this->editAt;
    }
    public function setEditAt($editAt)
    {
        $this->editAt = $editAt;
    }

}