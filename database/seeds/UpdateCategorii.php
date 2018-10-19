<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class UpdateCategorii extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorii = [
        	'Liga 1',
        	'Liga 2',
        	'Liga 3 Seria 1',
        	'Liga 3 Seria 2',
        	'Liga 3 Seria 3',
        	'Liga 3 Seria 4',
        	'Liga 3 Seria 5',
        	'Liga 4',
        	'Liga 5 Nord',
        	'Liga 5 Sud',
        	'Liga 5 Vest',
        	'Liga 6 Nord',
        	'Liga 6 Sud',
        	'Alte Sporturi',
        	'Arbitraj',
        	'Diverse',
        	'Editorial',
        	'Special'
        ];

        Categorie::truncate();

        foreach ($categorii as $categorie) {
        	$new_cat = new Categorie;

        	$new_cat->nume = $categorie;
        	$new_cat->save();
        }
    }
}
