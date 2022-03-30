<?php

namespace Modules\FrontendManager\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\FrontendManager\DataTables\EmailSubscriptionDataTable;
use Modules\FrontendManager\Http\Requests\EmailSubscriptionRequest;
use Modules\FrontendManager\Http\Requests\SendEmailToSubscription;
use Modules\FrontendManager\Repositories\EmailSubscriptionRepositoryInterface;


class EmailSubscriptionController extends Controller
{
    protected $emailSubscriptionsRepository;

    public function __construct(EmailSubscriptionRepositoryInterface $emailSubscriptionsRepository)
    {
        $this->emailSubscriptionsRepository = $emailSubscriptionsRepository;
    }

    public function index(EmailSubscriptionDataTable $dataTable)
    {
        return $dataTable->render('frontendmanager::email-subscription.index');
    }

    public function store(EmailSubscriptionRequest $request)
    {
        $this->emailSubscriptionsRepository->store($request->validated());
        return redirect()->back()
            ->with('success', trans('common.Created successfully'));
    }


    public function destroy($id)
    {
        $this->emailSubscriptionsRepository->deleteById($id);
        return redirect()->route('email-subscriptions.index')
            ->with('success', trans('common.Deleted successfully'));
    }

    public function mail()
    {
        return view('frontendmanager::email-subscription.mail');
    }

    public function mailSubmit(SendEmailToSubscription $request)
    {
        $mails = $this->emailSubscriptionsRepository->allInArray('id', 'email');
        $this->emailSubscriptionsRepository->sendingRequest($mails, $request->validated());
        return redirect()->route('email-subscriptions.index')
            ->with('success', trans('common.Submitted Successfully'));
    }
}
