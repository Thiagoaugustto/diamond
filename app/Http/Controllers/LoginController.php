<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Exception;
use Auth;

class LoginController extends Controller
{
    
    protected $repository;
    private $validator;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    public function cadastro()
    {
        return view('user.cadastro');
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
                $user = $this->repository->findWhere(['email' => $request->get('username')])->first();

                if(!$user)
                    throw new Exception("O e-mail informado é inválido!");

                if($user->password != $request->get('password'))
                    throw new Exception("A senha informada é inválida!");
                    
                Auth::login($user);    
            }

    		return redirect()->route('user.home');
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
        return redirect()->route('login');
    }
}
