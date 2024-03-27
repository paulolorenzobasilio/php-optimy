<?php
namespace App\Utils;

class CommentManager
{
	public function listComments()
	{
		$db = (new DB())::getInstance();
		$rows = $db->select('SELECT * FROM `comment`');

		$comments = [];
		foreach($rows as $row) {
			$comments[] = $row;
		}

		return $comments;
	}
}