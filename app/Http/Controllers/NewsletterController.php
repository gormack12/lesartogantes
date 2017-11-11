<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterFollowerCreateRequest;
use App\Repositories\NewsletterRepository;
use App\Mail\Newsletters\Welcome;

class NewsletterController extends Controller
{
    protected $newsletterRepository;

    public function __construct(NewsletterRepository $newsletterRepository)
    {
    	$this->newsletterRepository = $newsletterRepository;
    }

    public function store(NewsletterFollowerCreateRequest $request)
    {
    	$newsletterFollower = $this->newsletterRepository->store($request->all());

    	\Mail::to($newsletterFollower)->send(new Welcome);

    	return back();
    }
}
