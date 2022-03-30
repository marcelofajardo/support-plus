<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Payment\Repositories\PaymentRepositoryInterface;
use Modules\Purchases\Repositories\VendorRepositoryInterface;
use Modules\Sales\Repositories\CustomerRepositoryInterface;
use Modules\Sales\Repositories\InvoiceRepositoryInterface;
use Modules\Sales\Repositories\ProductRepositoryInterface;
use Modules\Setting\Repositories\UserRepositoryInterface;

class HomeController extends Controller
{
    public $userRepository, $paymentRepository, $customerRepository, $productRepository, $invoiceRepository, $vendorRepository;

    public function __construct(UserRepositoryInterface     $userRepository,
                                PaymentRepositoryInterface  $paymentRepository,
                                CustomerRepositoryInterface $customerRepository,
                                ProductRepositoryInterface  $productRepository,
                                InvoiceRepositoryInterface  $invoiceRepository,
                                VendorRepositoryInterface   $vendorRepository)
    {
        $this->middleware('auth');
        $this->userRepository = $userRepository;
        $this->paymentRepository = $paymentRepository;
        $this->customerRepository = $customerRepository;
        $this->productRepository = $productRepository;
        $this->vendorRepository = $vendorRepository;
        $this->invoiceRepository = $invoiceRepository;
    }


    public function index()
    {
        $data = [];
        if (isSuperAdmin()) {
            $data['totalUsers'] = $this->userRepository->totalUsers();
            $data['totalThisMonthUsers'] = $this->userRepository->totalThisMonthUsers();
            $data['totalEarning'] = $this->paymentRepository->totalEarning();
            $data['totalThisMonthEarning'] = $this->paymentRepository->totalThisMonthEarning();
            $data['recentJoins'] = $this->userRepository->recentJoin();
            $data['packagesTotalPurchasesByUsersData'] = $this->paymentRepository->packagesTotalPurchasesByUsersData();
            $data['incomeOf12Months'] = $this->paymentRepository->incomeOf12Months();
        } else {
            $data['totalCustomers'] = $this->customerRepository->totalCustomersInCurrentBusiness();
            $data['totalSalesProducts'] = $this->productRepository->totalSellsProductInCurrentBusiness();
            $data['totalPurchaseProducts'] = $this->productRepository->totalPurchaseProductInCurrentBusiness();
            $data['totalEstimates'] = $this->productRepository->totalPurchaseProductInCurrentBusiness();
            $data['totalInvoices'] = $this->productRepository->totalPurchaseProductInCurrentBusiness();
            $data['totalBills'] = $this->productRepository->totalPurchaseProductInCurrentBusiness();
            $data['totalVendors'] = $this->productRepository->totalPurchaseProductInCurrentBusiness();
            $data['totalExpenses'] = $this->productRepository->totalPurchaseProductInCurrentBusiness();
        }
        return view('home', $data);
    }

    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }
}
