<?php


class ViewUser extends User{


	public function showAllUsers(){

	$datas = $this->getAllUsers();
	foreach ($datas as $data)
	{
		echo $data['title'].'<br>';
		echo $data['author_fname'].'<br>';
	}

	}


}





























































































