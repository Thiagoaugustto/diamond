<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Entities\Eventos;
use App\Entities\Config;
use App\Entities\Pedido;
use App\Entities\PedidoProduto;


/**
 * Class CarrinhosController.
 *
 * @package namespace App\Http\Controllers;
 */
class CarrinhosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pedidos = Pedido::where([
            'status' => 'RE',
            'user_id' => Auth::id()
        ])->get();

        $evento = Eventos::all();
        $config = Config::all();
        $pedido_produto = PedidoProduto::all();

        return view('user.carrinho', compact('pedidos'), [
            'evento' => $evento,
            'config' => $config,
            'pedido_produto' => $pedido_produto
        ]);
    }

    public function inteira()
    {  
        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idevento = $req->input('id');

        $evento = Eventos::find($idevento);
        if( empty($evento->id) ) {
            $req->session()->flash('mensagem-falha', 'Evento não encontrado em nossa loja!');
            return redirect()->back();
        }

        $idusuario = Auth::id();

        $idpedido = Pedido::consultaId([
            'user_id' => $idusuario,
            'status' => 'RE'
        ]);

        if(empty($idpedido) ) {
            $pedido_novo = Pedido::create([
                'user_id' => $idusuario,
                'status' => 'RE'
            ]);

            $idpedido = $pedido_novo->id;
        }    

        PedidoProduto::create([
            'pedido_id' => $idpedido,
            'evento_id' => $idevento,
            'area'      => $evento->area,
            'tipo'      => $evento->tipo_a,
            'valor'     => $evento->valor_a,
            'taxa'      => $evento->taxa_a,
            'status'    => 'RE'
        ]);

        $req->session()->flash('mensagem-sucesso', 'Evento adicionado ao carrinho com sucesso');

        return redirect()->back();
    }

    public function meia()
    {  
        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idevento = $req->input('id');

        $evento = Eventos::find($idevento);
        if( empty($evento->id) ) {
            $req->session()->flash('mensagem-falha', 'Evento não encontrado em nossa loja!');
            return redirect()->back();
        }

        $idusuario = Auth::id();

        $idpedido = Pedido::consultaId([
            'user_id' => $idusuario,
            'status'  => 'RE'
        ]);

        if(empty($idpedido) ) {
            $pedido_novo = Pedido::create([
                'user_id' => $idusuario,
                'status'  => 'RE'
            ]);

            $idpedido = $pedido_novo->id;
        }    

        PedidoProduto::create([
            'pedido_id' => $idpedido,
            'evento_id' => $idevento,
            'area'      => $evento->area,
            'tipo'      => $evento->tipo_b,
            'valor'     => $evento->valor_b,
            'taxa'      => $evento->taxa_b,
            'status'    => 'RE'
        ]);

        $req->session()->flash('mensagem-sucesso', 'Evento adicionado ao carrinho com sucesso');

        return redirect()->back();
    }

    public function vip()
    {  
        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idevento = $req->input('id');

        $evento = Eventos::find($idevento);
        if( empty($evento->id) ) {
            $req->session()->flash('mensagem-falha', 'Evento não encontrado em nossa loja!');
            return redirect()->back();
        }

        $idusuario = Auth::id();

        $idpedido = Pedido::consultaId([
            'user_id' => $idusuario,
            'status'  => 'RE'
        ]);

        if(empty($idpedido) ) {
            $pedido_novo = Pedido::create([
                'user_id' => $idusuario,
                'status'  => 'RE'
            ]);

            $idpedido = $pedido_novo->id;
        }    

        PedidoProduto::create([
            'pedido_id' => $idpedido,
            'evento_id' => $idevento,
            'area'      => $evento->area_v,
            'tipo'      => $evento->tipo_v,
            'valor'     => $evento->valor_v,
            'taxa'      => $evento->taxa_v,
            'status'    => 'RE'
        ]);

        $req->session()->flash('mensagem-sucesso', 'Evento adicionado ao carrinho com sucesso');

        return redirect()->back();
    }

    public function premium()
    {  
        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idevento = $req->input('id');

        $evento = Eventos::find($idevento);
        if( empty($evento->id) ) {
            $req->session()->flash('mensagem-falha', 'Evento não encontrado em nossa loja!');
            return redirect()->back();
        }

        $idusuario = Auth::id();

        $idpedido = Pedido::consultaId([
            'user_id' => $idusuario,
            'status'  => 'RE'
        ]);

        if(empty($idpedido) ) {
            $pedido_novo = Pedido::create([
                'user_id' => $idusuario,
                'status'  => 'RE'
            ]);

            $idpedido = $pedido_novo->id;
        }    

        PedidoProduto::create([
            'pedido_id' => $idpedido,
            'evento_id' => $idevento,
            'area'      => $evento->area_v,
            'tipo'      => $evento->tipo_p,
            'valor'     => $evento->valor_p,
            'taxa'      => $evento->taxa_p,
            'status'    => 'RE'
        ]);

        $req->session()->flash('mensagem-sucesso', 'Evento adicionado ao carrinho com sucesso');

        return redirect()->back();
    }

    public function remover()
    {
        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idpedido           = $req->input('pedido_id');
        $idevento           = $req->input('evento_id');
        $remove_apenas_item = (boolean)$req->input('item');
        $idusuario          = Auth::id();

        $idpedido = Pedido::consultaId([
            'id'      => $idpedido,
            'user_id' => $idusuario,
            'status'  => 'RE'
        ]);

        if( empty($idpedido)) {
            $req->session()->flash('mensagem falha', 'Evento não encontrado!');
            return redirect()->back();
        }

        $where_evento = [
            'pedido_id' => $idpedido,
            'evento_id' => $idevento
        ];

        $evento = PedidoProduto::where($where_evento)->orderBy('id', 'desc')->first();
        if( empty($evento->id)) {
            $req->session()->flash('mensagem-falha', 'Evento não encontrado no carrinho!');
            return redirect()->back();
        }

        if($remove_apenas_item) {
            $where_evento['id'] = $evento->id;
        }
        PedidoProduto::where($where_evento)->delete();

        $check_pedido = PedidoProduto::where([
            'pedido_id' => $evento->pedido_id
            ])->exists();

        if(!$check_pedido) {
            Pedido::where([
                'id' => $evento->pedido_id
                ])->delete();
        }

        $req->session()->flash('mensagem-sucesso', 'Evento removido do carrinho com sucesso!');

        return redirect()->back();
    }

    public function concluir()
    {
        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idpedido  = $req->input('pedido_id');
        $idusuario = Auth::id();

        $check_pedido = Pedido::where([
            'id'      => $idpedido,
            'user_id' => $idusuario,
            'status'  => 'RE'
            ])->exists();

        if( !$check_pedido ) {
            $req->session()->flash('mensagem-falha', 'Pedido não encontrado!');
            return redirect()->back();
        }

        $check_produtos = PedidoProduto::where([
            'pedido_id' => $idpedido
            ])->exists();
        if(!$check_produtos) {
            $req->session()->flash('mensagem-falha', 'Produtos do pedido não encontrados!');
            return redirect()->back();
        }

        PedidoProduto::where([
            'pedido_id' => $idpedido
            ])->update([
                'status' => 'PA'
            ]);
        Pedido::where([
                'id' => $idpedido
            ])->update([
                'status' => 'PA'
            ]);

        $req->session()->flash('mensagem-sucesso', 'Compra concluída com sucesso!');

        return redirect()->back();
    }

    public function compras()
    {
        $evento = Eventos::all();
        $config = Config::all();

        $compras = Pedido::where([
            'status'  => 'PA',
            'user_id' => Auth::id()
            ])->orderBy('created_at', 'desc')->get();

        $cancelados = Pedido::where([
            'status'  => 'CA',
            'user_id' => Auth::id()
            ])->orderBy('updated_at', 'desc')->get();

        return view('user.compras', compact('compras', 'cancelados'), [
            'evento' => $evento,
            'config' => $config
        ]);

    }

    public function cancelar()
    {
        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idpedido       = $req->input('pedido_id');
        $idspedido_prod = $req->input('id');
        $idusuario      = Auth::id();

        if( empty($idspedido_prod) ) {
            $req->session()->flash('mensagem-falha', 'Nenhum item selecionado para cancelamento!');
            return redirect()->back();
        }

        $check_pedido = Pedido::where([
            'id'      => $idpedido,
            'user_id' => $idusuario,
            'status'  => 'PA'
            ])->exists();

        if( !$check_pedido ) {
            $req->session()->flash('mensagem-falha', 'Evento não encontrado para cancelamento!');
            return redirect()->route('user.compras');
        }

        $check_eventos = PedidoProduto::where([
                'pedido_id' => $idpedido,
                'status'    => 'PA'
            ])->whereIn('id', $idspedido_prod)->exists();

        if( !$check_eventos ) {
            $req->session()->flash('mensagem-falha', 'Evento do pedido não encontrados!');
            return redirect()->route('user.compras');
        }

        PedidoProduto::where([
                'pedido_id' => $idpedido,
                'status'    => 'PA'
            ])->whereIn('id', $idspedido_prod)->update([
                'status' => 'CA'
            ]);

        $check_pedido_cancel = PedidoProduto::where([
                'pedido_id' => $idpedido,
                'status'    => 'PA'
            ])->exists();

        if( !$check_pedido_cancel ) {
            Pedido::where([
                'id' => $idpedido
            ])->update([
                'status' => 'CA'
            ]);

            $req->session()->flash('mensagem-sucesso', 'Compra cancelada com sucesso!');

        } else {
            $req->session()->flash('mensagem-sucesso', 'Item(ns) da compra cancelado(s) com sucesso!');
        }

        return redirect()->route('user.compras');
    }
}
