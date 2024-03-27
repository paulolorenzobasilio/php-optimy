<?php

namespace App\Utils;

use App\Utils\DB;

class NewsManager
{
	public function listNews()
	{
		$db = (new DB())::getInstance();
		$rows = $db->select('SELECT * FROM `news`');

		foreach($rows as $row){
			$news [] = $row;
		}
		return $news;
	}
}