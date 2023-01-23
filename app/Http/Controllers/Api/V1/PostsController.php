<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\RepositoryInterface\PostsRepositoryInterface;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    private $repositoryInterface;

    public function __construct(PostsRepositoryInterface $interface)
    {
        $this->repositoryInterface=$interface;
    }

  public function getPostsAndUsersData()
  {
    return $this->repositoryInterface->getPostsAndUsersData();
  }
}
