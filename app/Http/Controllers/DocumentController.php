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

    public function GetSharedDocument() {

    }
    public function DeleteDocument() {

    }
    public function UpdateDocment() {

    }
    public function ShareDocument() {

    }

}
