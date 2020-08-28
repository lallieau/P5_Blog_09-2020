<?php

namespace App\src\constraint;

class Constraint
{
    public function notBlank($name, $value)
    {
        if(empty($value))
        {
            return '<p>Le champ <strong>'.$name.'</strong> est vide</p>';
        }
        return null;
    }

    public function minLength($name, $value, $minSize)
    {
        if(strlen($value) < $minSize)
        {
            return '<p>Le champ <strong>'.$name.'</strong> doit contenir au moins '.$minSize.' caractères</p>';
        }
        return null;
    }

    public function maxLength($name, $value, $maxSize)
    {
        if(strlen($value) > $maxSize)
        {
            return '<p>Le champ <strong>'.$name.'</strong> doit contenir au maximum '.$maxSize.' caractères</p>';
        }
        return null;
    }

    public function controlEmail($name, $value)
    {
        if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $value))
        {
            return '<p>Le champ <strong>' .$name. '</strong> doit contenir une adresse email.</p>';
        }
        return null;
    }
}