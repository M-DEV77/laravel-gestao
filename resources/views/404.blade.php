<style>
    .err{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
        width: 100%;

    }
   
</style>
    @extends('site.layouts.base')
    @section('titulo','404')
    @section('conteudo')
    <div class='err'>
        <h1>404</h1>
        <a href="{{route('site.home')}}">click para retornar</a>
    </div>
    @endsection




