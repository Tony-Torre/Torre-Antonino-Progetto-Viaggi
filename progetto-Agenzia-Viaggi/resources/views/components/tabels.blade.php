<!-- tabella-->
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Partenze</h3>
            <ul class="list-group">
                @foreach ($voli['departure'] as $singoloVolo)
                <a href="{{route('detailDeparture',['destinazione'=>$singoloVolo['id']])}}">
                    <li class="list-group-item"><div class="container">
                        <div class="row">
                            <div class="col-3">
                                {{$singoloVolo['company']}} 
                            </div>
                            <div class ="col-3">
                                {{$singoloVolo['city']}} 
                            </div>
                            <div class ="col-3">
                                {{$singoloVolo['time']}} 
                            </div>
                            <div class ="col-3">
                                {{$singoloVolo['gate']}} 
                            </div>
                        </div>
                    </div>
                </li> 
            </a>
            @endforeach
        </ul>
    </div>
    <div class="col-6">
        <h3>Arrivi</h3>
        <ul class="list-group">
            @foreach ($voli['arrival'] as $singoloVolo)
            <a href="{{route('detailArrival',['destinazione'=>$singoloVolo['id']])}}">
                <li class="list-group-item"><div class="container">
                    <div class="row">
                        <div class="col-3">
                            {{$singoloVolo['company']}} 
                        </div>
                        <div class ="col-3">
                            {{$singoloVolo['city']}} 
                        </div>
                        <div class ="col-3">
                            {{$singoloVolo['time']}} 
                        </div>
                        <div class ="col-3">
                            {{$singoloVolo['gate']}} 
                        </div>
                    </div>
                </div>
            </li> 
        </a>
        @endforeach
    </ul>
</div>