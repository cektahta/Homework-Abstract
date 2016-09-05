<?php
namespace Page;
use Page\Page;

abstract class AbsNotepad
{
    protected $pages;

    abstract public function addText($number,$text);
    abstract public function changeText($number ,$text);
    abstract public function deleteText($number);
    abstract public function seePages();
    abstract public function searchForWord($word);
    abstract public function printDigitPages();




}