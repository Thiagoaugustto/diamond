<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\EventosCreateRequest;
use App\Http\Requests\EventosUpdateRequest;
use App\Repositories\EventosRepository;
use App\Validators\EventosValidator;
use App\Services\EventosService;
use App\Entities\User;
use App\Entities\Eventos;
use App\Entities\PedidoProduto;
use App\Entities\Pedido;
use App\Entities\Config;

/**
 * Class EventosController.
 *
 * @package namespace App\Http\Controllers;
 */
class EventosController extends Controller
{
    protected $service;
    protected $repository;

    public function __construct(EventosRepository $repository, EventosService $service, Eventos $evento)
    {
        $this->repository = $repository;
        $this->service  = $service;
        $this->repository = $evento;
    }

    public function index()
    {
        $evento = $this->repository->all();

        return view('admin.cadastrar-evento', [
            'evento' => $evento
        ]);
    }

    public function store(EventosUpdateRequest $request)
    {  
        $data = $request->only('name','name_pos','start', 'address', 'age', 'date', 'link', 'city', 'state', 'place', 'gate_opening', 'scaner_password', 'start_time', 'closing_time', 'description', 'url_video', 'area', 'lote', 'qtd', 'tipo_a', 'valor_a', 'taxa_a', 'tipo_b', 'valor_b', 'taxa_b', 'area_v', 'lote_v', 'qtd_v', 'tipo_v', 'valor_v', 'taxa_v', 'tipo_p', 'valor_p', 'taxa_p', 'ativo');

        if ($request->hasFile('image') && $request->image->isValid()){
            $imagePath = $request->image->store('eventos');

            $data['image'] = $imagePath;
        }

        $this->repository->create($data);

        return redirect()->route('admin.administrar-eventos');
    }

    public function destroy($id)
    {
        $evento = $this->repository->where('id', $id)->first();
        if (!$evento)
            return redirect()->back();

        $evento->delete();

        return redirect()->route('admin.administrar-eventos');

    }

    public function administrarEventos()
    {
        $evento = Eventos::all();

        return view('admin.administrar-eventos', [
            'evento' => $evento
        ]);
    }

    public function home()
    {   
        $evento = Eventos::all();
        $config = Config::all();

        return view('user.home', [
            'evento' => $evento,
            'config' => $config
        ]);
    }

    public function show($id)
    {   
        if (!$evento = $this->repository->find($id))
            return redirect()->back();

        $user = User::all();
        $pedido = Pedido::all();
        $pedido_produto = PedidoProduto::all();
        $config = Config::all();
        
        return view('user.evento', [
            'evento' => $evento,
            'user' => $user,
            'pedido' => $pedido,
            'pedido_produto' => $pedido_produto,
            'config' => $config
        ]);
    }

    public function edit($id)
    {
        $evento = Eventos::find($id);
        return view('admin.edit', compact('evento', 'id'));
    }

    public function update(Request $request, $id)
    {
        if (!$evento = $this->repository->find($id))
            return redirect()->back();

        $evento->update($request->all());

        return redirect()->route('admin.administrar-eventos');
    }

}  