<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Index extends Model{

    static function release($data,$user_id,$time){
        try{
            $name=DB::table('user')
                ->where('id',$user_id)
                ->value('username'); 
            DB::table('leave')->insert([
                'user_id'=>$user_id,
                'text'=>$data,
                'time'=>$time
            ]);
        }catch (Exception $e){
            return $e->getMessage();
        }
        return $name;
    }
    static function user_data($user_id){
        $data=DB::table('user')
            ->where('id',$user_id)
            ->first();
        return $data;
    }
    static function up_user($user_id,$username,$password){
        try{
            DB::table('user')
                ->where('id',$user_id)
                ->update(['username'=>$username,'password'=>$password]);
        }catch (Exception $e){
            return 0;
        }
        return 1;

    }
    static function data(){
        try{

           $db= DB::table('leave')
               ->join('user','leave.user_id','=','user.id')
               ->orderBy('leave.id', 'desc')
               ->select('user.username','leave.text','leave.time','user.img')
               ->get();
        }catch (Exception $e){
            return 0;
        }
        return $db;

    }

}