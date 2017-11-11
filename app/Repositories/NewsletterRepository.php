<?php

namespace App\Repositories;

use App\Models\NewsletterFollower;

/**
* 
*/
class NewsletterRepository
{
	
	function __construct(NewsletterFollower $newsletterFollower)
	{
		$this->newsletterFollower = $newsletterFollower;
	}

	public function store(Array $inputs)
	{
		$this->newsletterFollower->fill($inputs)->save();

		return $this->newsletterFollower;
	}
}