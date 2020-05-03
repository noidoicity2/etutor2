<?php

namespace App\Http\Controllers;

use App\Model\Comment;
use App\Model\Document;
use App\Model\DocumentShare;
use App\Model\Email;
use App\Model\TutorRegistration;
use App\User;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DocumentController extends Controller
{
    //
    public function GetAllDocument()
    {
        $id = Auth::id();
        $document = Document::where('created_by', $id)->paginate(25);

        return view('Document.allDocument', ['documents' => $document]);

    }

    public function UploadDocument()
    {
        return view('Document.uploadDocument');

    }

    public function DoUploadFile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'max:200000|mimes:doc,docx,xml,xls,jpg,jpeg,pdf|required',
            'status'=>'required'
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        $file = $request->file('file');
        $doc = new Document();
        $doc->name = $file->getClientOriginalName();
        if ($request->link == '') {
            $doc->link = '/Uploads/' . $doc->name;
        } else {
            $doc->link = $request->link;
        }

        $doc->created_by = Auth::id();
        $doc->isPublic = $request->status;

        $doc->save();
//        echo $file->getFilename();
//        $file->move('Uploads', $file->getClientOriginalName());
        $this->SaveDocument($file);
        return back()->with('status', 'Upload File Successfully');

    }

    private function SaveDocument($file)
    {
        $file->move('Uploads', $file->getClientOriginalName());
        return;

    }

    public function Details($id)
    {
        $file = Document::find($id);
        if($file==null) return abort(404);
        if($file->isPublic==0){
            if(Auth::id()!= $file->created_by) {
                $f = DocumentShare::where('document_id',$id)->where('user_id','=', Auth::id())->get();
                if($f->count()==0) return abort(401,'unauthorized') ;
            }
        }
        $cmt = Comment::where('document_id', $id)->get();
//        return $id;
        return view('Document.documentDetail', ['file' => $file, 'cmts' => $cmt]);
//        return $cmt;

    }

    public function Download($id)
    {
        $query = Document::find($id);
//        $contents = Storage::get($query->link);
        $file = public_path() . $query->link;


        return response()->download($file);

    }

    public function DeleteDocument()
    {

    }

    public function UpdateDocment()
    {

    }

    public function ShareDocument($id)
    {
        $doc = Document::find($id);
        if (Auth::user()->role_id != 3) return abort('403','unauthorized');

        $tutees = TutorRegistration::where('tutor_id', Auth::id())->withCount('SharedDocument')->whereDoesntHave('SharedDocument', function (Builder $query) use ($id) {
            $query->where('document_id', '=', $id);
        })->paginate(25);
        $countShared = DocumentShare::where('document_id', $id)->count();


        return view('Document.DocumenttShare', ['tutees' => $tutees, 'doc' => $doc, 'countShared' => $countShared]);
//        return $tutees;


    }

    public function DoShare(Request $request)
    {
        $id = $request->id;

        $arr = $request->arr;
        foreach ($arr as $ar) {
            $share = new DocumentShare();
            $share->document_id = $id;
            $share->user_id = $ar;

            $share->save();

//
//            $email = new Email();
//            $email2 = new Email();
//            //email to tutor
//            $email->title = 'You have been allocated to a student  successfully';
//            $email->content = 'You have been allocated to student id#' . $ar . '  success fully';
//            $email->to_user = $id;
////            emai to student
//            $email2->title = 'You have been allocated to a tutor  successfully';
//            $email2->content = 'You have been allocated to tutor id#' . $id . '  success fully';
//            $email2->to_user = $ar;
//
//            $email->save();
//            $email2->save();

        }
        return json_encode(['success' => true, 'msg' => 'share document    successfully']);


    }

    public function getSharedFile()
    {
        $id = Auth::id();
        $doc = DocumentShare::where('user_id', $id)->paginate(25);
        return view('Document.SharedDocument', ['documents' => $doc]);
    }

    public function Comment(Request $request)
    {
        $id = Auth::id();
        $cmt = new Comment();

        $cmt->user_id = $id;
        $cmt->comment = $request->comment;
        $cmt->document_id = $request->document_id;

        $cmt->save();
        return json_encode(['success' => true]);


    }

    public function getPublicDoc($id)
    {
        $doc = Document::where('created_by',$id)->where('isPublic', '=',1)->paginate(25);

        return view ('Document.viewPublicDoc', ['documents'=>$doc]);


    }
    public function getSharedDoc($id)
    {
        $doc = DocumentShare::where('user_id',$id)->paginate(25);

        return view ('Document.viewShareDoc', ['documents'=>$doc]);


    }


}
