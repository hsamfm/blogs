<?php

namespace App\Observers;

use App\Comment;

class CommentObserver
{
    /**
     * Listen to the Comment creating event.
     */
    public function creating(Comment $comment): void
    {
        $comment->posted_at = now();
    }
}
