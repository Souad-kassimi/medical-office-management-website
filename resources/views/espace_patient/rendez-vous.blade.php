@extends('espace_patient.index')
@section('main')
<div style="background-image: linear-gradient(to left,#F5F5DC,#FFFACD)">
    <form action="" class="p-5">
    <div class="container col-lg-8 mt-4 p-4">
        <div class="card p-4">
            <div class="row">
                <h1 class="text-center">Prendre Rendez-Vous</h1>
                <div class="col-5 ms-5 mt-3 ps-3">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Entre votre Nom" class="form-control">
                </div>

                <div class="col-5  mt-3">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" placeholder="Entre votre Prénom" class="form-control">
                </div>

                <div class="col-10 ms-5  mt-3 ps-3">
                    <label for="phone">Téléphone</label>
                    <input type="text" name="phone" id="phone" placeholder="Entre votre Téléphone" class="form-control">
                </div>

                <div class="col-5 ms-5 mt-3 ps-3">
                    <label for="cin">CIN</label>
                    <input type="text" name="cin" id="cin" placeholder="Entre votre CIN" class="form-control">
                </div>

                <div class="col-5  mt-3">
                    <label for="rendez-vous">Date de rendez-vous</label>
                    <input type="date" name="rendez-vous" id="rendez-vous"  class="form-control">
                </div>
                <div class="col-5 ms-5 mt-3 ps-3">
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" id="ville" placeholder="Entre votre Ville" class="form-control">
                </div>
                <div class="col-5  mt-3 ">
                    <label for="genre">Genre</label>
                    <select name="genre" id="genre" class="form-select">
                        <option value="femme">Femme</option>
                        <option value="homme">Homme</option>
                    </select>
                </div>
               <div class="col-10 ms-5 mt-3 ps-3">
                <input type="submit" class="form-control" value="Rendez-Vous" style="background-image: linear-gradient(to right,#00BFFF,#FFFACD)">
               </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection
