@extends('layouts.app')

 
@section('content')
        

        
<div class="content">
    <table class="table">
        <thead>
          <tr>
            
            <th scope="col">Montant_Rembourser</th>
            <th scope="col">Montant_Restant</th>
            <th scope="col">Date du jour</th>
            
          </tr>
        </thead>
        <tbody class="table-group-divider">
            
            @foreach ($remboursements as $remboursement)
          <tr>
            
            <td>{{$remboursement->montant_rembourser}}</td>
            <td>{{$remboursement->montant_restant}}</td>
            <td>{{$remboursement->created_at}}</td>
            
          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
      @endsection