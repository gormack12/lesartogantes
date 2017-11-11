<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\TeammemberRepository;

class TeammemberController extends Controller
{
    protected $teammemberRepository;

	public function __construct(TeammemberRepository $teammemberRepository)
	{
		$this->teammemberRepository = $teammemberRepository;
	}

    public function index()
    {
    	$teammembers = $this->teammemberRepository->getTeammembers();

    	return view('teammembers-list', compact('teammembers'));
    }

    public function showTeammember($id)
    {
    	$teammember = $this->teammemberRepository->getTeammember($id);

    	return view('teammember', compact('teammember'));
    }
}
