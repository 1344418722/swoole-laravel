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
    static function reset($name,$password){
        $id=DB::table('user')
            ->where('name',$name)
            ->value('id');
        if(empty($id)){
            return 0;
        }else{
            try{
                DB::table('user')
                    ->where('id',$id)
                    ->update(['password'=>$password]);
            }catch (Exception $e){
                return 2;

            }
            return 1;
        }

    }

}