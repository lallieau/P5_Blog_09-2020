<?php
namespace App\src\DAO;
use App\config\Parameter;
use App\src\model\Comment;

class CommentDAO extends DAO
{
    private function buildObject($row)
    {
        $comment = new Comment();
        $comment->setId($row['id']);
        $comment->setPseudo($row['pseudo']);
        $comment->setContent($row['content']);
        $comment->setCreatedAt($row['createdAt']);
        $comment->setValidation($row['validation']);

        return $comment;
    }
    public function getCommentsFromArticle($articleId)
    {
        $sql = 'SELECT id, pseudo, content, createdAt, validation FROM comment WHERE article_id = ? ORDER BY createdAt DESC';
        $result = $this->createQuery($sql,[$articleId]);
        $comments = [];

        foreach($result as $row)
        {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildObject($row);
        }

        $result->closeCursor();
        return $comments;
    }

    public function addComment(Parameter $post, $articleId)
    {
        $sql = 'INSERT INTO comment (pseudo, content, createdAt, validation, article_id) VALUES (?,?,NOW(),?,?)';
        $this->createQuery($sql, [$post->get('pseudo'), $post->get('content'), 0, $articleId]);
    }

    public function validateComment($commentId)
    {
        $sql = 'UPDATE comment SET validation = ? WHERE id = ?';
        $this->createQuery($sql, [1, $commentId]);
    }

    public function noValidateComment($commentId)
    {
        $sql = 'UPDATE comment SET validation = ? WHERE id = ?';
        $this->createQuery($sql, [0, $commentId]);
    }

    public function getValidateComments()
    {
        $sql = 'SELECT id, pseudo, content, createdAt, validation FROM comment  ORDER BY createdAt DESC';
        $result = $this->createQuery($sql);
        $comments = [];

        foreach ($result as $row)
        {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $comments;
    }

    public function deleteComment($commentId)
    {
        $sql = 'DELETE FROM comment WHERE id = ?';
        $this->createQuery($sql, [$commentId]);
    }
}
