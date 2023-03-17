@extends('parent')

@section('container')
    <form method="POST" action="{{ route('update', ['id' => $map->id])}}">
    @method('PATCH')
    @csrf
    <input type="text" class="form-control" name="name"
                   placeholder="Заголовок" required value="{{ $map->name }}">
    <input type="text" class="form-control" name="length"
                   placeholder="Заголовок" required value="{{ $map->length }}">
    <input type="text" class="form-control" name="width"
                   placeholder="Заголовок" required value="{{ $map->width }}">
    <button class="button"> Подтвердить </button>
    </form>
@endsection