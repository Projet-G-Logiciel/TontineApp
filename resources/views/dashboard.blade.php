@extends('layouts.app')

@section('content')
    <div class="content">
      <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#!">Dashboard \</a></li>
        </ol>
      </nav>
    <div class="pb-5">
    <div class="row g-4">
            <h4 class="mb-2">    Date de la prochaine seance : </h4>
            <h5 class="mb-2">> Soldes dans les caisses :</h5>
        <div class="row align-items-center gx-0 gy-1 ">
            <div class="col-8 col-md-auto">
            <div class="d-flex align-items-center">
                <div class="ms-3">
                    <div class="card p-3" style="max-width:20rem;">
                        <a class="dropdown-item fw-bold text-warning" href="#!">
                          <span class="fas fa-dollar-sign me-1"></span>
                          <span>Solde compte epargne</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <span>100000</span>
                      </div>
                </div>
            </div>
            </div>
            <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center">
                <div class="ms-3">
                    <div class="card p-3" style="max-width:20rem;">
                        <a class="dropdown-item fw-bold text-warning" href="#!">
                          <span class="fas fa-dollar-sign me-1"></span>
                          <span>Solde compte epargne</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <span>100000</span>
                      </div>
                </div>
            </div>
            </div>
            <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center">
                <div class="ms-3">
                    <div class="card p-3" style="max-width:20rem;">
                        <a class="dropdown-item fw-bold text-warning" href="#!">
                          <span class="fas fa-dollar-sign me-1"></span>
                          <span>Solde compte epargne</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <span>100000</span>
                      </div>
                </div>
            </div>
            </div>
        </div>
        <hr class="bg-200 mb-6 mt-4">
        <div class="row flex-between-center mb-4 g-3">
            <div class="col-auto">
            <h3>Total sells</h3>
            <p class="text-700 lh-sm mb-0">Payment received across all channels</p>
            </div>
        </div>

@endsection


