<?php

namespace App\Http\Controllers;

use App\Transaction_head;
use App\Transaction_detail;
use Illuminate\Http\Request;
class TransactionHeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transaction-mgmt.transaction_index');
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
    public function store(Request $request)
    {
        $customer = new Transaction_head;
        $customer->discount= $request['vat'];
        $customer->discount= $request['discount'];
        $customer->mode_of_payment= $request['mode_of_payment'];
        $customer->cumulative_amount= $request['cumulative_amount'];
        $customer->amount_tendered= $request['amount_tendered'];
        $customer->change_due= $request['change_due'];
        $customer->customer_name= $request['customer_name'];
        $customer->customer_phone= $request['customer_phone'];
        $customer->customer_email= $request['customer_email'];
        // $customer->save();
        if($customer->save()){
            $id= $customer->id;
            foreach($request->item_code as $key => $val){
                $data = array('transaction_head_id'=>$id,
                            'item_code'=>$request['item_code'] [$key],
                            'qty'=>$request['qty'] [$key],
                            'unit_price'=>$request['unit_price'] [$key],
                            'total_price'=>$request['total_price'] [$key],
                            'item_name'=> 'name',
                            'available_quantity'=> 1,);
                        Transaction_detail::insert($data);
            }
        }
        return redirect()->route('transaction-mgmt.index');

        /*for ($i=0; $i < count($request['qty']); ++$i) 
        {
            $items= new Transaction_detail;        
            $items->item_code = $request['item_code'][$i];
            $items->qty = $request['qty'][$i];
            $items->unit_price= $request['unit_price'][$i];
            $items->total_price= $request['total_price'][$i];
            $items->transaction_head_id= 1;
            $items->item_name= 'name';
            $items->available_quantity= 1;
            $items->save();
            return redirect()->route('transaction-mgmt.index');
        }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
