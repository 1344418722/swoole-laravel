<?php
namespace App\Http\Controllers\Index;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Index;

class IndexController extends Controller{
    function index()
    {
       return view('index.index');
    }
    //发布留言
    function release(Request $request){
        try{
            $data=$request->post();
            $user_id=session('user_id');
            date_default_timezone_set('PRC');
            $time=time();
            $a=Index::release($data['txt'],$user_id,$time);
            $array=['text'=>$data['txt'],'username'=>$a,
                'code'=>1,'time'=>date('Y-m-d H:i:s',$time)];
            $array_json=json_encode($array);
        }catch (Exception $e){
            return 0;
        }
        return $array_json;
    }
    //用户资料
    function user_data(){
        try{
            $user_id=session('user_id');
            $data=Index::user_data($user_id);
            $array_json=json_encode($data);
            
        }catch (Exception $e){
            return 0;
        }
        return $array_json;
    }
    //用户修改资料
    function up_user(Request $request){
        try{
            $data=$request->post();
            $user_id=session('user_id');
            extract($data);
            $m=Index::up_user($user_id,$username,$password);
        }catch (Exception $e){
            return 0;
        }
        return $m;

    }
    function data(Request $request){
        $db=Index::data();
        $db_js=json_encode($db);
        return $db_js;

    }

}