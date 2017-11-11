<?php

namespace App\Repositories;

use App\Models\Idea;

class IdeaRepository
{
	protected $idea;

	function __construct(Idea $idea)
	{
		$this->idea = $idea;
	}

	public function store(Array $inputs)
	{
		$this->idea->content = $inputs['content'];

		$this->idea->save();

		return $this->idea;
	}

	public function getIdea()
	{
		return $this->idea->first();
	}

	public function update($id, Array $inputs)
	{
		$idea = $this->idea->findOrFail($id);

		$idea->fill($inputs);

		$idea->save();
	}

	public function destroy($id)
	{
		$this->getIdea()->delete();
	}
}