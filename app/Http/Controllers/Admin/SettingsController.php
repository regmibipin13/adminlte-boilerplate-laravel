<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Plank\Mediable\Facades\MediaUploader;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::all();
        return view('admin.settings.index',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sanitized = $request->validate([
            'name' => 'required | unique:settings',
            'value' => 'nullable',
            'type' => 'required',
            'label' => 'required',
        ]);
        Setting::create($sanitized);
        flash('Settings Created Successfully')->success();
        return redirect()->back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updateAll(Request $request)
    {
        $data = $request->except(['_token']);
        foreach($data as $key => $value) {
            if($request->hasFile($key)) {
                $media = MediaUploader::fromSource($request->file($key))->upload();
                Setting::where('name',$key)->update(['value'=>$media->getUrl()]);
            } else {
                Setting::where('name',$key)->update(['value'=>$value]);
            }
        }
        flash('Settings Updated Successfully')->success();
        return redirect()->back();
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        flash('Setting Deleted Successfully')->success();
        return redirect()->back();
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        Setting::find($request->id)->delete();
        flash('Setting Deleted Successfully')->success();
        return redirect()->back();
    }
}
