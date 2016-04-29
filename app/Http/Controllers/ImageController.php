<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

use App\Http\Requests;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::orderBy('created_at', 'desc')->get();
        return view('admin/image/index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/image/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img=$this->ImageUpload($request->img_path);
        $imgData = new Image();
        $imgData->img_path = $img;
        $imgData->img_caption = $request->img_caption;
        $imgData->extension =$request->img_path->getClientOriginalExtension();
        $imgData->save();
        return redirect('imageupload');


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
    public function destroy($id)
    {
        $deleteImage = Image::find( $id );
        $deleteImage->delete();
        return redirect('/imageupload');

    }
    public function ImageUpload($image)
    {
        $extension =$image->getClientOriginalExtension();//get image extension only
        $extensionArray = array("jpg", "jpeg", "png", "gif");

        $path="image";
        if(in_array($extension, $extensionArray)){
            $imageOriginalName=$image->getClientOriginalName();//get image full name
            $basename = substr($imageOriginalName, 0 , strrpos($imageOriginalName, "."));//get image name without extension
            $imageName=$basename.date("YmdHis").'.'.$extension;//make new name

            $imageMoved=$image->move($path, $imageName);
            if($imageMoved)
            {
                $imagePath=$path.'/'.$imageName;
                return $imagePath;
            }

        }
        else{
            return "Please insert image";
        }
    }
}
