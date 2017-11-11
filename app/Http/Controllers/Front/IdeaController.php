<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\IdeaRepository;

class IdeaController extends Controller
{
    protected $ideaRepository;

    public function __construct(IdeaRepository $ideaRepository)
    {
    	$this->ideaRepository = $ideaRepository;
    }

    public function index()
    {
    	$idea = $this->ideaRepository->getIdea();

    	return view('idea', compact('idea'));
    }
}
