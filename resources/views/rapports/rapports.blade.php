@extends('layouts.app')

{{ $i=0 }}
@section('content')
<div class="content">
  <nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="#!">Dashboard \</a>..</li>
      <li class=" active">Rapports</li>
    </ol>
  </nav>
  <h2 class="text-bold text-1100 mb-5">Les Rapports de la tontine</h2>
<div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
    <div class="table-responsive scrollbar ms-n1 ps-1">
      <table class="table table-sm fs--1 mb-0">
        <thead>
          <tr>
            <th class="sort align-middle" scope="col" data-sort="customer" style="width:15%; min-width:200px;">SEANCES</th>
            <th class="sort align-middle" scope="col" data-sort="customer" style="width:15%; min-width:200px;">DATE</th>

            </tr>
        </thead>
        <tbody class="list" id="members-table-body">
            @foreach ($seances as $seance)
            <?php $i++ ?>
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="customer align-middle white-space-nowrap"><a class="d-flex align-items-center text-900 text-hover-1000" href="{{ route('rapport_seance', ['id'=>$seance->id]) }}">seance {{ $i }}</a></td>
                    <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold" href="mailto:annac34@gmail.com">{{ $seance->created_at }}</a></td>
                </tr>

            @endforeach
        </tbody>
      </table>
    </div>
  </div>



    </div>
      @endsection
