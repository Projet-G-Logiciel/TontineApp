<div class="modal fade" id="verticallyCentered" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verticallyCenteredModalLabel">Ajouter un membre</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
      </div>
      <div class="modal-body">
          <form action="{{ route('add') }}" method="post">
              @csrf
              <div class="mb-3">
                <label class="form-label" for="basic-form-name">Nom</label>
                <input class="form-control" id="basic-form-name" type="text" name="nom">
              </div>
              <div class="mb-3">
                  <label class="form-label" for="basic-form-name">Prenom</label>
                  <input class="form-control" id="basic-form-name" type="text" name="prenom">
              </div>
              <div class="mb-3">
                  <label class="form-label" for="basic-form-name">Sexe</label>
                  <select name="sexe"class="form-control" required>
                    <option value="">Faire un choix</option>
                      <option> Masculin </option>
                      <option> Feminin </option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-form-name">telephone</label>
                <input class="form-control" id="basic-form-name" type="number" name="number">
            </div>
              <div class="mb-3">
                <label class="form-label" for="basic-form-email">Addresse Email</label>
                <input class="form-control" id="basic-form-email" type="email" name="email">
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-form-password">Profil</label>
                <select name="profil" id="profil"  class="form-control" required>
                  <option value="">Faire un choix</option>
                  @foreach ($profils as $profil)
                    <option value="{{ $profil->id}}"> {{ $profil->nom_profil}} </option>
                  @endforeach
              </select>
              </div>

              <button class="btn btn-primary" type="submit">Ajouter</button>
              <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
            </form>
      </div>
      {{-- <div class="modal-footer"><button class="btn btn-primary" type="button">Okay</button><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div> --}}
    </div>
  </div>
</div>

