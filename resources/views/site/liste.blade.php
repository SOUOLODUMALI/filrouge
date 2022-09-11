@extends('layouts.app')

@section('content')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des fieuls</h3>
    <div class="mt-4">
        <div class="d-flex justify-content-between mb-4">
            <a href="{{route('fieul.create')}}" class="btn btn-primary">Ajouter un fieul</a>
        </div>
        @if(session()->has("successDelete"))
        <div class="alert alert-sucess">
            {{session()->get('successDelete')}}
        </div>
        @endif
        <div class="center">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>

                        <th scope="col">N°</th>
                        <th scope="col">date_naissance</th>
                        <th scope="col">nom</th>
                        <th scope="col">prenom</th>
                        <th scope="col">telephone</th>
                        <th scope="col">pass</th>
                        <th scope="col">date_d'inscription</th>
                        <th scope="col">editer</th>
                        <th scope="col">suprimer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fieul as $fieul)
                    <tr>
                        <th scope="row">{{$loop->index + 1}}</th>
                        <td>{{$fieul->date_naissance}}</td>
                        <td>{{$fieul->nom}}</td>
                        <td>{{$fieul->prenom}}</td>
                        <td>{{$fieul->telephone}}</td>
                        <td>{{$fieul->pass}}</td>
                        <td>{{$fieul->created_at}}</td>
                        <td>
			
					<a href="{{ route('fieul.edit', $fieul) }}"> Modifier</a>
				</td>
				<td>
			
					<form method="POST" action="{{ route('fieul.destroy', $fieul) }}" >
						
						@csrf
						 <input type="hidden" name="_method" value="DELETE"> 
						@method("DELETE")
						<input type="submit" value="x Supprimer" >
					</form>
				</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function cnf() {
        let ret = confirm("Voulez vous retirer cet abonne de la liste ? ");
        if (ret) {
            return true;
        }
        return false;
    }
</script>
@endsection