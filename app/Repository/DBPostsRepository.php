<?php
namespace App\Repository;

use App\Models\User;
use App\RepositoryInterface\PostsRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class DBPostsRepository implements PostsRepositoryInterface
{
    public function getPostsAndUsersData()
    {
       return User::where('id',Auth::id())->with('posts')->get();
    }
}
