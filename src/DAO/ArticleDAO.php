<?php
namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Article;

class ArticleDAO extends DAO
{
    private function buildObject($row)
    {
        $article = new Article();
        $article->setId($row['id']);
        $article->setTitle($row['title']);
        $article->setChapo($row['chapo']);
        $article->setContent($row['content']);
        $article->setAuthor($row['pseudo']);
        $article->setCreatedAt($row['createdAt']);
        $article->setEditAt($row['editAt']);
        $article->setImg($row['img']);
        $article->setBg($row['bg']);

        return $article;
    }
    public function getArticles()
    {
        $sql = 'SELECT article.id, article.title, article.content, article.chapo, user.pseudo, article.createdAt, article.editAt, article.img, article.bg FROM article INNER JOIN user ON article.user_id = user.id ORDER BY article.id DESC';
        $result = $this->createQuery($sql);
        $articles =[];
        foreach ($result as $row)
        {
            $articleId = $row['id'];
            $articles[$articleId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $articles;
    }

    public function getArticle($articleId)
    {
        $sql = 'SELECT article.id, article.title, article.content, article.chapo, user.pseudo, article.createdAt, article.editAt, article.img, article.bg FROM article INNER JOIN user ON article.user_id = user.id WHERE article.id = ?';
        $result = $this->createQuery($sql, [$articleId]);

        $article = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($article);
    }

    public function addArticle(Parameter $post, $userId)
    {

        $uploads_dir = 'img/';

        $imgName = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], "$uploads_dir.$imgName");
        $img = "$uploads_dir.$imgName";

        $bgName = $_FILES['bg']['name'];
        move_uploaded_file($_FILES['bg']['tmp_name'], "$uploads_dir.$bgName");
        $bg = "$uploads_dir.$bgName";

        $sql = 'INSERT INTO article (title, content, createdAt, user_id, chapo, editAt, img, bg) VALUES (?,?, NOW(), ?, ?, null, ?, ?)';
        $this->createQuery($sql,[
            $post->get('title'),
            $post->get('content'),
            $userId,
            $post->get('chapo'),
            $img,
            $bg
        ]);
    }

    public function editArticle(Parameter $post, $articleId, $userId)
    {
        $uploads_dir = 'img/';

        $imgName = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], "$uploads_dir.$imgName");
        $img = "$uploads_dir.$imgName";

        $bgName = $_FILES['bg']['name'];
        move_uploaded_file($_FILES['bg']['tmp_name'], "$uploads_dir.$bgName");
        $bg = "$uploads_dir.$bgName";

        $sql = 'UPDATE article SET title = :title, content = :content, chapo = :chapo, editAt = NOW(), user_id = :user_id, img = :img, bg = :bg WHERE id = :articleId';
        $this->createQuery($sql, [
            'title' => $post->get('title'),
            'content' => $post->get('content'),
            'chapo' => $post->get('chapo'),
            'user_id' => $userId,
            'img' => $img,
            'bg' => $bg,
            'articleId' => $articleId
        ]);
    }

    public function deleteArticle($articleId)
    {

        $sql = 'DELETE FROM comment WHERE article_id = ?';
        $this->createQuery($sql, [$articleId]);

        $sql = 'DELETE FROM article WHERE id = ?';
        $this->createQuery($sql, [$articleId]);
    }
}