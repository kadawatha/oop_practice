<?php

class User extends Dbh{


	public function getAllUsers(){

		$stmt=$this->connect()->query("select*from books");
		while ($row=$stmt->fetch()){

			echo $uid=$row['title'];
			return $uid;

		}


	}

public  function getUserWithCountCheck(){

	$id=2;
	$uid="fake_book";

	$stmt=$this->connect()->prepare("select*from books where book_id=? and 	title=?");

	$stmt->execute([$id,$uid]);

	if($stmt->rowCount()){




	while ($row=$stmt->fetch()){
		return $row['title'];
	}



	}


}


}





































