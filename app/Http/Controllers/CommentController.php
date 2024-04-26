<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'listing_id' => 'required|exists:listings,id',
            'user_id' => 'required|exists:users,id',
            'body' => 'required|string',
        ]);

        // Create a new comment
        $comment = new Comment();
        $comment->listing_id = $request->listing_id;
        $comment->user_id = $request->user_id;
        $comment->body = $request->body;
        $comment->save();

        // Redirect back with a success message
        return back()->with('success', 'Comment submitted successfully!');
    }
}
