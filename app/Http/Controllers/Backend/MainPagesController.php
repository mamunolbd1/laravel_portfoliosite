<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Main;

class MainPagesController extends Controller
{
    public function index()
    {
        $main = Main::first();
        // return $main = Main::first();
        return view('backend.pages.main',compact('main'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required|string',
            'sub_title'=>'required|string',
        ]);

        $main = Main::find($id);
        $main->title = $request->title;
        $main->sub_title = $request->sub_title;

        if($request->file('bg_image')){
            $img_file = $request->file('bg_image');
            $img_file->move('public/storage/img/','bg_image.'.$img_file->getClientOriginalExtension());
            $main->bg_image = 'public/storage/img/bg_image.'.$img_file->getClientOriginalExtension();
        }
        if($request->file('nav_image')){        
            $img_file = $request->file('nav_image');
            $img_file->move('public/storage/img/', 'nav_image.'.$img_file->getClientOriginalExtension());   
            $main->nav_image = 'public/storage/img/nav_image.'.$img_file->getClientOriginalExtension();
        }

        if($request->file('resume')){
            $pdf_file = $request->file('resume');
            $pdf_file->move('public/storage/pdf/', 'resume.'.$pdf_file->getClientOriginalExtension());
            $main->resume = 'public/storage/pdf/resume.'.$pdf_file->getClientOriginalExtension();
        }
        $main->save();
        return redirect()->route('admin.main')->with('success', "Main Page data has been updated successfully");
    }

}
