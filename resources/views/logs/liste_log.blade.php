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
            <li class=" active">Listes des logs</li>
          </ol>
        </nav>
        <h2 class="text-bold text-1100 mb-5">Liste des Logs</h2>
        <div id="members" data-list='{"valueNames":["customer","email","mobile_number","city","last_active","joined"],"page":10,"pagination":true}'>

          
          {{-- voici le bout de code qui gere l'accés --}}
          @if(Auth::user()->profil->nom_profil == 'President' || Auth::user()->profil->nom_profil == 'Secretaire')
          
          <div class="row align-items-center justify-content-between g-3 mb-4">
            
            <div class="col-auto">
              <div class="d-flex align-items-center">
                
                <a href="{{ route('export_log') }}"><button class="btn btn-primary" type="button" ><span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button></a>

            </div>
            @include('membres.add_member-modal')
          </div>
          <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
            <div class="table-responsive scrollbar ms-n1 ps-1">
              <table class="table table-sm fs--1 mb-0">
                <thead>
                  <tr>
                    <th class="white-space-nowrap fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" id="checkbox-bulk-members-select" type="checkbox" data-bulk-select='{"body":"members-table-body"}' /></div>
                    </th>
                    <th class="sort align-middle" scope="col"  style="width:65%; min-width:200px;"><div class="flex-1 me-sm-3">Description</div></th>
                    <th class="sort align-middle" scope="col"  style="width:25%; min-width:200px;">Date & Heure</th>
                    </tr>
                </thead>
                <tbody class="list" id="members-table-body">
                    @foreach ($membres as $membre)
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="fs--1 align-middle ps-0 py-3">
                              <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"  /></div>
                            </td>
                            <td class="customer align-middle white-space-nowrap">
                              <div class="flex-1 me-sm-3">decription ici</div>
                            </td>
                            <td class="email align-middle white-space-nowrap">
                              <h5 class="fs--2 text-black"><div class="text-black">Date & Heure</div></h5>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>   
          @else
          <div class="card mb-4 col-md-8">
            <div class="card-body col-12 col-md-9">
              <div>
                  <label for="text-input" class=" form-control-label">Cet onglet n'est accessible que par les membres du comité administratif</label>
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>



@endsection
