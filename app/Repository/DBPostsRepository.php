<?php
namespace App\Repository;

use App\Http\Resources\PostCollection;
use App\Models\User;
use App\Traits\helpers;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\PostResources;
use App\RepositoryInterface\PostsRepositoryInterface;

class DBPostsRepository implements PostsRepositoryInterface
{
    use helpers;

    public function getPostsAndUsersData()
    {
       $user = User::where('id',Auth::id())->with('posts')->get();
    //  $data =new PostResources($user);
      // $data =PostResources::collection($user);
     $data = PostResources::collection($user);

       return $this->apiResponse($data);
    }
}
