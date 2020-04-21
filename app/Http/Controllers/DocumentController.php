<?php

namespace App\Http\Controllers;

use App\Model\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    //
    public function GetAllDocument() {
        $id = Auth::id();
        $document =  Document::where('created_by', $id)->paginate(25);

        return view('Document.allDocument', ['documents'=>$document]);

    }

    public function UploadDocument() {
        return view('Document.uploadDocument');

    }
    public function  DoUploadFile(Request $request) {
        $file = $request->file('file');
        $doc = new Document();
        $doc->name = $file->getClientOriginalName();
        if($request->link=='')
        {
            $doc->link = '/Uploads/'.   $doc->name;
        }
        else{
            $doc->link = $request->link;
        }

        $doc->created_by= Auth::id();
        $doc->isPublic = $request->status;

        $doc->save();
//        echo $file->getFilename();
//        $file->move('Uploads', $file->getClientOriginalName());
        $this->SaveDocument($file);
        return back()->with('status', 'Upload File Successfully');

    }
    private  function SaveDocument($file) {
        $file->move('Uploads', $file->getClientOriginalName());
        return;

    }
    public function DeleteDocument() {

    }
    public function UpdateDocment() {

    }
    public function ShareDocument() {

    }

}
