<?php

$xml=simplexml_load_file('Book.xml');
echo "<h2>Book Description<h2>";
echo "<br>";
$list=$xml->book;
for($i=0;$i<count($list);$i++){
    echo "book's name is :".$list[$i]->title."<br>";
    echo "book's author is :".$list[$i]->author."<br>";
    echo "book's price is :".$list[$i]->price."<br>";
    echo "book's publication is :".$list[$i]->publication."<br>";
    echo "<br>";
    

}
?>