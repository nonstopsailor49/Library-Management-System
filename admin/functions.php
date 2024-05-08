<?php
    //for users
    function get_user_count(){
        $connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library_mgmt");
        $user_count="";
		$query ="select count(*) as user_count from users";
		$query_run = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            $user_count= $row['user_count'];
        }
        return($user_count);
    }

    //for books
    function get_book_count(){
        $connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library_mgmt");
        $book_count="";
		$query ="select count(*) as book_count from books";
		$query_run = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            $book_count= $row['book_count'];
        }
        return($book_count);
    }

    //for category
    function get_category_count(){
        $connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library_mgmt");
        $category_count="";
		$query ="select count(*) as category_count from category";
		$query_run = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            $category_count= $row['category_count'];
        }
        return($category_count);
    }

    //for author
    function get_author_count(){
        $connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library_mgmt");
        $author_count="";
		$query ="select count(*) as author_count from authors";
		$query_run = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            $author_count= $row['author_count'];
        }
        return($author_count);
    }

    //for issued books
    function get_issued_book_count(){
        $connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library_mgmt");
        $issued_book_count="";
		$query ="select count(*) as issued_book_count from issued_books";
		$query_run = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            $issued_book_count= $row['issued_book_count'];
        }
        return($issued_book_count);
    }
?>