<?php
class Book 
{
    public $title;
    public $author;
    public $year;
    function __construct($title, $author, $year)
    {
        
    }
    public function printData()
    {
        echo "Название: {$this->title}. Автор: {$this->author}. Год: {$this->year}<br>";
    }
}


$book = new Book();
$book2 = new Book();

$book->title = 'Тихий Дон';
$book2->title = 'Руководство пользователя бензопили echo3000';
$book->year = '1940';
$book2->year = '2025';
$book->author = 'Михаил Шолохов';
$book2->author = 'Конструкторское бюро';

$book->printData();
$book2->printData();

