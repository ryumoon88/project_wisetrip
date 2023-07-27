<?php

namespace App\Http\Controllers;

use App\Models\DestinationService;
use App\Models\DestinationServiceOrder;
use App\Models\Destination;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = DestinationServiceOrder::latest()->paginate(10);
        return view('customer.Pesanan.pesanan',['orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Pesan
    public function store(Request $request)
    {
        // dump($request->jadwal_id);
        $validatedData=$request->validate([
            'date_booking'=>'required',
            'quantity'=>'required',
            'service_id'=>'required'
        ]);
        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['status'] = "Pending";
        // dump($validatedData);
        DestinationServiceOrder::create($validatedData);
        return redirect('/order');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DestinationServiceOrder  $destinationServiceOrder
     * @return \Illuminate\Http\Response
     */
    // Tampilkan halaman pembayaran
    public function show(DestinationServiceOrder $destinationServiceOrder)
    {
        return view('customer.Pesanan.pembayaran',['order'=>$destinationServiceOrder]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    //Ubah
    public function edit($id)
    {
        $order = DestinationServiceOrder::find($id);
        // dump($order);

        $destinations = Destination::inRandomOrder()->limit(3)->get();
        $images = $order->service->destination->images;
        $destination = $order->service->destination;
        $services = DestinationService::all();
        return view('customer.Destinasi.detaildestinasi-update',['destination'=>$destination,'destinations'=>$destinations,'images'=>$images, 'services' => $services, 'order'=>$order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DestinationServiceOrder  $destinationServiceOrder
     * @return \Illuminate\Http\Response
     */
    //Bayar
    public function update(Request $request, DestinationServiceOrder $destinationServiceOrder)
    {
        return view('customer.Pesanan.pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    //Batal atau hapus
    public function destroy($id)
    {
        DestinationServiceOrder::destroy($id);
        return redirect('/order');
    }
}
