<?php
namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Contact;

class ContactDAO extends DAO
{
    public function newContact(Parameter $post)
    {
        $to      = 'lallieau.blog@gmail.com';
        $subject = 'Formulaire de contact';
        $message = $post->get('content');
        $headers = array(
            'From' => $post->get('name'),
            'Reply-To' => $post->get('email'),
            'X-Mailer' => 'PHP/' . phpversion()
        );

        return mail($to, $subject, $message, implode($headers));
    }
}
