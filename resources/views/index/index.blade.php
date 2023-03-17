@extends('parent')

@section('container')
        <div class="map-container">
    <div class="row">
    <div class="col" data-style style="margin-left: 2%; margin-top: 2%; visibility: visible">
    <form action="{{ route('create')}}" method="POST">
    @csrf
        <span style="align-items: center"> Добавьте свой маркер! </span>
        <div class="row">
        
                <div class="col" style=" margin-bottom: 2%">
                <input name="name" placeholder="Название">
                </div>
                <div class="col" style=" margin-bottom: 2%">
                <input name="length" placeholder="Долгота">
                </div>
                <div class="col" style=" margin-bottom: 2%">
                <input name="width" placeholder="Широта">
                </div>
                <div class="col">
                    <button class="button">Добавить</button>
                </div>
            
        </div>
        </form>
        
        <div class="point-list">
            @foreach ($map as $maps) 
            <div class="points">
                <div class="row">
                <div class="col data-cols-name" data-cols="1"> {{ $maps->name }}  </div>
                <a href="#"><div class="col data-cols-number" data-cols="2" style="text-align: center;">{{ $maps->width }} {{ $maps->length }}</div></a>
                <div class="col" style="text-align: right; padding-right: 5%;">
                                <a href="{{ route('edit', ['id' => $maps->id]) }}">
                                <i class="bi bi-pencil"></i>
                                </a>

                                <a href="{{route('destroy', ['id' => $maps->id])}}">
                                <i class="bi bi-trash"></i>
                                </a>
                            </div>
                        
                </div>
            </div>
            @endforeach
            </div>
            </div>
        <div class="col">
    <div id="map" class="map"></div>
    <a href="{{ route('logout') }}"><button class="button" style="width: 100%;"> Выйти </button></a>
        </div>
        
        </div>
        </div>
@endsection