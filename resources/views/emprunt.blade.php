@extends('layouts.app')

 
@section('content')       
<div class="content">
  <nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="#!">Dashboard \</a>..</li>
      <li class=" active">Emprunt</li>
    </ol>
  </nav>
  <h2 class="text-bold text-1100 mb-5">Liste des Emprunts</h2>
  <div id="members" data-list='{"valueNames":["customer","email","mobile_number","city","last_active","joined"],"page":10,"pagination":true}'>
    <div class="row align-items-center justify-content-between g-3 mb-4">
      <div class="col col-auto">
        <div class="search-box">
          <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search members" aria-label="Search" />
            <span class="fas fa-search search-box-icon"></span>
          </form>
        </div>
      </div>
      <h4 class="text-bold text-1100 mb-5">Liste des Demandes d'emprunts</h4>
      <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
        <div class="table-responsive scrollbar ms-n1 ps-1">
          <table class="table table-sm fs--1 mb-0">
            <thead>
              <tr>
                <th class="white-space-nowrap fs--1 align-middle ps-0">
                  <div class="form-check mb-0 fs-0"><input class="form-check-input" id="checkbox-bulk-members-select" type="checkbox" data-bulk-select='{"body":"members-table-body"}' /></div>
                </th>
                <th class="sort align-middle" scope="col" data-sort="customer" style="width:15%; min-width:200px;">Nom</th>
                <th class="sort align-middle" scope="col" data-sort="customer" style="width:15%; min-width:200px;">Montant</th>
                <th class="sort align-middle" scope="col" data-sort="customer" style="width:15%; min-width:200px;">Status</th>
                <th class="sort align-middle" scope="col" data-sort="email" style="width:15%; min-width:200px;">Date</th>
                <th class="sort align-middle" scope="col" data-sort="email" style="width:15%; min-width:200px;">Action</th>
                </tr>
            </thead>
            <tbody class="list" id="members-table-body">
              @foreach ($demandeEmprunts as $demandeEmprunt)

                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle ps-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/32.webp","name":"Carry Anna"},"email":"annac34@gmail.com","mobile":"+912346578","city":"Budapest","lastActive":"34 min ago","joined":"Dec 12, 12:56 PM"}' /></div>
                  </td>
                  <td class="customer align-middle white-space-nowrap">{{ $demandeEmprunt->name }}</td>
                  <td class="email align-middle white-space-nowrap">{{$demandeEmprunt->montant}}</td>
                  <td class="">@if ($demandeEmprunt->status == 0)
                    <span class="badge bg-warning me-1 mb-1" style="font-size: 15px">En cours</span></td>
                  @endif
                  <td class="city align-middle white-space-nowrap text-900">{{$demandeEmprunt->created_at}}</td>
                  <td>
                    <div class="font-sans-serif"><button class="btn btn-sm dropdown-toggle dropdown-caret-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2">
                        <a class="dropdown-item text-success" href="{{route('storeEmprunt', ['montant'=>$demandeEmprunt->montant, 'id_user'=>$demandeEmprunt->user_id, 'id'=>$demandeEmprunt->id])}}">Accepter</a>
                        <a class="dropdown-item text-danger" href="{{route('crashEmprunt', ['id'=>$demandeEmprunt->id])}}">Refuser</a>
                      </div>
                    </div>
                  </td>
                </tr>

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>    
  </div>
</div>
@endsection