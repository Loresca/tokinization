<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Supports\Facades\Auth;
use Illuminate\Support\Str;
use Illimunate\Support\Facades\Validator;
use App\Models\User;
use Flash;
use Response;

class MLController extends Controller {
    public $successStatus = 200;

    public function getAllMLController(Request $request) {
        $token = $request['t']; // t = token
        $userid= $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token' , $token)->first();

        if ($user != null) {
            $post = Posts::all();

            return response()->json($post, $this->sucessStatus);
        } else {
            return response()->json(['response'=> 'Bad Call'], 501);
        }
    }

    public function getMLStat(Request $request) {
        $id = $request['pid']; // pid = post id 
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token' , $token)->first();

        if ($user != null) {
            $post = Posts::where('id , $id')->first();

            if ($post != null) {
                return response()->json($post, $this->sucessStatus);
            } else {
                return response()->json(['reponse'=> 'Post not found!'], 404);
            }
        } else {
            return response()->json(['response'=> 'Bad Call'], 501);
        }


        public function searchMLStat(Request $request) {
            $id = $params['p']; // p = params 
            $token = $request['t']; // t = token
            $userid = $request['u']; // u = userid
    
            $user = User::where('id', $userid)->where('remember_token' , $token)->first();
    
            if ($user != null) {
                $post = Posts::where('description', 'LIKE' '%' . $params . '%')
                    ->orWhere('title', 'LIKE' '%' . $params . '%')
                    ->get();
                // SELECT * FROM posts WHERE description LIKE '%params' OR title LIKE '%params' 
                if ($post != null) {
                    return response()->json($post, $this->sucessStatus);
                } else {
                    return response()->json(['reponse'=> 'Post not found!'], 404);
                }
            } else {
                return response()->json(['response'=> 'Bad Call'], 501);
            } 
        }
    }
}
    
    
    





