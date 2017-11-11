<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\EventRepository;

class EventController extends Controller
{
    protected $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
    	$this->eventRepository = $eventRepository;
    }

    public function index()
    {
    	$events = $this->eventRepository->getEvents();

    	return view('events-list', compact('events'));
    }

    public function showEvent($id)
    {
        $event = $this->eventRepository->getById($id);

        return view('event', compact('event'));
    }
}
