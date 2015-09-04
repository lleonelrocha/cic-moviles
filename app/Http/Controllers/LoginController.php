<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:51
 */

namespace App\Http\Controllers;

use App\Entities\User;
use App\Http\Repositories\UserRepo;
use App\Http\Requests\UserCreateRequest;

use App\Http\Helpers\LdapFunction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;


class LoginController extends Controller {

    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getLogin()
    {
        return view('login');
    }


    public function postLogin(Request $request)
    {
       // $ldap = new LdapFunction();

      /*  if($ldap->auth($request->email, $request->password)){

            $user = $this->userRepo->SearchUser($request->email);

            if(is_null($user)) {

                $data['email']  = $request->email;
                $user           = $this->userRepo->create($data);

                Auth::login($user);

            }else{

                Auth::login($user);
            }
*/
                // login local

                 if(!Auth::check())
                 {
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
                {
                  return redirect('home');
                }
                   return  redirect()->intended('home');
                }



            return redirect('home');
    /*
    }
        else
        {
            return  redirect()->intended('home');
        }
      */
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect('login');
    }

    //public function store(UserCreateRequest $request)
    //{
    //    $datos = $request->only('username', 'password');

    //    $this->userRepo->create($datos);
    //}

    //public function name()
    //{

    //    dd($this->userRepo->find(1));


    //}
}