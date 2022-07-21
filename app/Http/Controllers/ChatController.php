<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Models\Chat;
use App\Repositories\ChatRepository;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __construct(ChatRepository $chat)
    {
        $this->chat = $chat;
    }
    public function sendMessage(Request $request){
    $data = $request->except('_token','file');
    $user_id = $request->user_id;
    $my_id = $request->my_id;
    $data['type'] = 'text';
    if($request->hasFile('file')){
        $data['file'] = uploadImageStoragePublic($request->file, 'chat');
    }
    $data['receive_by'] = $user_id;
    $data['send_by'] =  $my_id;
    if($output =$this->chat->create($data)){
        $this->chat->chatNotification($user_id,$output);
        event (new ChatEvent($data,$user_id));
        $messages = $this->getAllMessage($my_id);
        $html = view('chat.message-list', compact('messages'))->render();
      return response()->json(['success'=>true,'html'=>$html],200);
    }
    return response()->json(['success'=>false],400);
    }

    public function getMessages(Request $request){
        $user_id = request()->get('user_id');
        $my_id = request()->get('my_id');
         $messages = $this->getAllMessage($my_id);
        $html = view('chat.message-list', compact('messages'))->render();
    return response()->json(['success'=>true,'html'=>$html],200);
    }

    public function getAllMessage($my_id){
        return $this->chat->getChat($my_id);
    }

}
