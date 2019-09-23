<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Login extends Model{
    static function index($name,$password){
        //用户登录
        $db=DB::table('user')
            ->where('name',$name)
            ->where('password',$password)
            ->value('id');
        if(empty($db)){
            return 0;
        }else{
            
            return ['1',$db];
        }
    }


}