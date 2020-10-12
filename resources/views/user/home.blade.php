@extends('templates.master')

@section('conteudo-view')
            <section class="section-principal py-3">
                <div class="container">
                   <div class="eventos-lista py-3">
                      <div class="heading-title">
                        <h2>Eventos <span>destaques</span></h2>
                      </div>
                      <div class="row">
                        @foreach ($evento as $evento)
                        <div class="col-md-3 col-sm-3 col-12">
                            <a href="{{ route('evento', $evento->id)}}" class="featured-events scroll-effect">
                            @if ($evento->image)
                                <img src="{{ url("storage/{$evento->image}") }}" alt="{{$evento->name}}" class="featured-events home">
                            @endif
                            <h1>{{ $evento->name }}</h1></a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
@endsection

