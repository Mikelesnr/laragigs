<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae metus ut massa mattis posuere sit amet non quam. Praesent est lacus, sagittis vel ultricies vitae, congue sit amet tortor. '
            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae metus ut massa mattis posuere sit amet non quam. Praesent est lacus, sagittis vel ultricies vitae, congue sit amet tortor. '
            ]
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
};