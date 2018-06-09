<?php

/**
 * CRUD -> Create Read Update Delete
 */

require_once('model/Article.php');

class ArticleDao
{

    public function findAll()
    {
        //TODO: Faire une requête en BD (SELECT * FROM article) et de converir ces données en un tableau d'objets Article
        $articles = array();
        array_push($articles, new Article('1', 'Titre 1', 'Content 1', '2018-06-09'));
        array_push($articles, new Article('2', 'Titre 2', 'Content 2', '2018-06-09'));
        return $articles;
    }

    public function findById($articleId)
    {
        //TODO: SELECT * FROM article WHERE id = $articleId
    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

}
