@extends('layouts.app')

@section('content')
  
  <h1>Toutes nos voitures</h1>
  <a href="{{route("cars.create")}}">Ajouter un vehicule</a>
  <div class="allList">
    
    @foreach ($cars as $car )
      <div class="list">
        <a class="card" href="{{route("cars.show",$car)}}">
          <div>
          
            <h2> id :{{$car->id}} </h2>
            <h3> Marque : {{$car->brand}}</h3>
            <div> Model : {{$car->serie}}</div>
            <div>Prix : {{$car->price}} €</div>
            <div>Energy : {{$car->energy}}</div>
            <div>Puissance : {{$car->power}} chevaux </div>
            <div>Date de construction :{{$car->release_date}} </div>
            <div>Poid :{{$car->weight}} kg </div>
          
          </div>
          <img src="{{$car->thumbnail}}" alt="">
        </a>
        
      </div>
    @endforeach
    </div>


@endsection