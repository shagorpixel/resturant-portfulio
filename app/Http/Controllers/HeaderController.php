<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $header = Header::all()->first();
       return view('backend.header.index',compact('header'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Header $header)
    {
        $image_name = "";

        if($image = request()->file("image")){
            $image_name = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('img',$image_name );
            $oldImage = 'img/'.$header->image;

            if($header->image != null || $header->image != ""){
                if(file_exists($oldImage)){
                    unlink($oldImage);
                }
            }
        }else{
            $image_name = $header->image;
        }

        $data = [
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'image' =>$image_name
        ];
        $header->update($data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Header $header)
    {
        //
    }
}
