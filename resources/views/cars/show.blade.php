@extends('layouts.app')

@section('content')
<div><a href="{{route("cars.index")}}">Retour</a></div>
    <div class="card">
        <div>
            <h2>id :{{$car->id}}</h2>
            <h3> Marque : {{$car->brand}}</h3>
            <div> Model : {{$car->serie}}</div>
            <div>Prix : {{$car->price}} €</div>
            <div>Energy : {{$car->energy}}</div>
            <div>Puissance : {{$car->power}} chevaux </div>
            <div>Date de construction :{{$car->release_date}} </div>
            <div>Poid :{{$car->weight}} kg </div>
            <div> <a href="{{route("cars.edit",$car)}}">Modifier</a> </div>
        </div>
        <img src="{{$car->thumbnail}}" alt="">
        
        
    </div>

@endsection