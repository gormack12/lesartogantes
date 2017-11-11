<?php

namespace App\Repositories;

use App\Models\Teammember;
use Illuminate\Support\Facades\Storage;

/**
* gestion des membres de l'équipe.
*/

class TeammemberRepository
{
	
	protected $teammember;

	function __construct(Teammember $teammember)
	{
		$this->teammember = $teammember;
	}

	public function getTeammembers()
	{
		return $this->teammember->all();
	}

	public function getTeammember($id)
	{
		return $this->getById($id);
	}

	public function store(Array $inputs)
	{
		$teammember = new $this->teammember;

		$teammember->fill($inputs);

		$teammember_picture = $inputs['picture'];

		$picture = $inputs['picture'];
		$ext = $picture->guessClientExtension();
		$picture_target_name = $teammember->firstname . '.' . $ext;

		$picture->storeAs('public', $picture_target_name);
		
		$teammember->path_to_picture = Storage::url($picture_target_name);
		$teammember->save();
	}

	public function updateWithPicture(Array $inputs, $id)
	{
		$teammember = $this->getById($id);

		$teammember->fill($inputs);

		$teammember_picture = $inputs['picture'];

		$picture = $inputs['picture'];
		$ext = $picture->guessClientExtension();
		$picture_target_name = $teammember->firstname . '.' . $ext;

		$picture->storeAs('public', $picture_target_name);
		
		$teammember->path_to_picture = Storage::url($picture_target_name);
		$teammember->save();
	}

	public function updateWithoutPicture(Array $inputs, $id)
	{
		$teammember = $this->getById($id);
		$teammember->fill($inputs);
		$teammember->save();
	}

	public function destroy($id)
	{
		$teammember = $this->getById($id);

		$teammember->delete();

	}

	public function getById($id)
	{
		return $this->teammember->findOrFail($id);
	}
}