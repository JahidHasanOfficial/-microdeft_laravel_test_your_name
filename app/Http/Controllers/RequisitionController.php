<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Requisition;
use Illuminate\Http\Request;

class RequisitionController extends Controller
{
    public function index()
    {
        $asset = Asset::all();
        $requisitions = Requisition::orderBy('id', 'desc')->paginate(10);
        return view('requisitions.index', compact('requisitions', 'asset'));
    }

    public function  create()
    {
        $assets = Asset::all();
        return view('requisitions.create', compact('assets'));
    }

    public function  store(Request $request)
    {
        $validation = validator($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'asset_id' => 'required',
            'designation' => 'required',
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $requisitions = new Requisition();
        $requisitions->name = $request->name;
        $requisitions->phone = $request->phone;
        $requisitions->email = $request->email;
        $requisitions->asset_id = $request->asset_id;
        $requisitions->designation = $request->designation;
        $requisitions->save();

        return redirect()->route('requisitions.index')->with('success', 'Requisition created successfully');
    }

    public function  show($id)
    {
        $requisitions = Requisition::find($id);
        return view('requisitions.show', compact('requisitions'));
    }   

    public function  edit($id)
    {
        $requisitions = Requisition::find($id);
        return view('requisitions.edit', compact('requisitions'));
    }

    public function  update(Request $request, $id)
    {
       $validation = validator($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'asset_id' => 'required',
            'designation' => 'required',
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $requisitions = Requisition::find($id);
        $requisitions->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'asset_id' => $request->asset_id,
            'designation' => $request->designation
        ]);
        $requisitions->save();

        return redirect()->route('requisitions.index')->with('success', 'Requisition updated successfully');
    }


    public function  destroy($id)
    {
        $requisitions = Requisition::find($id);
        $requisitions->delete();
        return redirect()->route('requisitions.index')->with('success', 'Requisition deleted successfully');
    }
}
