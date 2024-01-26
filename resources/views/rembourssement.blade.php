@extends('layouts.app')

 
@section('content')
        

        
<div class="content">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Montant_Rembourser</th>
            <th scope="col">Montant_Restant</th>
            <th scope="col">Numero User</th>
            <th scope="col">Numero Emprunt</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            
            @foreach ($rembourssements as $rembous)
          <tr>
            <th scope="row">{{$rembous->id}}</th>
            <td>{{$rembous->montant_rembourser}}</td>
            <td>{{$rembous->montant_restant}}</td>
            <td>{{$rembous->user_id}}</td>
            <td>{{$rembous->emprunt_id}}</td>
          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
      @endsection