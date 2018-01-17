<?php

class Book
{
    private $title;
    private $author;
    private $editor;
    private $pageNb;

    public function __construct($title, $author, $editor, $pageNb)
    {
        $this->title = $title;
        $this->author = $author;
        $this->editor = $editor;
        $this->pageNb = $pageNb;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * @param mixed $editor
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;
    }

    /**
     * @return mixed
     */
    public function getPageNb()
    {
        return $this->pageNb;
    }

    /**
     * @param mixed $pageNb
     */
    public function setPageNb($pageNb)
    {
        $this->pageNb = $pageNb;
    }

    public function afficherLivre()
    {
        echo 'Le livre : ' . $this->title . ' a été écrit par ' . $this->author . ' est édité par : ' . $this->editor . ' et compte ' . $this->pageNb . ' pages.' . PHP_EOL;
    }

    function __toString()
    {
        return $this->author;
    }

}//Book()

