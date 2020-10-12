<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Repositories\UserRepository;
use App\Services\UserService;
use App\Entities\Config;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     *==========================================================================
     *==========================================================================
     *-----------------------      METODOS ADMIN       -------------------------
     *==========================================================================
     *==========================================================================
     */

    protected $repository;

    public function __construct(UserRepository $repository, UserService $service)
    {
        $this->repository = $repository;
        $this->service    = $service;
    }

    /**
     *==========================================================================
     *==========================================================================
     *-----------------------      METODOS VISITOR       -----------------------
     *==========================================================================
     *==========================================================================
     */

    public function login()
    {   
        return view('user.login');
    }

    public function politicas()
    {   
        $config = Config::all();

        return view('user.politicas', [
            'config' => $config
        ]);
    }

    public function contato()
    {   
        $config = Config::all();

        return view('user.contato', [
            'config' => $config
        ]);
    }

    public function gestao()
    {   
        $config = Config::all();
        
        return view('user.gestao', [
            'config' => $config
        ]);
    }  

    public function sobre()
    {   
        $config = Config::all();

        return view('user.sobre', [
            'config' => $config
        ]);
    }
}   
