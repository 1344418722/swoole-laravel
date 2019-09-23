<?php
namespace App\Http\Controllers\Login;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Login;
use Illuminate\Support\Facades\Session;


class IndexController extends  Controller
{

    public function __construct(Request $request)
    {
        $session=Session::get('user_id');
        $url=$request->url();
        if($url=='/login'){
            echo 123;die();
        }else{
            if(!empty($session)){
                return back();
            }
        }

    }
    function index(){
        //登录页视图
        return view('login.index');
    }
    function login(Request $request){
        //登录验证
        try{
            $data=$request->post();
            $db=Login::index($data['name'],$data['password']);
            if($db==0){
                return 0;
            }else{
                session('user_id',$db[0]);
                return 1;
            }
        }catch (Exception $e){
            return '非法登录';
        }

    }
    //注册验证
    function sign_in(Request $request){
        try{
            $data=$request->post();
            extract($data);
            $db=DB::table('user')
                ->where('name',$name)
                ->value('name');

            if(empty($db)){
                try{
                    DB::table('user')->insert([
                        'name'=>$name,
                        'username'=>$username,
                        'password'=>$password

                    ]);
                }catch (Exception $e){
                    return 4;
                }
                return 0;
            }else{
                return 1;
            }
        }catch (Exception $e){
            return '非法请求';
        }



    }
}