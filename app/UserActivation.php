<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;
class UserActivation extends Model
{
    protected $table = 'user_activations';

    protected function getToken()
    {
        return hash_hmac('sha256', Str::random(30),config('app.key'));
    }

    public function createActivation($user)
    {
        $activation = $this->getActivation($user);

        if(!$activation){
            return $this->createToken($user);
        }
        return $this->regenerateToken($user);
    }

    private function regenerateToken($user)
    {

        $token = $this->getToken();
        UserActivation::where('id', $user->id)->update([
            'token' => $token,
            'created_at' => new Carbon()
        ]);
        return $token;
    }

    private function createToken($user)
    {
        $token = $this->getToken();
        UserActivation::insert([
            'id' => $user->id,
            'token' => $token,
            'created_at' => new Carbon()
        ]);
        return $token;
    }

    public function getActivation($user)
    {
        return UserActivation::where('id', $user->id)->first();
    }

    public function getActivationByToken($token)
    {
        return UserActivation::where('token', $token)->first();
    }

    public function deleteActivation($token)
    {
        UserActivation::where('token', $token)->delete();
    }
}