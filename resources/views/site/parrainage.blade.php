@extends('layouts.app')

@section('content')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste de Parrainage</h3>
    <div class="mt-4">
        <div class="d-flex justify-content-between mb-4">
            <a href="{{route('parrain.create')}}" class="btn btn-primary">parrainer</a>
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
                        <th scope="col">nom</th>
                        <th scope="col">prenom</th>
                        <th scope="col">date_naissance</th>
                        <th scope="col">email</th>
                        <th scope="col">password</th>
                        <th scope="col">fieul</th>
                        <th scope="col">temps</th>
                        <th scope="col">editer</th>
                        <th scope="col">suprimer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($parrains as $parrain)
                   
                    <tr>
                        <th scope="row">{{$loop->index + 1}}</th>
                        <td>{{$parrain->nom}}</td>
                        <td>{{$parrain->prenom}}</td>
                        <td>{{$parrain->date_naissance}}</td>
                        <td>{{$parrain->email}}</td>
                        <td>{{$parrain->password}}</td>
                        <td>{{$parrain->fieul_id}}</td>
                        <td>{{$parrain->created_at}}</td>
                        <td>
			
					<a href="{{route('parrain.edit', $parrain) }}"> Modifier</a>
				</td>
				<td>
			
					<form method="POST" action="{{ route('parrain.destroy',$parrain)}}" >
						
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
        let ret = confirm("Voulez vous annuler ce parrainage ? ");
        if (ret) {
            return true;
        }
        return false;
    }
</script>
@endsection