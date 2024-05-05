<?php


function get_all_books($conn){
    $sql = "SELECT * FROM books ORDER bY id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

   if ($stmt->rowCount() > 0) {
    $books = $stmt->fetchAll();
   }else {
    $books = 0;
   }

   return $books;
}
?>