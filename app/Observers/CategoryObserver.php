<?php

namespace App\Observers;

use App\Models\Category;
use App\Models\Interest;

class CategoryObserver
{
    /**
     * Handle the Category "created" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function created(Category $category)
    {
        //bus
        $bus = new Interest();
        $bus->title = 'Bus';
        $bus->category_id = $category->id;
        $bus->created_at = now();
        $bus->updated_at = now();
        $bus->icon_id = 1;
        $bus->save();
        
        //metro
        $metro = new Interest();
        $metro->title = 'Metro';
        $metro->category_id = $category->id;
        $metro->created_at = now();
        $metro->updated_at = now();
        $metro->icon_id = 1;
        $metro->save();

        //taxi
        $taxi = new Interest();
        $taxi->title = 'Taxi';
        $taxi->category_id = $category->id;
        $taxi->created_at = now();
        $taxi->updated_at = now();
        $taxi->icon_id = 1;
        $taxi->save();

        //Aeroport
        $aeroport = new Interest();
        $aeroport->title = 'Aéroport';
        $aeroport->category_id = $category->id;
        $aeroport->created_at = now();
        $aeroport->updated_at = now();
        $aeroport->icon_id = 1;
        $aeroport->save();

        //Trains
        $trains = new Interest();
        $trains->title = 'Trains';
        $trains->category_id = $category->id;
        $trains->created_at = now();
        $trains->updated_at = now();
        $trains->icon_id = 1;
        $trains->save();

        //cinema
        $cinema = new Interest();
        $cinema->title = 'Cinémas';
        $cinema->category_id = $category->id;
        $cinema->created_at = now();
        $cinema->updated_at = now();
        $cinema->icon_id = 1;
        $cinema->save();

        //quilles
        $quilles = new Interest();
        $quilles->title = 'Quilles';
        $quilles->category_id = $category->id;
        $quilles->created_at = now();
        $quilles->updated_at = now();
        $quilles->icon_id = 1;
        $quilles->save();

        //gymnase
        $gymnase = new Interest();
        $gymnase->title = 'Gymnase';
        $gymnase->category_id = $category->id;
        $gymnase->created_at = now();
        $gymnase->updated_at = now();
        $gymnase->icon_id = 1;
        $gymnase->save();

        //randonne
        $randonne = new Interest();
        $randonne->title = 'Randonnée';
        $randonne->category_id = $category->id;
        $randonne->created_at = now();
        $randonne->updated_at = now();
        $randonne->icon_id = 1;
        $randonne->save();

        //foret
        $foret = new Interest();
        $foret->title = 'Forêt';
        $foret->category_id = $category->id;
        $foret->created_at = now();
        $foret->updated_at = now();
        $foret->icon_id = 1;
        $foret->save();

        //karting
        $karting = new Interest();
        $karting->title = 'Karting';
        $karting->category_id = $category->id;
        $karting->created_at = now();
        $karting->updated_at = now();
        $karting->icon_id = 1;
        $karting->save();

        //parcs
        $parcs = new Interest();
        $parcs->title = 'Parcs';
        $parcs->category_id = $category->id;
        $parcs->created_at = now();
        $parcs->updated_at = now();
        $parcs->icon_id = 1;
        $parcs->save();

        //loisirs
        $loisirs = new Interest();
        $loisirs->title = 'Loisirs';
        $loisirs->category_id = $category->id;
        $loisirs->created_at = now();
        $loisirs->updated_at = now();
        $loisirs->icon_id = 1;
        $loisirs->save();

        //casino
        $casino = new Interest();
        $casino->title = 'Casino';
        $casino->category_id = $category->id;
        $casino->created_at = now();
        $casino->updated_at = now();
        $casino->icon_id = 1;
        $casino->save();

        //monter a cheval
        $cheval = new Interest();
        $cheval->title = 'Monter à cheval';
        $cheval->category_id = $category->id;
        $cheval->created_at = now();
        $cheval->updated_at = now();
        $cheval->icon_id = 1;
        $cheval->save();

        //le golf
        $golf = new Interest();
        $golf->title = 'Le golf';
        $golf->category_id = $category->id;
        $golf->created_at = now();
        $golf->updated_at = now();
        $golf->icon_id = 1;
        $golf->save();

        //activite exterieurs
        $activite = new Interest();
        $activite->title = 'Activités Extérieurs';
        $activite->category_id = $category->id;
        $activite->created_at = now();
        $activite->updated_at = now();
        $activite->icon_id = 1;
        $activite->save();

        //atm
        $atm = new Interest();
        $atm->title = 'ATM';
        $atm->category_id = $category->id;
        $atm->created_at = now();
        $atm->updated_at = now();
        $atm->icon_id = 1;
        $atm->save();

        //banques
        $banques = new Interest();
        $banques->title = 'Banques';
        $banques->category_id = $category->id;
        $banques->created_at = now();
        $banques->updated_at = now();
        $banques->icon_id = 1;
        $banques->save();

        //presse
        $presse = new Interest();
        $presse->title = 'Presse';
        $presse->category_id = $category->id;
        $presse->created_at = now();
        $presse->updated_at = now();
        $presse->icon_id = 1;
        $presse->save();

        //tabbac
        $tabac = new Interest();
        $tabac->title = 'Le tabac';
        $tabac->category_id = $category->id;
        $tabac->created_at = now();
        $tabac->updated_at = now();
        $tabac->icon_id = 1;
        $tabac->save();

        //essence
        $essence = new Interest();
        $essence->title = 'Stations Essence';
        $essence->category_id = $category->id;
        $essence->created_at = now();
        $essence->updated_at = now();
        $essence->icon_id = 1;
        $essence->save();

        //Poster
        $poster = new Interest();
        $poster->title = 'Poster';
        $poster->category_id = $category->id;
        $poster->created_at = now();
        $poster->updated_at = now();
        $poster->icon_id = 1;
        $poster->save();

        //superette
        $superette = new Interest();
        $superette->title = 'Superettes';
        $superette->category_id = $category->id;
        $superette->created_at = now();
        $superette->updated_at = now();
        $superette->icon_id = 1;
        $superette->save();

        //supermarkets
        $supermarket = new Interest();
        $supermarket->title = 'Supermarket';
        $supermarket->category_id = $category->id;
        $supermarket->created_at = now();
        $supermarket->updated_at = now();
        $supermarket->icon_id = 1;
        $supermarket->save();

        //boulangerie
        $boulangerie = new Interest();
        $boulangerie->title = 'Boulangeries';
        $boulangerie->category_id = $category->id;
        $boulangerie->created_at = now();
        $boulangerie->updated_at = now();
        $boulangerie->icon_id = 1;
        $boulangerie->save();

        //pecheurs
        $pecheurs = new Interest();
        $pecheurs->title = 'Pêcheurs';
        $pecheurs->category_id = $category->id;
        $pecheurs->created_at = now();
        $pecheurs->updated_at = now();
        $pecheurs->icon_id = 1;
        $pecheurs->save();

         //spiritieuse
         $spiritieuse = new Interest();
         $spiritieuse->title = 'Boissons Spiritieuses';
         $spiritieuse->category_id = $category->id;
         $spiritieuse->created_at = now();
         $spiritieuse->updated_at = now();
         $spiritieuse->icon_id = 1;
         $spiritieuse->save();

         //bouchers
         $bouchers = new Interest();
         $bouchers->title = 'Bouchers';
         $bouchers->category_id = $category->id;
         $bouchers->created_at = now();
         $bouchers->updated_at = now();
         $bouchers->icon_id = 1;
         $bouchers->save();

         //Marchants de legumes
         $marchants = new Interest();
         $marchants->title = 'Marchants de légumes';
         $marchants->category_id = $category->id;
         $marchants->created_at = now();
         $marchants->updated_at = now();
         $marchants->icon_id = 1;
         $marchants->save();

         //Office de Tourisme 
         $tourisme = new Interest();
         $tourisme->title = 'Office de Tourisme';
         $tourisme->category_id = $category->id;
         $tourisme->created_at = now();
         $tourisme->updated_at = now();
         $tourisme->icon_id = 1;
         $tourisme->save();

         //Galeries d'Art	
         $galerie = new Interest();
         $galerie->title = "Galeries d'Art";
         $galerie->category_id = $category->id;
         $galerie->created_at = now();
         $galerie->updated_at = now();
         $galerie->icon_id = 1;
         $galerie->save();

         //Inévitable		
         $inevitable = new Interest();
         $inevitable->title = "Inévitable";
         $inevitable->category_id = $category->id;
         $inevitable->created_at = now();
         $inevitable->updated_at = now();
         $inevitable->icon_id = 1;
         $inevitable->save();

         //marché		
         $marche = new Interest();
         $marche->title = "Marché";
         $marche->category_id = $category->id;
         $marche->created_at = now();
         $marche->updated_at = now();
         $marche->icon_id = 1;
         $marche->save();

         //musée	
         $musee = new Interest();
         $musee->title = "Musée";
         $musee->category_id = $category->id;
         $musee->created_at = now();
         $musee->updated_at = now();
         $musee->icon_id = 1;
         $musee->save();

         //restaurants	
         $restaurant = new Interest();
         $restaurant->title = "Restaurants";
         $restaurant->category_id = $category->id;
         $restaurant->created_at = now();
         $restaurant->updated_at = now();
         $restaurant->icon_id = 1;
         $restaurant->save();


         //les cafés	
         $cafe = new Interest();
         $cafe->title = "Les cafés";
         $cafe->category_id = $category->id;
         $cafe->created_at = now();
         $cafe->updated_at = now();
         $cafe->icon_id = 1;
         $cafe->save();

         //fast food	
         $fast = new Interest();
         $fast->title = "Fast Food";
         $fast->category_id = $category->id;
         $fast->created_at = now();
         $fast->updated_at = now();
         $fast->icon_id = 1;
         $fast->save();

         //brunch	
         $brunch = new Interest();
         $brunch->title = "Brunch";
         $brunch->category_id = $category->id;
         $brunch->created_at = now();
         $brunch->updated_at = now();
         $brunch->icon_id = 1;
         $brunch->save();

         //pharmacie	
         $pharmacie = new Interest();
         $pharmacie->title = "Pharmacies";
         $pharmacie->category_id = $category->id;
         $pharmacie->created_at = now();
         $pharmacie->updated_at = now();
         $pharmacie->icon_id = 1;
         $pharmacie->save();

         //hopitaux	
         $hopital = new Interest();
         $hopital->title = "Hôpitaux";
         $hopital->category_id = $category->id;
         $hopital->created_at = now();
         $hopital->updated_at = now();
         $hopital->icon_id = 1;
         $hopital->save();

         //veterinaires	
         $veterinaire = new Interest();
         $veterinaire->title = "Vétérinaires";
         $veterinaire->category_id = $category->id;
         $veterinaire->created_at = now();
         $veterinaire->updated_at = now();
         $veterinaire->icon_id = 1;
         $veterinaire->save();

         //Infirmières	
         $inferm = new Interest();
         $inferm->title = "Infirmières";
         $inferm->category_id = $category->id;
         $inferm->created_at = now();
         $inferm->updated_at = now();
         $inferm->icon_id = 1;
         $inferm->save();

         //dentiste	
         $dentiste = new Interest();
         $dentiste->title = "Dentistes";
         $dentiste->category_id = $category->id;
         $dentiste->created_at = now();
         $dentiste->updated_at = now();
         $dentiste->icon_id = 1;
         $dentiste->save();

         //Le bureau du Docteur		
         $docteur = new Interest();
         $docteur->title = "Le bureau du Docteur";
         $docteur->category_id = $category->id;
         $docteur->created_at = now();
         $docteur->updated_at = now();
         $docteur->icon_id = 1;
         $docteur->save();

         //Salon de Beauté		
         $beaute = new Interest();
         $beaute->title = "Salon de Beauté";
         $beaute->category_id = $category->id;
         $beaute->created_at = now();
         $beaute->updated_at = now();
         $beaute->icon_id = 1;
         $beaute->save();

         //Salon de Coiffure		
         $coiffure = new Interest();
         $coiffure->title = "Salon de Coiffure";
         $coiffure->category_id = $category->id;
         $coiffure->created_at = now();
         $coiffure->updated_at = now();
         $coiffure->icon_id = 1;
         $coiffure->save();

         //Nos Favoris			
         $favoris = new Interest();
         $favoris->title = "Nos Favoris";
         $favoris->category_id = $category->id;
         $favoris->created_at = now();
         $favoris->updated_at = now();
         $favoris->icon_id = 1;
         $favoris->save();
                       
         //Centres Commerciaux		
         $centre = new Interest();
         $centre->title = "Centres Commerciaux";
         $centre->category_id = $category->id;
         $centre->created_at = now();
         $centre->updated_at = now();
         $centre->icon_id = 1;
         $centre->save();
         
         //Barres		
         $barres = new Interest();
         $barres->title = "Barres";
         $barres->category_id = $category->id;
         $barres->created_at = now();
         $barres->updated_at = now();
         $barres->icon_id = 1;
         $barres->save();

         //Discotèques			
         $disco = new Interest();
         $disco->title = "Discotèques";
         $disco->category_id = $category->id;
         $disco->created_at = now();
         $disco->updated_at = now();
         $disco->icon_id = 1;
         $disco->save();
         
         
    }

    /**
     * Handle the Category "updated" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function updated(Category $category)
    {
        //
    }

    /**
     * Handle the Category "deleted" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function deleted(Category $category)
    {
        //
    }

    /**
     * Handle the Category "restored" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function restored(Category $category)
    {
        //
    }

    /**
     * Handle the Category "force deleted" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function forceDeleted(Category $category)
    {
        //
    }
}