<?php

namespace App\src\constraint;
use App\config\Parameter;

class ArticleValidation extends Validation
{
    private $errors = [];
    private $constraint;

    public function __construct()
    {
        $this->constraint = new Constraint();
    }

    public function check(Parameter $post)
    {
        foreach ($post->all() as $key => $value)
        {
            $this->checkField($key, $value);
        }
        return $this->errors;
    }

    private function checkField($name, $value)
    {
        if($name === 'title')
        {
            $error = $this->checkTitle($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'content')
        {
            $error = $this->checkContent($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'chapo')
        {
            $error = $this->checkChapo($name, $value);
            $this->addError($name, $error);
        }
        elseif($name === 'img')
        {
            $error = $this->checkImg($name, $value);
            $this->addError($name, $error);
        }
    }

    private function addError($name, $error)
    {
        if($error)
        {
            $this->errors += [
              $name => $error
            ];
        }
        return null;
    }

    private function checkTitle($name, $value)
    {
        if($this->constraint->notBlank($name, $value))
        {
            return $this->constraint->notBlank('titre', $value);
        }

        if($this->constraint->minLength($name,$value,2))
        {
            return $this->constraint->minLength('titre', $value, 2);
        }

        if($this->constraint->maxLength($name, $value, 255))
        {
            return $this->constraint->maxLength('titre', $value, 255);
        }
    }

    private function checkChapo($name, $value)
    {
        if($this->constraint->notBlank($name, $value))
        {
            return $this->constraint->notBlank('chapo', $value);
        }

        if($this->constraint->minLength($name, $value, 2))
        {
            return $this->constraint->minLength('chapo', $value, 2);
        }
    }

    private function checkContent($name, $value)
    {
        if($this->constraint->notBlank($name, $value))
        {
            return $this->constraint->notBlank('content', $value);
        }

        if($this->constraint->minLength($name, $value, 2))
        {
            return $this->constraint->minLength('content', $value, 2);
        }
    }

    private function checkImg($name, $value)
    {

        // vérifier si image
    }

}