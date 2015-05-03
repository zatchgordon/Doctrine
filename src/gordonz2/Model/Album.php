<?php

namespace gordonz2\Model;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Doctrine\Common\Collections\ArrayCollection;


/**
* @ODM\Document
*/
class Album
{

	/**
	* @ODM\Id
	*/
	protected $id;

	/**
	* @ODM\String
	*/
	protected $artist = "";
	
	/**
	* @ODM\ReferenceMany(targetDocument="Track", cascade={"all"})
	*/
	protected $tracks  = array();

	/**
	* @ODM\String
	*/	
	protected $genre = "";
	
	public function __construct()
	{
		$this->tracks = new ArrayCollection();
	}
	
	public function setArtist($artist)
	{
		$this->artist = $artist;
	}
	
	public function setTrack($track)
	{
		$this->tracks[] = $track;
	}
	
	public function removeTrack($track)
	{
		$this->tracks->removeElement($track);
	}
	
	public function setGenre($genre)
	{
		$this->genre = $genre;
	}
	
	public function getArtist()
	{
		return $this->artist;
	}
	
	public function getTracks()
	{
		return $this->tracks ;
	}
	
	public function getGenre()
	{
		return $this->genre ;
	}
	
	public function getId()
	{
		return $this->id;
	}
	
}

