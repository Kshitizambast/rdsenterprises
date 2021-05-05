<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;

class ThemeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files.fileupload');
    }
  
    /**X
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'slider_images' => 'required',
                'slider_images.*' => 'image'
        ]);
  
        $files = [];
        if($request->hasfile('slider_images'))
         {
            foreach($request->file('slider_images') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('files'), $name);  
                $files[] = $name;  
            }
         }
  
         $file= new Theme();
         $file->filenames = $files;
         $file->save();
   
  
        return back()->with('success', 'Data Your files has been successfully added');
    }
}
