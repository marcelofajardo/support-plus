<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Repositories\ProfileRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Setting\Repositories\CityRepositoryInterface;
use Modules\Setting\Repositories\CountryRepositoryInterface;
use Modules\Setting\Repositories\StateRepositoryInterface;

class ProfileController extends Controller
{
    public $countryRepository, $stateRepository, $cityRepository, $profileRepository;

    public function __construct(CountryRepositoryInterface $countryRepository,
                                ProfileRepositoryInterface $profileRepository,
                                StateRepositoryInterface   $stateRepository,
                                CityRepositoryInterface    $cityRepository)
    {
        $this->countryRepository = $countryRepository;
        $this->stateRepository = $stateRepository;
        $this->cityRepository = $cityRepository;
        $this->profileRepository = $profileRepository;
    }

    public function show()
    {
        $countries = $this->countryRepository->allInArray();
        $states = $this->stateRepository->allStateByCurrentUserCountryInArray();
        $cities = $this->cityRepository->allCityByCurrentUserStateInArray();
        return view('auth.profile', compact('countries', 'states', 'cities'));
    }

    public function update(ProfileUpdateRequest $request)
    {
        $this->profileRepository->changeProfile($request->validated());

        return redirect()->back()->with('success', trans('common.Profile updated'));
    }

    public function changePassword()
    {
        return view('auth.change-password');

    }

    public function changePasswordSubmit(ChangePasswordRequest $request)
    {
        if (!Hash::check($request->password, Auth::user()->password)) {
            return redirect()->back()->with('error', trans('common.Authentication failed'));
        } else {
            auth()->user()->update(['password' => Hash::make($request->password)]);
            return redirect()->back()->with('success', trans('common.Password Changed Successfully'));
        }
    }
}
