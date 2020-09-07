<?php
namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Contact;

class ContactDAO extends DAO
{
    public function newContact(Parameter $post)
    {

        $to      = 'lallieau.blog@gmail.com';
        $message = $post->get('content');
        $headers = array(
            'From' => $post->get('email') . $post->get('name'),
            'Reply-To' => $post->get('email'),
            'X-Mailer' => 'PHP/' . phpversion()
        );

        return mail($to, $message, implode($headers));
    }
}
