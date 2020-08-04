<?php

namespace App\src\model;

class Contact
{
    private $id;
    private $name;
    private $email;
    private $content;
    private $sendAt;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id =$id;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setTitle($name)
    {
        $this->name = $name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getContent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getSendAt()
    {
        return $this->sendAt;
    }
    public function setSendAt($sendAt)
    {
        $this->sendAt = $sendAt;
    }

}