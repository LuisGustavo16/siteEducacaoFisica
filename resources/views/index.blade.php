@extends ('cabecalho')
@section('content')
<div class="fundo">
    <div class="divNoticiasGerais">
        @foreach ($dados as $item)
            <a href="">
                <div class="divNoticia">
                    <h1 class="noticia">{{$item->titulo}}</h1>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection