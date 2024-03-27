<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name:"comment")]
class Comment
{
	#[ORM\Id]
	#[ORM\Column(type:"integer")]
	#[ORM\GeneratedValue]
	private int|null $id = null;

	#[ORM\Column(type:"string")]
	private string $body;

	#[ORM\Column(type:"datetime", name:"created_at")]
	private \DateTime $createdAt; 

	#[ORM\Column(type:"integer")]
	private int|null $newsId;

	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	public function getId()
	{
		return $this->id;
	}
	public function setBody($body)
	{
		$this->body = $body;

		return $this;
	}

	public function getBody()
	{
		return $this->body;
	}

	public function setCreatedAt($createdAt)
	{
		$this->createdAt = $createdAt;

		return $this;
	}

	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	public function getNewsId()
	{
		return $this->newsId;
	}

	public function setNewsId($newsId)
	{
		$this->newsId = $newsId;

		return $this;
	}
}