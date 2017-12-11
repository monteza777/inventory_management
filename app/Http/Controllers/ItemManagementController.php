<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Item;

class ItemManagementController extends Controller
{
    protected $redirectTo = '/item-management';
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Item::paginate(10);
        return view('items-mgmt.item_index',compact('items'));
    }

    public function create()
    {
        return view('items-mgmt.item_create');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
            'item_code'=>'required|unique:items',
            'item_description'=>'required|unique:items',
            ]);

        $item_code = $request['item_code'];
        $item_description = $request['item_description'];
        $uom = $request['uom'];
        $qty = $request['qty'];
        $buying_price = $request['buying_price'];
        $selling_price = $request['selling_price'];
        // $amount = $request['amount'];

        $items = new Item();
        // db -> FORM NAME
        $items->item_code=$item_code;
        $items->item_description=$item_description;
        $items->uom=$uom;
        $items->qty=$qty;
        $items->buying_price=$buying_price;
        $items->selling_price=$selling_price;
         $items->save();
        return redirect('/items-mgmt');
    }

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
        $items = Item::find($id);
        $data = [
            'items' => $items,
        ];
        return view('items-mgmt.item_edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $items = Item::find($id);
        $items->item_code = $request['item_code'];
        $items->item_description = $request['item_description'];
        $items->uom = $request['uom'];
        $items->qty = $request['qty'];
        $items->buying_price = $request['buying_price'];
        $items->selling_price = $request['selling_price'];

        $items->save();
        return redirect('items-mgmt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect('items-mgmt');
    }
}
