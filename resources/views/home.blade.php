@extends('layouts.app')

@section('content')
    <h1>TRAIN SEEKER</h1>

    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col">
                    <div class="card" >
                        <div class="card-header fw-bolder">
                          <h1>{{$train->azienda}}</h1> 
                          <h4>Codice: <span class="fw-bold">{{$train->codice_treno}}</span> </h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Partenza: <span class="fw-bold">{{$train->stazione_di_partenza}}</span> </li>
                            <li class="list-group-item">Arrivo: <span class="fw-bold">{{$train->stazione_di_arrivo}}</span> </li>
                            <li class="list-group-item">Data Partenza: <span class="fw-bold">{{$train->data_viaggio}}</span> </li>
                            <li class="list-group-item">Orario Partenza: <span class="fw-bold">{{$train->orario_di_partenza}}</span> </li>
                            <li class="list-group-item">Orario Arrivo: <span class="fw-bold">{{$train->orario_di_arrivo}}</span> </li>
                            <li class="list-group-item">NUmero Carrozze: <span class="fw-bold">{{$train->numero_carrozze}}</span> </li>
                            <li class="list-group-item">
                                @if ($train->in_orario == 0)
                                    <p class="text-success">Treno in Orario</p>                           
                                @else
                                    <p class="text-danger">Treno in Ritardo</p>
                                @endif
                            </li>
                            <li class="list-group-item">
                                @if ($train->cancellato == 0)
                                    <p class="text-success">Treno Confermato</p>                           
                                @else
                                    <p class="text-danger">Treno Cancellato</p>
                                @endif</li>
                        </ul>
                      </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection