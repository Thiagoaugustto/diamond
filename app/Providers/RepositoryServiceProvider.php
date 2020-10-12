<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the aplication services
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserAdminRepository::class, \App\Repositories\UserAdminRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EventosRepository::class, \App\Repositories\EventosRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ComprasRepository::class, \App\Repositories\ComprasRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ConfigRepository::class, \App\Repositories\ConfigRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\MapaRepository::class, \App\Repositories\MapaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PedidoRepository::class, \App\Repositories\PedidoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\VipPedidoRepository::class, \App\Repositories\VipPedidoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CarrinhoRepository::class, \App\Repositories\CarrinhoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EventosDiversosRepository::class, \App\Repositories\EventosDiversosRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\SetorRepository::class, \App\Repositories\SetorRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\IngressoRepository::class, \App\Repositories\IngressoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\VipSetorRepository::class, \App\Repositories\VipSetorRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\VipIngressoRepository::class, \App\Repositories\VipIngressoRepositoryEloquent::class);
        //:end-bindings:
    }
}
