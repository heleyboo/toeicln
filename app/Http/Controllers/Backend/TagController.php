<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Repositories\TagRepository;
use \App\Http\Controllers\Controller;

class TagController extends Controller
{
    protected $tag;

    public function __construct(TagRepository $tag)
    {
        $this->tag = $tag;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $tags = $this->tag->all();
        return view('backend.tags.index', compact('tags'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TagRequest  $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(TagRequest $request)
    {
        $this->tag->store($request->all());
        return redirect()->route('backend_tag_index');
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $this->tag->update($id, $request->except('tag'));
        return redirect()->route('backend_tag_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        $this->tag->destroy($id);

        return redirect()->route('backend_tag_index');
    }
}
