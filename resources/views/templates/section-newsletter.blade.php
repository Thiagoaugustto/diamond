            @foreach ($config as $configs)
                @if ($configs->newsletter) 
                <section class="section-newsletter" style="background-image: url({{ url("storage/{$configs->newsletter}")  }});">               
                @endif
            @endforeach                                
                <div class="container">
                    <form class="form-newsletter">
                        <div class="row w-75 mx-auto">
                            <div class="col-md-12 col-12 text-center">
                                <h2 class="titulo">Newsletter</h2>
                                <p class="text-white pb-2">Assine e fique por dentro de todos os eventos</p>
                            </div>
                            <div class="col-lg-10 col-md-9 col-12">
                                <input type="email" name="email" class="form-control form-newsletter-input" />
                            </div>
                            <div class="col-lg-2 col-md-3 col-12">
                                <button type="button" class="btn btn-success btn-rounded btn-assinar">Assinar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>