<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\OrderDataTable;
use App\Repository\Order\OrderRepo;
use App\Http\Requests\Order\OrderRequest;

class OrderController extends Controller
{
	protected $order;

	public function __construct(OrderRepo $order)
	{
		$this->order = $order;
	}

	public function index(OrderDataTable $dataTable)
	{
		return $dataTable->render('back.order.index');
	}

	public function store(OrderRequest $request)
	{
		$order = $this->order->store($request->data());
		return response()->json([
        	'success' => true,
        	'message' => 'Event request sent successfully '
        ], 200);
	}
}
