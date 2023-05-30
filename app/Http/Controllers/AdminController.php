<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function store(Request $request)
    {
        $media = Admin::create([
            'name' => $request->name,
            'phone-no' => $request->phone_no,
        ])
        ->addMediaFromRequest('image')
        ->preservingOriginal()
        ->toMediaCollection();   

        // $admin = Admin::create([
        //     'name' => 'Mg Mg',
        //     'phone-no' => '09797941932'
        // ]);

        // $admin->addMedia(storage_path('app/public/123.jpg'))
        // ->preservingOriginal()
        // ->toMediaCollection();

        // $admin->addMedia(storage_path('app/public/123.jpg'))
        // ->preservingOriginal()
        // ->toMediaCollection();

        return back();
    }

    public function get()
    {
        $admin = Admin::find(8)->getMedia('images');

        dd($admin->toArray());
    }
    
    public function deleteMedia($id)
    {
        Admin::find($id)->delete();

        return 'success';
    }
}
