@extends('layouts.app')

@section('content')
{{-- <style>
 
   .img-profil{
    border-radius: 50%;
    border: 3px solid yellow;
   }
</style> --}}
<div class="content">
    <div class="pb-5">
        <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#!">Dashboard \</a>..</li>
              <li class=" active">Paramètres de la tontine</li>
            </ol>
          </nav>
        <div class="card mb-4 col-md-8">
            <div class="card-header d-flex align-items-center">
                <img src="{{ asset('assets/img/logos/logo.png') }}" class="rounded-circle border border-primary" alt="Tontine" width="80">
                <p class="logo-text ms-2 d-none d-sm-block">Tontine</p>
            </div>
            @if(Auth::user()->profil->nom_profil == 'President' || Auth::user()->profil->nom_profil == 'Secretaire')
                <div class="card-body col-12 col-md-12">
                    <div class="row">
                        <div class="offset-md-8 col-md-4"><a href="{{route('log')}}" class="btn btn-info">Consulter les logs</a></div>
                    </div>
                    <div>
                        <label for="text-input" class=" form-control-label">Frequence de la reunion :</label>
                    </div>

                    <div>
                        <input type="radio" name="frequence" class="mx-3" value="0" id="" onclick="moreInfo()" >Par semaine
                        <input type="radio" name="frequence" class="mx-3" value="1" id="" onclick="moreInfo()" >Par mois
                    </div>


                        <div id="formulaire" class="mt-3" style="display: none;">
                            <div class="row form-group">
                                <div>
                                    <label for="text-input" class=" form-control-label">Jour de la reunion</label>
                                </div>
                                <div class="col-md-6">
                                    {{-- <input type="text-input" id="input-nom" name="vrai_nom" placeholder="Quand debut votre Tontine??" value="{{ $cause->objet?? old('vrai_nom') }}"  class="form-control"> --}}
                                    <select class="form-control" id="dayOfWeek">
                                        <option value="#" selected>Choisir un jour de la semaine</option>
                                        <option value="0">Dimanche</option>
                                        <option value="1">Lundi</option>
                                        <option value="2">Mardi</option>
                                        <option value="3">Mercredi</option>
                                        <option value="4">Jeudi</option>
                                        <option value="5">Vendredi</option>
                                        <option value="6">Samedi</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="text-input" class=" form-control-label">Quantieme semaine du mois</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" id="weekNumber" name="" class="form-control">
                                </div>

                                <div class="col-md-6 mt-1">
                                    <button class="btn btn-primary" onclick="afficherDates()">Afficher les Dates</button>
                                </div>
                                <form action="{{route('settingMeetStore')}}" method="post" onsubmit="return validateForm()">
                                    @csrf
                                        <ul id="result"></ul>
                                        <div id="resultat"></div>
                                        <input type="submit" value="Valider" class="form-control">
                                    </form>
                            </div>
                        </div>
                        
                    
                </div>
            @else
            <div class="card-body col-12 col-md-9">
                <div>
                    <label for="text-input" class=" form-control-label">Cet onglet n'est accessible que par les membres du comité administratif</label>
                </div>
            </div>
            @endif
        </div>
    </div>

<script>

    var datesIsShow = false;


     function moreInfo() {
      var formulaire = document.getElementById("formulaire");
      formulaire.style.display = "block";
    }
    function removeInfo() {
      var formulaire = document.getElementById("formulaire");
      formulaire.style.display = "none";
      
    }

    function afficherDates() {
      const dayOfWeek = parseInt(document.getElementById('dayOfWeek').value);
      const weekNumber = parseInt(document.getElementById('weekNumber').value);

      const currentDate = new Date();
      const currentYear = currentDate.getFullYear();

      // Réinitialiser la liste des résultats
      document.getElementById('result').innerHTML = '';
      let list_date =[];

      for (let i = 0; i <= 11; i++) {
        const firstDayOfYear = new Date(currentYear, i, 1);

        let firstDayOfWeek = new Date(firstDayOfYear);
        const currentDayOfWeek = firstDayOfWeek.getDay();

        // Ajustement pour obtenir le premier jour de la semaine spécifiée
        let diff = dayOfWeek - currentDayOfWeek;
        if (diff < 0) {
          diff += 7;
        }
        firstDayOfWeek.setDate(firstDayOfWeek.getDate() + diff);

        // Ajout de jours pour atteindre la semaine spécifiée
        firstDayOfWeek.setDate(firstDayOfWeek.getDate() + 7 * (weekNumber - 1));

        const targetDate = new Date(firstDayOfWeek);
        targetDate.setDate(targetDate.getDate() + 1); // Correction pour afficher la bonne date

        // Ajouter le résultat à la liste
        const listItem = document.createElement('li');
        listItem.textContent = `La date correspondante est : ${targetDate.toISOString().slice(0, 10)}`;
        list_date[i]=targetDate.toISOString().slice(0, 10);
        document.getElementById('result').appendChild(listItem);
        //document.getElementById('result').appendChild("<input type='hidden' name='dateSeance"+i+"'value='"+targetDate.toISOString().slice(0, 10)+"'>");
      }

      for(j=0;j<12;j++){
        const listItem = document.createElement('div');
        listItem.innerHTML = "<input type='hidden' name='dateSeance"+j+" 'value='"+list_date[j]+"'>";
        document.getElementById('resultat').appendChild(listItem);
        //document.getElementById('resultat').appendChild("<input type='hidden' name='dateSeance"+j+"'value='"+list_date[j]+"'>");
      }
      datesIsShow = true;
    }

    function validateForm() {
        if (!datesIsShow) {
            alert("Veuillez d'abord afficher les dates.");
            return false;
        }
        return true;
    }
</script>
@endsection