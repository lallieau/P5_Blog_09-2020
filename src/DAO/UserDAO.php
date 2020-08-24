<?php

namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\User;

class UserDAO extends DAO
{
    private function buildObject($row)
    {
        $user = new User();
        $user->setId($row['id']);
        $user->setPseudo($row['pseudo']);
        $user->setCreatedAt($row['createdAt']);
        $user->setRole($row['name']);
        $user->setAvatar($row['sexe']);
        return $user;
    }
    public function getUsers()
    {
        $sql = 'SELECT users.id, users.pseudo, users.createdAt, role.name, avatar.sexe FROM users INNER JOIN role, avatar ON users.role_id = role.id, users.avatar_id = avatar.id ORDER BY users.id DESC';
        $result = $this->createQuery($sql);
        $users = [];

        foreach($result as $row)
        {
            $userId = $row['id'];
            $users[$userId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $users;
    }

    public function register(Parameter $post)
    {
        $this->checkUser($post);
        $sql = 'INSERT INTO users (pseudo, password, createdAt, role_id, avatar_id) VALUES (?, ?, NOW(), ?, ?)';
        $this->createQuery($sql, [$post->get('pseudo'), password_hash($post->get('password'), PASSWORD_BCRYPT), 2, 3]);
    }

    public function checkUser(Parameter $post)
    {
        $sql = 'SELECT COUNT(pseudo) FROM users WHERE pseudo = ?';
        $result = $this->createQuery($sql, [$post->get('pseudo')]);
        $isUnique = $result->fetchColumn();

        if($isUnique)
        {
            return '<p>Le pseudo existe déjà</p>';
        }
    }

    public function login(Parameter $post)
    {
        $sql = 'SELECT users.id, users.role_id, users.password, role.name FROM users INNER JOIN role ON role.id = users.role_id WHERE pseudo = ?';
        $data = $this->createQuery($sql, [$post->get('pseudo')]);
        $result = $data->fetch();
        $isPasswordValid = password_verify($post->get('password'), $result['password']);
        return [
            'result' => $result,
            'isPasswordValid' => $isPasswordValid
        ];
    }

    public function updatePassword(Parameter $post, $pseudo)
    {
        $sql = 'UPDATE users SET password = ? WHERE pseudo = ?';
        $this->createQuery($sql, [password_hash($post->get('password'), PASSWORD_BCRYPT), $pseudo]);
    }

    public function deleteAccount($pseudo)
    {
        $sql = 'DELETE FROM users WHERE pseudo = ?';
        $this->createQuery($sql, [$pseudo]);
    }

    public function deleteUser($userId)
    {
        $sql = 'DELETE FROM users WHERE id = ?';
        $this->createQuery($sql, [$userId]);
    }

}