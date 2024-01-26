@extends('layouts.app')

@section('content')

      <div class="content">

        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Dashboard \</a>..</li>
            <li class=" active">Malheur</li>
          </ol>
        </nav>
        <h2 class="text-bold text-1100 mb-5">signaler un malheur</h2>

        <div class="">

            @foreach ($malheurs as $malheur)

                <form action="{{ route('signaler_malheur') }}" method="post" id="optionsForm">
                    @csrf
                    @if ($malheur->type === "Aide père" && $malheur->statut == 1)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="inlineCheckbox1" type="checkbox" name="option1" disabled>
                            <label class="form-check-label" for="inlineCheckbox1">Aide père</label>
                        </div>
                    @elseif ($malheur->type === "Aide père" && $malheur->statut == 0)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="inlineCheckbox1" type="checkbox" name="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Aide père</label>
                        </div>
                    @endif
                    @if ($malheur->type === "Aide mère" && $malheur->statut == 1)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="inlineCheckbox2" type="checkbox" name="option2" disabled>
                            <label class="form-check-label" for="inlineCheckbox2">Aide mère</label>
                        </div>
                    @elseif ($malheur->type === "Aide mère" && $malheur->statut == 0)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="inlineCheckbox2" type="checkbox" name="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Aide mère</label>
                        </div>
                    @endif
                    @endforeach
                    <div>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#verticallyCentered">Envoyer</button>
                    </div>
                    @include('malheur.modal-malheur')
                </form>


        </div>

      </div>

@endsection
