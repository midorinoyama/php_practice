<?php
require_once "app/shop/book.php";
require_once "app/Review/book.php";

// 参照先のnamespace名をつける必要あり、スラッシュの向き注意
//$book = new app\shop\Book();

//このnamespaceを使うと宣言すれば
use app\shop\Book;

//use app\Review\Book だと同じ名前でエラーになるため名前を変更する
//use app\Review\Book as BookReview;

$book = new Book();
echo $book->getPrice()."\n";

//$book_review = new BookReview();
$book_review = new app\Review\Book();
echo $book_review->getPoint();
