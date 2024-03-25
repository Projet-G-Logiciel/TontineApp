<div class="modal fade" id="remboursement" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" style="display: none;" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" style="width: 90%"  role="document">
        <div class="modal-content">
            <div class="modal-header" >
                <h3 class="modal-title" id="largeModalLabel">Remboursement</h3>
                <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg></button>
            </div>
            <form action="{{ route('storeCotisation') }}" method="post" enctype="multipart/form-data"  class="form-horizontal">
                @csrf
                <div class="modal-body">
                    {{-- <div class="mb-3">
                        <label class="form-label" for="basic-form-name">Objetif de l'emprunt</label>
                        <input class="form-control" id="basic-form-name" type="hidden" name="objet">
                    </div> --}}
                    <div class="mb-3">
                        <label class="form-label" for="basic-form-name">Montant du Rembousement</label>
                        <input class="form-control" id="cotisation" type="number" name="montant_cotisation">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-success"><span id="submit-btn0">Confirmer</span><span class="loader" id="loader0" ></span></button>
                </div>
            </form>
        </div>
    </div>
</div>
