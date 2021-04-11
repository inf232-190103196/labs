<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Item;
use App\ItemDetails;

class UploadFileController extends Controller
{
    public function uploadForm(){
        return view('blog/create');
    } 
    public function uploadSubmit(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'photos' => 'required',
        ]);
        if($request->hasFile('photos')){
            $allowedfileExtension=['pdf', 'jpg', 'png', 'docx', 'txt'];
            $files = $request->file('photos');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);
                if($check){
                    $items = Item::create($request->all());
                    foreach ($request->photos as $photo){
                        $filename = $photo->store('photos');
                        ItemDetails::cretae([
                            'item_id' => $items->id,
                            'filename' => $filename
                        ]);
                    }
                }
            }
        }
    }
}