<?php
namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Contact;

class ContactDAO extends DAO
{
    public function newContact(Parameter $post)
    {
        $sql = 'INSERT INTO contact (contact.id, contact.name, contact.email, contact.content, contact.sendAt) VALUES (?,?,?,?,NOW())';
        $this->createQuery($sql,[
            $post->get('name'),
            $post->get('email'),
            $post->get('content')
        ]);
    }
}
