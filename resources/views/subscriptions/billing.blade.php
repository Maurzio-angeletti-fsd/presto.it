<x-layout>
    <x-nav />
<div class="container">
    <div>
    <h3>il tuo abbonamento:</h3>
</div>
   <div>
    <h5>piano</h5>
    <p>{{$subscription->type}}</p>
   </div>

   <div>
   <h5>finisce il</h5>
    <p>{{date("d/m/Y",strtotime($subscription->ends_at))}}</p>
   </div>
<div>
    <a href="{{route('plan.show')}}" class="btn btn-primary">torna indietro</a>
</div>
</div>



</x-layout>
