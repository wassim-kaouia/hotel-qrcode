<?php

namespace App\Observers;

use App\Models\App;
use App\Models\Category;

class AppObserver
{
    /**
     * Handle the App "created" event.
     *
     * @param  \App\Models\App  $app
     * @return void
     */
    public function created(App $app)
    {   
        //Supermarche category
        $supermarket = new Category();
        $supermarket->title = 'Supermatché';
        $supermarket->app_id = $app->id;
        $supermarket->created_at = now();
        $supermarket->updated_at = now();
        $supermarket->icon_id = 1;
        $supermarket->save();

        //Transport category
        $transport = new Category();
        $transport->title = 'Transport';
        $transport->app_id = $app->id;
        $transport->created_at = now();
        $transport->updated_at = now();
        $transport->icon_id = 1;
        $transport->save();

        //Activité category
        $activite = new Category();
        $activite->title = 'Activités';
        $activite->app_id = $app->id;
        $activite->created_at = now();
        $activite->updated_at = now();
        $activite->icon_id = 1;
        $activite->save();

        //Pratiques category
        $pratique = new Category();
        $pratique->title = 'Pratiques';
        $pratique->app_id = $app->id;
        $pratique->created_at = now();
        $pratique->updated_at = now();
        $pratique->icon_id = 1;
        $pratique->save();

        //Tourisme category
        $tourisme = new Category();
        $tourisme->title = 'Tourisme';
        $tourisme->app_id = $app->id;
        $tourisme->created_at = now();
        $tourisme->updated_at = now();
        $tourisme->icon_id = 1;
        $tourisme->save();

        //Plats category
        $plats = new Category();
        $plats->title = 'Plats/Boissons';
        $plats->app_id = $app->id;
        $plats->created_at = now();
        $plats->updated_at = now();
        $plats->icon_id = 1;
        $plats->save();

        //Médicale category
        $medicale = new Category();
        $medicale->title = 'Médicale';
        $medicale->app_id = $app->id;
        $medicale->created_at = now();
        $medicale->updated_at = now();
        $medicale->icon_id = 1;
        $medicale->save();

        //Bienetre category
        $bienetre = new Category();
        $bienetre->title = 'Bien-être';
        $bienetre->app_id = $app->id;
        $bienetre->created_at = now();
        $bienetre->updated_at = now();
        $bienetre->icon_id = 1;
        $bienetre->save();

        //Shopping category
        $shopping = new Category();
        $shopping->title = 'Shopping';
        $shopping->app_id = $app->id;
        $shopping->created_at = now();
        $shopping->updated_at = now();
        $shopping->icon_id = 1;
        $shopping->save();

        //Sortir category
        $sortir = new Category();
        $sortir->title = 'Sortir';
        $sortir->app_id = $app->id;
        $sortir->created_at = now();
        $sortir->updated_at = now();
        $sortir->icon_id = 1;
        $sortir->save();

    }
    
    /**
     * Handle the App "updated" event.
     *
     * @param  \App\Models\App  $app
     * @return void
     */
    public function updated(App $app)
    {
        //
    }

    /**
     * Handle the App "deleted" event.
     *
     * @param  \App\Models\App  $app
     * @return void
     */
    public function deleted(App $app)
    {
        //
    }

    /**
     * Handle the App "restored" event.
     *
     * @param  \App\Models\App  $app
     * @return void
     */
    public function restored(App $app)
    {
        //
    }

    /**
     * Handle the App "force deleted" event.
     *
     * @param  \App\Models\App  $app
     * @return void
     */
    public function forceDeleted(App $app)
    {
        //
    }
}