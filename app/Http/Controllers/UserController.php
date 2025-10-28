<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $userList = User::all();
        return response()->json($userList);
    }

    public function show($identifier) {
        $user = User::where('identifier', $identifier)
            ->with(['userDetails', 
            'userImages', 
            'userDetails.userHoroscopeImages', 
            'userDetails.genders', 
            'userDetails.cities', 
            'userDetails.educations', 
            'userDetails.occupationCategory', 
            'userDetails.industry', 
            'userDetails.salaries',
            'userDetails.complexion',
            'userDetails.religion',
            'userDetails.maritalStatus',
            'userDetails.employmentType',
            'userDetails.bodyType',
            'userDetails.heights',
            'userDetails.physicalStatus',
            'userDetails.petPreference',
            'userDetails.dietPreference',
            'userDetails.travelPreference',
            'userDetails.smokingHabits',
            'userDetails.drinkingHabits',
            'userDetails.familyStatus',
            'userDetails.birthStars',
            'userDetails.zodiacs',
            'userDetails.birthLagnam',
            ])
            ->first();

            if ($user && $user->userDetails) {
                $user->userDetails->interestsList = $user->userDetails->getInterestsListAttribute();
                $user->userDetails->hobbiesList = $user->userDetails->getHobbiesListAttribute();
                $user->userDetails->favoriteCuisine = $user->userDetails->getFavoriteCuisineListAttribute();
                $user->userDetails->musicGenre = $user->userDetails->getMusicGenreListAttribute();
                $user->userDetails->sportsFitness = $user->userDetails->getSportsFitnessListAttribute();
                $user->userDetails->LanguageList = $user->userDetails->getLanguagesKnownValuesAttribute();
            }

            // Add raw email and mobile to the response
            $user->raw_email = $user->getRawOriginal('email');
            $user->raw_mobile = $user->getRawOriginal('mobile');

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        return response()->json($user);
    }
}
