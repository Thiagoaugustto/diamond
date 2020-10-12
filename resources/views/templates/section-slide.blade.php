<!---->
            <section class="section-slide pb-1">
                <div class="owl-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item cloned">
                                @foreach ($config as $configs)
                                <figure id="slide" class="item">
                                    @if ($configs->banner1)
                                    <img src="{{ url("storage/{$configs->banner1}") }}" class="img-slide">
                                    @endif
                                    @if ($configs->banner2)
                                    <img src="{{ url("storage/{$configs->banner2}") }}" class="img-slide">
                                    @endif
                                    @if ($configs->banner3)
                                    <img src="{{ url("storage/{$configs->banner3}") }}" class="img-slide">
                                    @endif
                                </figure>
                                 @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
