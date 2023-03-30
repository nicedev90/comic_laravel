<?php
	namespace App\Models;

	class Listing {
		public static function all() {
			return [
				    [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'loresm  adasdad'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'loresm  adasdad'
            ]
			];
		}

		public static function find($id) {
			$listings = self::all();

			foreach($listings as $listing) {
				if($listing['id'] == $id) {
					return $listing;
				}
			}
		}
	}