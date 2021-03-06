@extends('layouts.site')

@section('titlepage', 'Home')
    
@section('content')

    @component('components.slider_home')@endcomponent

    <section class="section-home">
        <div class="content container">
            <div class="image" style="background-image: url('{{ asset("img/sobre.png") }}')">
                <img src="{{ asset("img/sobre.png") }}" alt="Sobre Nos">
            </div>
            <div class="text">
                <h4>A Contiplan</h4>
                <p>A <b>Contiplan</b> está no mercado <b>há 29 anos</b>, atendendo empresas de diversos segmentos públicos e privados, em âmbito nacional. Buscamos a melhoria contínua de nossa cadeia produtiva, visando aprimoramento de processos, trazendo qualidade em todos os produtos e serviços desenvolvidos. <b>A satisfação de nossos clientes é o nosso maior compromisso</b>.</p>
            </div>
        </div>
    </section>
@endsection