<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserAdminRepository;
use App\Validators\UserAdminValidator;
use Exception;
use Auth;

class LoginAdminController extends Controller
{
    
    protected $repository;
    private $validator;

    public function __construct(UserAdminRepository $repository, UserAdminValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    public function adminHome()
    {
        return view('admin.home');
    }

    public function auth(Request $request)
    {
    	$data = [
    		'email'    => $request->get('username'),
    		'password' => $request->get('password')
    	];

    	try
    	{
            if(env('PASSWORD_HASH'))
            {
                Auth::attempt($data, false);
            }
            else
            {
                $user_admins = $this->repository->findWhere(['email' => $request->get('username')])->first();

                if(!$user_admins)
                    throw new Exception("O e-mail informado é inválido!");

                if($user_admins->password != $request->get('password'))
                    throw new Exception("A senha informada é inválida!");
                    
                Auth::login($user_admins);    
            }

    		return redirect()->route('admin.home');
    	}
    	catch (Exception $e)
    	{
    		return $e->getMessage();
    	}

    	$request->all();
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
