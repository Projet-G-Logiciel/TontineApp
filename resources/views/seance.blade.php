@extends('layouts.app')

@section('content')
<div class="content">
    <div class="pb-5">
        @if ($seance == null)
    
            <div class="row g-4 mb-3">
                <div class="card p-2">
                    <h4 class="mb-2"> Date de la prochaine seance n'a pas encore ete fixe... </h4>
                </div>
            </div>
            
        @else

        <div class="row g-4 mb-3">
            <h4 class="mb-2"> Date de la prochaine seance: {{ $seance->dateSeance}} </h4>
        </div>
        @if((now()->format('Y-m-d') == $seance->dateSeance))
            <?php $i=0?>
        @else
            <?php $i=1?>
        @endif
        <div class="row">
            <div class="card m-3 col-md-5">
                <div class="card-header d-flex align-items-center">
                    <p class="logo-text ms-2 d-none d-sm-block">Versement</p>
                </div>
                    
                <div class="card-body col-12 col-md-9">
                    <div class="col-md-12 mb-3">
                        <label for="text-input" class=" form-control-label">Argent de la cotisation</label> <br>
                        <button type="button" class="btn btn-primary {{ $i == 0 ? '' : 'disabled'}}" data-bs-toggle="modal" data-bs-target="#cotisation"> Cotisation </button> <br>
                    </div>
                    <div class="col-md-12">
                        <label for="text-input" class=" form-control-label">Argent de l'epargne</label> <br>
                        <button class="btn btn-primary {{ $i == 0 ? '' : 'disabled'}} " type="button" data-bs-toggle="modal" data-bs-target="#epargne"> Epargne </button>
                    </div>
                </div>
            </div>

            <div class="card m-3 col-md-5">
                <div class="card-header d-flex align-items-center">
                    <p class="logo-text ms-2 d-none d-sm-block">Emprunt</p>
                </div>
                
                <div class="card-body col-12 col-md-9">
                    <div class="col-md-12 mb-3">
                        <label for="text-input" class=" form-control-label">Souhaitez-vous emprunter de l'argent?</label> <br>
                        <button type="button" class="btn btn-primary {{ $i == 0 ? '' : 'disabled'}}" data-bs-toggle="modal" data-bs-target="#emprunt"> Emprunter </button> <br>
                    </div>
                </div>
            </div>
        </div>
        

        {{-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#verticallyCentered">Add membre</button> --}}
        {{-- @include('membres.add_member-modal') --}}

        {{-- <div class="col-md-5">
            <label for="text-input" class=" form-control-label">Voulez-vous nous signaler un mahleur</label> <br>
            <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#malheur"> Allez-y!! </button>
        </div> --}}
    @endif
    </div>
</div>


@include('modal')
@endsection