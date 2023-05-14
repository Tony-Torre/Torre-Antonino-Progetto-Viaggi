<!-- Card -->
<div class="card" style="width: 18rem;">
    <img src="{{$volo['cover']}}" class="card-img-top" alt="Foto">
    <div class="card-body">
      <h5 class="card-title"><span class="fw-bold">Destinazione : </span>{{$volo['city']}}</h5>
      <p class="card-text"><span class="fw-bold">Compagnia : </span>{{$volo['company']}}</p>
      <p class="card-text"><span class="fw-bold">Gate : </span>{{$volo['gate']}}</p>
      @if($volo['seats']['total'] > $volo['seats']['occupied'])
      <p class="card-text"><span class="fw-bold">Posti liberi : </span> {{$volo['seats']['total'] - $volo['seats']['occupied']}}</p>
      @endif
    </div>
  </div>