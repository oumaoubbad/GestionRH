<th>
    {{-- @if(Auth::user()->role) --}}
    {{$conge->statut}}
    @if($conge->statut==0)
        <form id="approve-leave-{{$conge->id}}" action="{{route('conge.approve',$conge->id)}}" method="POST">
            @csrf
            {{--<button type="button" onclick="approveLeave({{$conge->id}})"  class="btn btn-sm btn-info text-white" name="approve" value="1"> Accepter<i class="fa fa-check" aria-hidden="true"></i></button>--}}
            <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir accepter la réservation?')" class="btn btn-sm btn-info text-white" name="approve" value="1"><i class="fa fa-check" aria-hidden="true"> Accepter</i></button>
        </form>
        <form id="reject-leave-{{$conge->id}}" action="{{route('conge.approve',$conge->id)}}" method="POST">
            @csrf
            {{--<button type="button" onclick="rejectLeave({{$conge->id}})" class="btn btn-sm  btn-secondary text-white"  name="approve" value="2"><i class="fa fa-times" aria-hidden="true"> Refuser</i></button>--}}
        <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir refuser la réservation')" class="btn btn-sm btn-secondary text-white " name="approve" value="2"><i class="fa fa-times" aria-hidden="true"> Refuser</i></button>
        </form>
    @elseif($conge->statut==1)

        <form action="{{route('conge.approve',$conge->id)}}" method="POST">
            @csrf
            <button class="btn btn-sm btn-secondary text-white" onclick="return confirm('Êtes-vous sûr de vouloir refuser la réservation?')" type="submit" name="approve" value="2"><i class="fa fa-times" aria-hidden="true"> Refuser</i></button>
        </form>
    @else
        <form action="{{route('conge.approve',$conge->id)}}" method="POST">
            @csrf
            <button   class="btn btn-sm btn-info text-white" onclick="return confirm('Êtes-vous sûr de vouloir accepter la réservation?')" type="submit" name="approve" value="1"><i class="fa fa-check" aria-hidden="true"> Accepter</i></button>
        </form>
    @endif

        {{--<a href="{{route('conge.approve',$conge->id)}}" class="btn btn-sm btn-secondary">en attente</a>--}}
        {{--<a href="{{route('conge.pending',$conge->id)}}"  class="btn btn-sm text-infis ">Accepter<i class="fa fa-check" aria-hidden="true"></i></a>--}}
        {{--<a href="{{route('conge.reject',$conge->id)}}"  class="btn btn-sm text-danger"><i class="fa fa-times" aria-hidden="true">Refuser</i></a>--}}
        {{-- @else --}}
        @if($conge->statut==0)
            <span class="badge badge-pill badge-secondary">en attente</span>
        @elseif($conge->statut==1)
            <span class="badge badge-pill badge-info">accepté</span>
        @else
            <span class="badge badge-pill badge-danger">refusé</span>
        @endif
    {{-- @endif --}}

    </th>
