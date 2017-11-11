<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeammemberCreateRequest;
use App\Http\Requests\TeammemberUpdateRequest;
use App\Repositories\TeammemberRepository;

class TeammemberController extends Controller
{

    protected $teammemberRepository;

    public function __construct(TeammemberRepository $teammemberRepository)
    {
        $this->teammemberRepository = $teammemberRepository;

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teammembers = $this->teammemberRepository->getTeammembers();

        return view('admin.teammember.index', compact('teammembers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teammember.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeammemberCreateRequest $request)
    {
        $this->teammemberRepository->store($request->all());

        return redirect()->route('teammember.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teammember = $this->teammemberRepository->getById($id);

        return view('admin.teammember.edit', compact('teammember'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeammemberUpdateRequest $request, $id)
    {
        if($request->hasFile('picture'))
        {
            $this->teammemberRepository->updateWithPicture($request->all(), $id);
        }
        else
        {
            $teammember = $this->teammemberRepository->updateWithoutPicture($request->all(), $id);
        }

        return redirect()->route('teammember.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->teammemberRepository->destroy($id);

        return back();
    }
}
