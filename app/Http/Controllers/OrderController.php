<?php

namespace App\Http\Controllers;

use App\Models\DestinationService;
use App\Models\DestinationServiceOrder;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DestinationOrders = DestinationOrder::paginate(10);
        return view('customer.Pesanan.pesanan');
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
        return view('customer.Pesanan.pembayaran');
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
        return view('customer.Artikel.nextartikel');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DestinationServiceOrder  $destinationServiceOrder
     * @return \Illuminate\Http\Response
     */
    //Ubah
    public function edit(DestinationServiceOrder $destinationServiceOrder)
    {
        //
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
     * @param  \App\Models\DestinationServiceOrder  $destinationServiceOrder
     * @return \Illuminate\Http\Response
     */
    //Batal atau hapus
    public function destroy(DestinationServiceOrder $destinationServiceOrder)
    {
        //
    }
}
