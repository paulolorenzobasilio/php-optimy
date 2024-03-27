<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name:"news")]
class News
{
	#[ORM\Id]
	#[ORM\Column(type:"integer")]
	#[ORM\GeneratedValue]
	private int|null $id = null;

	#[ORM\Column(type:"string")]
	private string $title; 

	#[ORM\Column(type:"string")]
	private string $body;
	#[ORM\Column(type:"datetime", name:"created_at")]
	private \DateTime $createdAt;

	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setTitle($title)
	{
		$this->title = $title;

		return $this;
	}

	public function getTitle()
	{
		return $this->title;
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
}