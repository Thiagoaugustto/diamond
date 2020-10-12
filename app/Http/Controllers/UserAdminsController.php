<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\UserAdminCreateRequest;
use App\Http\Requests\UserAdminUpdateRequest;
use App\Repositories\UserAdminRepository;
use App\Validators\UserAdminValidator;
use App\Services\UserAdminService;
use App\Entities\Eventos;
use App\Entities\Pedido;
use App\Entities\PedidoProduto;

/**
 * Class UserAdminsController.
 *
 * @package namespace App\Http\Controllers;
 */
class UserAdminsController extends Controller
{
    protected $service;
    protected $repository;

    public function __construct(UserAdminRepository $repository, UserAdminService $service)
    {
        $this->repository = $repository;
        $this->service    = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.clientes');
    }

        public function administrarEventos()
    {
        return view('admin.administrar-eventos');
    }

    public function adminCarrinho()
    {
        $evento = Eventos::all();
        
        $compras = Pedido::where([
            'status'  => 'PA',
            ])->orderBy('created_at', 'desc')->get();

        $cancelados = Pedido::where([
            'status'  => 'CA',
            ])->orderBy('updated_at', 'desc')->get();

        return view('admin.carrinho', compact('compras', 'cancelados'), [
            'evento' => $evento
        ]);
    }

    public function db()
    {
        $evento = Eventos::all();
        
        $compras = Pedido::where([
            'status'  => 'PA',
            ])->orderBy('created_at', 'desc')->get();

        return view('admin.db', compact('compras'), [
            'evento' => $evento
        ]);
    }

    public function delete($id)
    {
        $pedido_produto = $this->repository->where('id', $id)->first();
        if (!$pedido_produto)
            return redirect()->back();

        $pedido_produto->delete();

        return redirect()->back();

    }

    public function adminHome()
    {
        return view('admin.home');
    }

    public function adminLogin()
    {
        return view('admin.login');
    }

    public function print()
    {
        return view('admin.print');
    }

    public function voucher()
    {
        return view('admin.voucher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(UserAdminCreateRequest $request)
    {
        $request = $this->service->store($request->all());
        $userAdmin = $request['success'] ? $request['data'] : null;

        session()->flash('success', [
            'success'  => $request['success'],
            'messages' => $request['messages'],
        ]);

        return view('admin.clientes', [
            'userAdmin' => $userAdmin,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userAdmin = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $userAdmin,
            ]);
        }

        return view('userAdmins.show', compact('userAdmin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userAdmin = $this->repository->find($id);

        return view('userAdmins.edit', compact('userAdmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UserAdminUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UserAdminUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $userAdmin = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'UserAdmin updated.',
                'data'    => $userAdmin->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }
}
