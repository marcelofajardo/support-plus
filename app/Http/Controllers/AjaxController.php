<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeStatusRequest;
use App\Repositories\AjaxRepositoryInterface;
use Illuminate\Support\Facades\Response;
use Modules\Setting\Models\State;

class AjaxController extends Controller
{
    protected $ajaxRepository;

    public function __construct(AjaxRepositoryInterface $ajaxRepository)
    {

        $this->ajaxRepository = $ajaxRepository;
    }
//$status = $this->ajaxRepository->changeTableStatus($request->validated());
    public function changeStatus(ChangeStatusRequest $request)
    {
        $status = $this->ajaxRepository->changeTableStatus($request->validated());
        if ($status) {
            return Response::json([
                'msg' => trans('common.Successfully Change Status')
            ], 200);
        } else {
            return Response::json([
                'msg' => trans('common.Something Went Wrong')
            ], 500);
        }
    }

    public function getStatusByCountryId($country_id)
    {
        $status = State::where('country_id', $country_id)->pluck('name', 'id');
        return response()->json($status);
    }
}
