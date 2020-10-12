<?php

use Illuminate\Support\Facades\Route;

/**
 *==========================================================================
 *==========================================================================
 *------------------------      ROTAS ADMIN       --------------------------
 *==========================================================================
 *==========================================================================
 */

Route::resource('userAdmin', 'UserAdminsController')
->middleware('auth');

Route::get('/admin/carrinho', 
['uses' => 'UserAdminsController@adminCarrinho'])
->name('admin.carrinho')
->middleware('auth');

Route::get('/admin/db', 
['uses' => 'UserAdminsController@db'])
->name('admin.db')
->middleware('auth');

Route::delete('/admin/db/delete', 'UserAdminsController@delete')
->name('user.delete')
->middleware('auth');

Route::get('/admin/print', 
['uses' => 'UserAdminsController@print'])
->name('admin.print')
->middleware('auth');

Route::get('/admin/voucher', 
['uses' => 'UserAdminsController@voucher'])
->name('admin.voucher')
->middleware('auth');

/**
 *==========================================================================
 *==========================================================================
 *-----------------------      ROTAS VISITOR       -------------------------
 *==========================================================================
 *==========================================================================
 */

Route::get('/contato', 
['uses' => 'Controller@contato'])
->name('contato');

Route::get('/gestao', 
['uses' => 'Controller@gestao'])
->name('gestao');

Route::get('/home',
['uses' => 'EventosController@home'])
->name('user.home');

Route::get('/', 
['uses' => 'EventosController@home']);

Route::get('/politicas',
['uses' => 'Controller@politicas'])
->name('politicas');

Route::get('/sobre', 
['uses' => 'Controller@sobre'])
->name('sobre');

/**
 *==========================================================================
 *==========================================================================
 *---------------------      ROTAS LOGIN CLIENTE      ----------------------
 *==========================================================================
 *==========================================================================
 */

Route::get('/login', 
['uses' => 'Controller@login']);

Route::post('/login', 
['as' => 'login', 'uses' => 'LoginController@auth']);

Route::post('logout', 'LoginController@logout')
->name('logout');

/**
 *==========================================================================
 *==========================================================================
 *----------------------      ROTAS LOGIN ADMIN      -----------------------
 *==========================================================================
 *==========================================================================
 */

Route::get('/admin/login', 
['uses' => 'UserAdminsController@adminLogin']);

Route::post('/admin/login', 
['as' => 'admin.login', 'uses' => 'LoginAdminController@auth']);

Route::post('admin/logout', 'LoginAdminController@logout')
->name('admin.logout');

Route::get('/admin/home', 
['as' => 'admin.home', 'uses' => 'LoginAdminController@adminHome'])
->middleware('auth');

/**
 *==========================================================================
 *==========================================================================
 *------------------      ROTAS CADASTRO CLIENTE      ----------------------
 *==========================================================================
 *==========================================================================
 */

Route::resource('cadastro', 'UsersController');

Route::get('/admin/clientes', 
['uses' => 'UsersController@adminClintes'])
->name('admin.clientes')
->middleware('auth');

/**
 *==========================================================================
 *==========================================================================
 *-------------------      ROTAS CADASTRO EVENTOS      ---------------------
 *==========================================================================
 *==========================================================================
 */

Route::resource('admin/cadastrar-evento', 'EventosController')
->middleware('auth');

Route::get('/evento/{id}', 'EventosController@show')
->name('evento');

Route::resource('evento', 'EventosController');

/**
 *==========================================================================
 *==========================================================================
 *-----------------      ROTAS ADMINISTRAR EVENTOS      --------------------
 *==========================================================================
 *==========================================================================
 */

Route::get('/admin/administrar-eventos', 
['uses' => 'EventosController@administrarEventos'])
->name('admin.administrar-eventos')
->middleware('auth');

Route::get('/admin/edit/{id}', 
['uses' => 'EventosController@edit'])
->name('admin.edit')
->middleware('auth');

/**
 *==========================================================================
 *==========================================================================
 *------------------------      ROTAS CONFIG      --------------------------
 *==========================================================================
 *==========================================================================
 */

Route::resource('admin/config', 'ConfigsController')
->middleware('auth');

/**
 *==========================================================================
 *==========================================================================
 *-----------------------      ROTAS CARRINHO      -------------------------
 *==========================================================================
 *==========================================================================
 */

Route::get('/carrinho', 'CarrinhosController@index')
->name('user.carrinho');

Route::post('/carrinho/adicionar/inteira', 'CarrinhosController@inteira')
->name('user.inteira');

Route::post('/carrinho/adicionar/meia', 'CarrinhosController@meia')
->name('user.meia');

Route::post('/carrinho/adicionar/vip', 'CarrinhosController@vip')
->name('user.vip');

Route::post('/carrinho/adicionar/premium', 'CarrinhosController@premium')
->name('user.premium');

Route::delete('/carrinho/remover', 'CarrinhosController@remover')
->name('user.remover');

Route::post('/carrinho/concluir', 'CarrinhosController@concluir')
->name('user.concluir');

Route::get('/compras', 'CarrinhosController@compras')
->name('user.compras');

Route::post('/carrinho/cancelar', 'CarrinhosController@cancelar')
->name('user.cancelar');