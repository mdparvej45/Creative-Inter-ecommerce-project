<?php

namespace App\Http\Controllers\frontend;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
class CommentController extends Controller
{
    //Comment method
    public function createComment(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required',
            'raitings'=> 'required',
        ]);
       $user = Auth::user();
        $comment = new Comment();
        $comment->user_id = $user->id;
        $comment->product_id = $id;
        $comment->comment = $request->comment;
        $comment->save();
        $rating = new Review();
        $rating->user_id = $user->id;
        $rating->product_id = $id;
        $rating->comment_id  = $comment->id;
        $rating->ratings  = $request->raitings;
        $rating->save();
        return back();
    }
    //Reply comment method
    public function createReplyComment(Request $request, $id)
    {
        $request->validate([
            'reply' => 'required',
        ]);
        $user = Auth::user();
        $reply = new Comment();
        $reply->user_id = $user->id;
        $reply->parent_id = $id;
        $reply->comment = $request->reply;
        $reply->save();
        return back();

    }
}
