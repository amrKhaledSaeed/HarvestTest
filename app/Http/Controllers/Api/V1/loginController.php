<?php

namespace App\Http\Controllers\Api\V1;

use App\Traits\helpers;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\loginResource;

class loginController extends Controller
{
    use helpers;

    public function login(LoginRequest $request)
        {
            $credentials =$request->only(['email','password']);

            if(!$token = auth()->guard('api')->attempt($credentials))
            {
                return $this->apiResponse(['message' => 'Unauthorize']);
            }

            return $this->respondWithToken($token);
        }

        public function logout()
        {
            auth()->logout();
            return $this->apiResponse(['message' => 'Successfully logged out'], 200);
        }

        protected function respondWithToken($token)
        {

            $user = auth()->guard('api')->user();
            $data = new loginResource($user);

            return $this->apiResponse(['user'=>$data,'token'=>$token]);
        }




}
