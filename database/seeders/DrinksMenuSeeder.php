<?php

namespace Database\Seeders;

use App\Models\DrinksMenu;
use App\Models\DrinksMenuGroup;
use App\Models\DrinksMenuItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrinksMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carte = json_decode(file_get_contents(__DIR__ . '/carte.json'), true);

        foreach ($carte['groups'] as $group) {
            $dmGroup = DrinksMenuGroup::create([
                'title' => $group['title'],
                'columns' => $group['columns'],
                'show_abv' => $group['show_abv'],
                'notes' => $group['notes'],
            ]);

            foreach ($group['items'] as $item) {
                $dmItem = DrinksMenuItem::create([
                    'drinks_menu_group_id' => $dmGroup->id,
                    'category' => @$item['category'],
                    'name' => @$item['name'],
                    'details' => @$item['details'],
                    'note' => @$item['note'],
                    'base' => @$item['base'],
                    'weight' => @$item['weight'],
                    'abv' => @$item['abv'],
                    'non_alcoholic_available' => @$item['non_alcoholic_available'],
                    'mixer_not_included' => @$item['mixer_not_included'],
                    'prices' => @$item['prices'],
                ]);
            }
        }
    }
}
