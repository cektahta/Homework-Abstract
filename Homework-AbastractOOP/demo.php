<?php
require_once 'autoloading.php';

use Page\Page;
use Page\SimpleNotepad;
use Page\AbsNotepad;





$page1 = new Page('SomeTitle','SomeText');
$page2 = new Page('NewTitle','ANother Random Text');

$notepad = new SimpleNotepad();

$notepad->addPage($page1);
$notepad->addPage($page2);
$notepad->changeText(1,'We are all doomed to die by the sword of false religion morality');

print_r($notepad->seePages());




echo $page1->getInfo();