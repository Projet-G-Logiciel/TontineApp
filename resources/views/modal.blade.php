<div class="modal fade show" id="emprunt" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" style="display: none;" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" style="width: 90%"  role="document">
        <div class="modal-content">
            <div class="modal-header" >
                <h3 class="modal-title" id="largeModalLabel">Publier Une Suggestion</h3>
                <button type="button" style="float: right" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <form action="#" method="post" enctype="multipart/form-data"  class="form-horizontal">
                @csrf
                <div class="modal-body">
                {{--  --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">annuler</button>
                    <button type="submit" class="btn btn-success"><span id="submit-btn0">Confirmer</span><span class="loader" id="loader0" ></span></button>
                </div>
            </form>
        </div>
    </div>
</div>