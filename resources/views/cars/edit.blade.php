@extends('layouts.app')

@section('content')
    <h2>Ajouter une voiture Whesh</h2>
    <form action={{route("cars.store")}} method="post">
        @csrf
        <div>
            <label for="brand"> Marque</label>
            <input type="text" id="brand" name="brand"   value="{{$data->brand}}" required >
            @error("brand")
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="serie"> Model</label>
            <input type="text" id="serie" name="serie" required value="{{$data->serie}}" >
            @error("serie")
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="price"> Prix</label>
            <input type="number" step="0.01" id="price" required value="{{$data->price}}" name="price" >
            @error("price")
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="energy"> Energy</label>
            <input type="text" id="energy" name="energy" required  value="{{$data->energy}}"  >
            @error("energy")
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="power"> Puissance</label>
            <input type="number" step="1" id="power" name="power" required value="{{$data->power}}" >
            @error("power")
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="release_date"> Date de sortie</label>
            <input type="date" id="release_date" name="release_date" required value="{{$data->release_date}}" >
            @error("release_date")
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="weight"> Poids</label>
            <input type="number" id="weight" name="weight" required value="{{$data->weight}}" >
            @error("weight")
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="thumbnail"> Url Image</label>
            <input type="url" id="thumbnail" name="thumbnail" value="{{$data->thumbnail}}" required>
            @error("thumbnail")
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button type="submit">Créer ma voiture</button>
        </div>
    </form>
@endsection