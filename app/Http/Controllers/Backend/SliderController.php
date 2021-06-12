<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Backend;
use \App\Http\Controllers\Controller;
use App\Repositories\SliderRepository;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;

/**
 * Description of SettingController
 *
 * @author hoan
 */
class SliderController extends Controller {
    protected $slider;
    public function __construct(
        SliderRepository $slider
    ) 
    {
        $this->slider = $slider;
    }

    public function index() 
    {
        $sliders = $this->slider->all();
        return view('backend.sliders.index', compact('sliders'));
    }

    public function create(SliderRequest $request)
    {
        $path = $request->file('img_path')->store('sliders');
        $this->slider->store(['img_path' => '/storage/' . $path]);
        return redirect()->route('backend_sliders');
    }
    public function delete($id)
    {
        $this->slider->destroy($id);
        return redirect()->route('backend_sliders');
    }
}
