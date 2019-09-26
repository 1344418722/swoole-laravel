<?php
namespace App\Http\Controllers\Login;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Login;
use Illuminate\Support\Facades\Session;


class IndexController extends  Controller
{

    public function __construct(Request $request)
    {

    }
    function index(){
        //登录页视图
        $session=session('user_id');
        if(!empty($session)){
            return redirect('/');
        }
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
                session(['user_id'=>$db[1]]);
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
    //找会密码
    function reset(Request $request){
        $data=$request->post();
        try{
            extract($data);
            return Login::reset($name,$password);
        }catch (Exception $e){
            return 2;
        }

    }
}