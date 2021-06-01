@extends('layouts.app')
@section('title')
	Nos maisons
@endsection
@section('content')
        <div id="fh5co-properties" class="fh5co-section-gray">
          <div class="container">
            <div class="row">
            @foreach($immobilier as $immobil )
          <div class="col-md-4 animate-box">
            <div class="property">
              <a href="#" class="fh5co-property" style="background-image: url("{{$immobil->photo}})";">
                <span class="status">À {{$immobil->status}}</span>
              </a>
              <div class="property-details">
                <h3>{{$immobil->address}}</h3>
                @if ($immobil->status=='louer');
                <span class="price">{{$immobil->prix}} FCFA/mois</span>
                @else
                <span class="price">{{$immobil->prix}} FCFA</span>
                @endif
                </div>
            </div>      
          </div>
          @endforeach
        </div>
        </div>
        </div>
@endsection
