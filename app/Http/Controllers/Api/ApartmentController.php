<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Apartment;
use App\Service;

use Illuminate\Database\Eloquent\Builder;

class ApartmentController extends Controller
{
    public function index()
    {
    }
    public function search(Request $request)
    {
        $data = $request->all();

        $KmRaggio = $data['km'];
        $rooms = $data['rooms'];
        $beds = $data['beds'];
        $position = $data['position'];
        $searchedLat = $position['lat'];
        $searchedLng = $position['lng'];
        $apartmentDistance = [];
        $checkedServices = $data['checkedServices'];



        //aperta chiamata ma non chiusa per avere continui aggiornamenti
        $apartments = Apartment::where('id', '>=', 1);


        $apartments = $apartments->where('rooms', '>=', $rooms)->where('beds', '>=', $beds)->get();

        foreach ($apartments as $key => $apartment) {
            $apartmentLat = floatval($apartment->latitude);
            $apartmentLng = floatval($apartment->longitude);
            $distance = distance($searchedLat, $searchedLng, $apartmentLat, $apartmentLng);
            $services = $apartment->services;
            if ($distance > $KmRaggio) {
                $apartments->forget($key);
            } else {
                array_push($apartmentDistance, $distance);
            }
        //     if (in_array($checkedServices, $services)) {
        //         var_dump('testing');
        //     }
        }

        
        return response()->json([
            'response' => true,
            // 'count' =>  $apartments->count(),
            'results' =>  [
                'apartments' => $apartments,
                // 'distances' => $distances,
                // 'rooms' => $rooms,
                // 'beds' => $beds,
                // 'raggioKm' => $KmRaggio,
                // 'position' => $position,
                // 'searchedLat' => $searchedLat,
                // 'searchedLng' => $searchedLng,
                // 'apartmentLat' => $apartmentLat,
                // 'apartmentLng' => $apartmentLng, 
                // 'distance' => $apartmentDistance,
                'services' => $services,
                'checked' => $checkedServices,
                // 'filteredAPp' => $filteredApartments 
                    
            ],
        ]);
    }
}
function distance($lat1, $lon1, $lat2, $lon2)
{
    $r = 6372.797; // mean radius of Earth in km
    $latFrom = deg2rad($lat1);
    $lonFrom = deg2rad($lon1);
    $latTo = deg2rad($lat2);
    $lonTo = deg2rad($lon2);

    $latDelta = $latTo - $latFrom;
    $lonDelta = $lonTo - $lonFrom;

    $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
    cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
    return $angle * $r;

    
}
