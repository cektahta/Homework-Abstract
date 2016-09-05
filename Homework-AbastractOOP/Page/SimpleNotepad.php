<?php

namespace Page;

use Page\Page;

class SimpleNotepad extends  AbsNotepad
{
    public function __construct()
    {
        $this->pages = [];

    }
    public function addPage(Page $value)
    {
        return $this->pages[]=$value;
    }

    public function addText($number,$text)
    {
        for($i = 0;$i<count($this->pages);$i++) {
            if ($i == $number) {
                $this->pages[$number]->setText($this->pages[$number]->getText().$text);
            }
        }
    }

    public function changeText($number ,$text)
    {
        for ($i = 0;$i<count($this->pages);$i++)	{
            if ($i == $number) {
                $this->pages[$i]->setText($text);
            }
        }
    }

    public function  deleteText($number)
    {
        for($i = 0; $i < count($this->pages); $i++) {
            if ($i == $number) {
                $this->pages[$number]->setText(null);
            }
        }
    }

    public function  seePages()
    {
        foreach($this->pages as $key) {
            echo "title: ". $key->getTitle(). "text: ".$key->getText().PHP_EOL;
        }
    }
}

