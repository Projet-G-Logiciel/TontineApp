@extends('layouts.app')

 
@section('content')       
<div class="content">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Montant</th>
            <th scope="col">Status</th>
            <th scope="col">Numero User</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            
            @foreach ($emprunts as $emprunt)
          <tr>
            <th scope="row">{{$emprunt->id}}</th>
            <td>{{$emprunt->montant}}</td>
            <td>{{$emprunt->status}}</td>
            <td>{{$emprunt->user_id}}</td>
          </tr>

          @endforeach
        </tbody>
      </table>
      
        
    </div>
      @endsection