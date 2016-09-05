<?php

namespace Page;

class Page
{
    protected $title;
    protected $text;

    public function __construct($title,$text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function setTitle($title)
{
    $this->title = $title;
}

    public function addText ($value) {
        $this->text = $value;
    }

    public function removeText () {
        $this->text = null;
    }

    public function getInfo() {
        echo "Title: $this->title".PHP_EOL;
        echo "Text: $this->text".PHP_EOL;
    }

    public function searchForWord($value)
    {
        $arr = [];
        $message = "The word is not here";
        $arr= explode(" ", $this->text);
        for($i = 0; $i< count($arr);$i++) {
            if ($value == $arr[$i]) {
                return "There is a word like that in the text";
            }
        }
        return $message;
    }

    public function containsDigits()
    {
        $arr = [];
        $arr= explode(" ", $this->text);
        for($i = 0; $i <count($arr); $i++) {
            if(is_numeric($arr[$i])) {
                return "There are some digits in the text";
            }
        }
        return "The page doesn't contain digits";
    }
}