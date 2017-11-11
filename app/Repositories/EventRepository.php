<?php

namespace App\Repositories;

use App\Models\Event;
use Illuminate\Support\Facades\Storage;

/**
* 
*/
class EventRepository
{

	protected $event;
	
	function __construct(Event $event)
	{
		$this->event = $event;
	}

	public function getById($id)
	{
		return $this->event->findOrFail($id);
	}

	public function getEvents()
	{
		return $this->event->orderByDesc('id')->get();

	}

	public function storeWithPicture(Array $inputs)
	{
		$this->event->fill($inputs);

		$picture = $inputs['picture'];
		$picture_ext = $picture->guessClientExtension();

		$target_name = 'event_of_'.$this->event->day.'_'.$this->event->month.'_'.$this->event->year.'.'.$picture_ext;
		
		$picture->storeAs('public', $target_name);
		
		$this->event->path_to_hero_picture = Storage::url($target_name);
		$this->event->save();
	}

	public function updateWithPicture(Array $inputs, $id)
	{
		$event = $this->getById($id);
		$event->fill($inputs);
		$event->save();

		$picture = $inputs['picture'];
		$picture_ext = $picture->guessClientExtension();

		$target_name = 'event_'.$event->id.'_of_'.$event->day.'_'.$event->month.'_'.$event->year.'.'.$picture_ext;
		
		$picture->storeAs('public', $target_name);
		
		$event->path_to_hero_picture = Storage::url($target_name);
		$event->save();
	}

	public function destroy($id)
	{
		$this->event->findOrFail($id)->delete();
	}

}