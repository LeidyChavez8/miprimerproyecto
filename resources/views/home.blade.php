
@extends('layouts.app')

@section('title')
pag ljco
@endsection

@push('css')
<style>
    body{
        background-color: rgba(189, 171, 171, 0.933)
    }
</style>
    
@endpush

@push('js')
    
@endpush

  @section('content')
      @component('components.alert', ['type'  => 'info', 'class' => 'mb-4'])
       @slot('title')
       titulo de la alerta
       @endslot
       contenido
      @endcomponent 
      <p>hello</p>
  @endsection