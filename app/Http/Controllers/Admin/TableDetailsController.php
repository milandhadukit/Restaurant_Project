<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookTable;
use App\Models\TableDetail;

class TableDetailsController extends Controller
{
    public function addTableDetail()
    {
        return view('Admin.addtable_details');
    }

    public function storeTableDetail(Request $request)
    {
        $request->validate([
            'table_no' => 'required',
            'no_chair' => 'required',
            'descreption'=>'nullable|min:2',
           
        ]);
        try {
           

            $tableDetails = new TableDetail();
            $tableDetails->table_no = $request->table_no;
            $tableDetails->no_chair = $request->no_chair;
            $tableDetails->descreption = $request->descreption;
          
            // dd($tableDetails);
            $tableDetails->save();
            return redirect()
                ->back()
                ->with('message', ' Add Successfully');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function viewTableDetails()
    {
        $tableDetails=TableDetail::paginate(5);
        return view('Admin.viewtabledetails',compact('tableDetails'));
    }


    public function editTableDetails($id)
    {
        $details=TableDetail::find($id);
        return view('Admin.edit_tabledetails',compact('details'));
    }

    public function updateTableDetails($id,Request $request)
    {
        $request->validate([
            'table_no' => 'required',
            'no_chair' => 'required',
            'descreption'=>'nullable|min:2',
           
        ]);
        try {
           

            $tableDetails = TableDetail::find($id);
            $tableDetails->table_no = $request->table_no;
            $tableDetails->no_chair = $request->no_chair;
            $tableDetails->descreption = $request->descreption;
          
            // dd($tableDetails);
            $tableDetails->save();
            return redirect()
                ->back()
                ->with('message', ' Update Successfully');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

}
