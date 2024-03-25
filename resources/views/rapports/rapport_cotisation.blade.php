@extends('layouts.app')


@section('content')
<div class="content">
  <nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="#!">Dashboard \</a>..</li>
      <li class=" active">Emprunt</li>
    </ol>
  </nav>
  <h2 class="text-bold text-1100 mb-5">Rapports de la cotisation</h2>
        <div id="members" data-list='{"valueNames":["customer","email","mobile_number","city","last_active","joined"],"page":10,"pagination":true}'>
          <div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="col col-auto">
              <div class="search-box">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search members" aria-label="Search" />
                  <span class="fas fa-search search-box-icon"></span>
                </form>
              </div>
            </div>

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
                    <th class="sort align-middle" scope="col" data-sort="email" style="width:15%; min-width:200px;">Date</th>
                    </tr>
                </thead>
                <tbody class="list" id="members-table-body">
                    @foreach ($emprunts as $emprunt)
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="fs--1 align-middle ps-0 py-3">
                            <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/32.webp","name":"Carry Anna"},"email":"annac34@gmail.com","mobile":"+912346578","city":"Budapest","lastActive":"34 min ago","joined":"Dec 12, 12:56 PM"}' /></div>
                            </td>
                            <td class="customer align-middle white-space-nowrap"><a class="d-flex align-items-center text-900 text-hover-1000" href="#!">{{ $emprunt->name }}</a></td>
                            <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold" href="mailto:annac34@gmail.com">{{$emprunt->montant}}</a></td>
                            <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-1100" href="tel:+912346578">@if ($emprunt->status == 1)
                                <span class="badge bg-warning me-1 mb-1" style="font-size: 15px">En cours</span>
                            @else
                            <span class="badge bg-success me-1 mb-1" style="font-size: 15px">Remboursé</span>
                            @endif</a></td>
                            <td class="city align-middle white-space-nowrap text-900">{{$emprunt->created_at}}</td>
                        </tr>

                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>



    </div>
      @endsection
