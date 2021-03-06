<div class="slider-home">
    <div class="content container">
        <div class="splide" id="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">

                        <div class="slide_organizer">
                            <div class="text">
                                <div class="title">
                                    <div class="content">
                                        <h2>Rótulos etiquetas <br> 
                                        personalizados</h2>
                                        <p>Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="text-inside">
                                    <p>Cuidamos de todos detalhes para o <br> sucesso da sua marca!</p>
                                    <button type="button" class="btn-slide" data-toggle="modal" data-target="#exampleModal">
                                    Abrir modal  <span><i class="fas fa-arrow-circle-right"></i></span>
                                    </button>
                                </div>
                            </div>

                            <!-- Estou supondo que os dados deste slide virão do backend em forma de texto e imagens separados, e que a imagem é importante. Tomando isso como princípio vou deixar a imagem até no slide mobile. -->
                            <div class="image" style="background-image: url('{{ asset("img/slide_pic.png") }}')"></div>
                        </div>
                    </li>
                  
                    <li class="splide__slide">
                        <div class="slide_organizer">
                            <div class="text">
                                <div class="title">
                                    <div class="content">
                                        <h2>Rótulos etiquetas <br> 
                                        personalizados</h2>
                                        <p>Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="text-inside">
                                    <p>Cuidamos de todos detalhes para o <br> sucesso da sua marca!</p>
                                    <button type="button" class="btn-slide" data-toggle="modal" data-target="#exampleModal">
                                    Abrir modal  <span><i class="fas fa-arrow-circle-right"></i></span>
                                    </button>
                                </div>
                            </div>
                            <div class="image" style="background-image: url('{{ asset("img/slide_pic.png") }}')"></div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="slide_organizer">
                            <div class="text">
                                <div class="title">
                                    <div class="content">
                                        <h2>Rótulos etiquetas <br> 
                                        personalizados</h2>
                                        <p>Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="text-inside">
                                    <p>Cuidamos de todos detalhes para o <br> sucesso da sua marca!</p>
                                    <button type="button" class="btn-slide" data-toggle="modal" data-target="#exampleModal">
                                    Abrir modal  <span><i class="fas fa-arrow-circle-right"></i></span>
                                    </button>
                                </div>
                            </div>
                            <div class="image" style="background-image: url('{{ asset("img/slide_pic.png") }}')"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Conteúdo do modal
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        {{-- <button type="button" class="btn btn-primary"></button> --}}
      </div>
    </div>
  </div>
</div>


