<?php
namespace App\Models;
 class Listing {
    public static function all(){
        return [
            [
                'id' => 0,
                'title' => 'Shure',
                'description' => 'lore ipsum uguyg kguegfyg bkhbduyfw uwyegWYEG Ugugweu'

            ],
            [
                'id' => 1,
                'title' => 'Pamberi',
                'description' => 'lore ipsum uguyg kguegfyg bkhbduyfw uwyegWYEG Ugugweu'

            ]
            ];
    }

    public static function find($id){
        $listings = self::all();
        foreach($listings as $key){
            if ($key['id'] == $id){
                return $key;
            }
        }
    }
 }
