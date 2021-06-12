<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Backend;
use \App\Http\Controllers\Controller;
use App\Repositories\SettingRepository ;
use Illuminate\Http\Request;
use App\Setting;

/**
 * Description of SettingController
 *
 * @author hoan
 */
class SettingController extends Controller{
    protected $settingRepository;
    public function __construct(
        SettingRepository $settingRepository
    ) 
    {
        $this->settingRepository = $settingRepository;
    }

    public function index() 
    {
        $settings = $this->settingRepository->page();
        return view('backend.settings.index', compact('settings'));
    }

    public function update(Request $request, $settingId)
    {
        $this->settingRepository->update($settingId, $request->all());
        return redirect()->route('backend_setting_index');
    }

    public function create(Request $request)
    {
        $this->settingRepository->store($request->all());
        return redirect()->route('backend_setting_index');
    }
    public function set(Request $request, $value)
    {
        Setting::where('setting_id', 'home_page')->update(['value' => $value]);
        return redirect()->route('backend_setting_index');
    }
}
