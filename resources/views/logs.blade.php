@extends('layouts.app')

@section('content')


    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
{{-- <h1>bonjour madame</h1> --}}
      <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Dashboard \</a>..</li>
            <li class=" active">Journal des logs</li>
          </ol>
        </nav>
        <h2 class="text-bold text-1100 mb-5">Liste des logs</h2>
        <div id="members" data-list='{"valueNames":["customer","email","mobile_number","city","last_active","joined"],"page":10,"pagination":true}'>
          <div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="col col-auto">
              <div class="search-box">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search" aria-label="Search" />
                  <span class="fas fa-search search-box-icon"></span>
                </form>
              </div>
            </div>
            <div class="col-auto">
              <div class="d-flex align-items-center">
                {{-- <button class="btn btn-link text-900 me-4 px-0"><span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button> --}}
                <a href="{{ route('export_log') }}" class="btn btn-link text-900 me-4 px-0"><button class="btn btn-link text-900 me-4 px-0"><span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button></a>
                {{-- voici le bout de code qui gere l'accés --}}
            </div>
          </div>
          <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
            <div class="table-responsive scrollbar ms-n1 ps-1">
              <table class="table table-sm fs--1 mb-0">
                <thead>
                    <tr>
                        <th class="sort align-middle" scope="col" data-sort="customer" style="width:10%; min-width:200px;">Utilisateur</th>
                        <th class="sort align-middle" scope="col" data-sort="customer" style="width:15%; min-width:200px;">Description du log</th>
                        <th class="sort align-middle" scope="col" data-sort="customer" style="width:15%; min-width:200px;">Date de creation</th>
                    </tr>
                </thead>
                <tbody class="list" id="members-table-body">
                    @foreach ($logs as $log)
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="customer align-middle white-space-nowrap"><a class="d-flex align-items-center text-900 text-hover-1000" href="#!">{{ $log->name }} {{ $log->surname }}</a></td>
                            <td class="email align-middle white-space-nowrap">{{ $log->log }}</td>
                            <td class="mobile_number align-middle white-space-nowrap">{{ $log->created_at }}</td>
                        </tr>

                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>



@endsection
