<?php

namespace App\Http\Controllers;



use App\Model\Email;
use Illuminate\Http\Request;
use App\Model\TutorRegistration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RequestController extends Controller
{
    //
    public function sendRequest()
    {

    }

    public function newRequest()
    {
        $id =Auth::id();
        $tutor = TutorRegistration::where('student_id', $id )->with('tutor')->first();


        return view('Request.newRequest', ['tutor'=>$tutor]);

    }
    public function doCreateRequest(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:6|max:50',
            'content'=>'required'
        ]);
        if ($validator->fails()) {
            $errorString = implode(",",$validator->messages()->all());

            return json_encode(['success'=>true, 'msg'=> $errorString]);
        }

       $req = new \App\Model\Request();
       $req->name = $request->get('name');
       $req->content = $request->get('content');
       $req->from_user =  Auth::id();
       $req->to_user =  $request->get('to_user');

       $req->save();

        $email = new Email();
        //email to tutor
        $email->title = 'You have new request';
        $email->content = 'Student id#' .  Auth::id() . '  send you a request';
        $email->to_user =  $request->get('to_user');;
        $email->save();

       return json_encode(['success'=>true, 'msg'=>'Send request successfully']);
    }

    public function replyRequest()
    {

    }

    public function AllRequest()
    {
        $id = Auth::id();
        $requests = \App\Model\Request::where('to_user', $id)->orderBy('created_at', 'desc')->paginate(20);
        return view('Request.getRequestTutee', ['requests' => $requests]);
    }

    public function getMyRequest()
    {
        $id = Auth::id();
        $requests = \App\Model\Request::where('from_user', $id)->orderBy('created_at', 'desc')->paginate(20);
        return view('Request.getMyRequest', ['requests' => $requests]);
    }
    public function viewRequest($id)
    {
//        $id = Auth::id();
        $request = \App\Model\Request::find($id);
        return view('Request.viewRequest', ['request' => $request]);
    }
    public function viewResponse($id)
    {
//        $id = Auth::id();
        $request = \App\Model\Request::find($id);
        return view('Request.viewResponse', ['request' => $request]);
    }
    public function createResponse($id)
    {
//        $id = Auth::id();
        $request = \App\Model\Request::find($id);

        return view('Request.Response', ['request' => $request]);
    }
    public function doResponse(Request $request)
    {
//        $id = Auth::id();
        $id=  $request->id;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date =date('Y-m-d H:i:s');
        $req = \App\Model\Request::find($id);
        $req->response = $request->response;
        $req->replied_at = $date;
        $req->status = 'replied';
        $req->save();

        return json_encode(['success'=>true, 'msg'=>'send response successfully']);
    }

}
