<?php

namespace App\Http\Controllers;

use App\Exports\OrdersExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;


class ActionController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
        // $user = Auth::user();
        // $order =  $user->api()->rest('GET','/admin/orders');
        // dd($order);
    }
    public function download(){

        $collection = collect(
            [
             ['date' => '1/12/2021', 'amount' => 10, 'country' => 'Italy','vat'=>22],
             ['date' => '1/12/2021', 'amount' => 13, 'country' => 'Italy','vat'=>22],
             ['date' => '2/12/2021', 'amount' => 24, 'country' => 'Italy','vat'=>10],
             ['date' => '2/12/2021', 'amount' => 9, 'country' => 'Italy','vat'=>4],
             ['date' => '2/12/2021', 'amount' => 30, 'country' => 'Germany','vat'=>15],
             ['date' => '2/12/2021', 'amount' => 10, 'country' => 'France','vat'=>10],
             ['date' => '3/12/2021', 'amount' => 12, 'country' => 'France','vat'=>19],
            //  ['date' => '3/12/2021', 'amount' => 80, 'country' => 'Spain','vat'=>0],
            //  ['date' => '3/12/2021', 'amount' => 10, 'country' => 'Germany','vat'=>0],
       ]
    );

    $dates = $collection->groupBy('date')->map(function ($rows) {
        return $rows->groupBy('country')->map(function ($row) {
            return $row->groupBy('vat')->map(function ($r) {
                return $r->sum('amount');
            });
        });
    });

    $dates = json_decode(json_encode($dates));
    $country = $collection->groupBy('country')->map(function ($row) {
        return $row->groupBy('vat')->map(function ($r) {
            return $r->sum('amount');
        });
    });
    $country = json_decode(json_encode($country));


    dump($dates,$country);

    return view('dashboard',compact('dates','country'));

// $data = json_decode(json_encode($collection->groupBy('date')));
// $countrys = json_decode(json_encode($collection->groupBy('country')));

// foreach($data as $date => $value){
//     $value = json_decode(json_encode(collect($value)->groupBy('country')));

//         dump($date);
//         foreach($value as $country => $vl){
//             $vl = json_decode(json_encode(collect($vl)->groupBy('vat')));
//                 dump($country,$vl);
//         }
// }
// dump($data);
        // return view('dashboard',compact('data','countrys'));
        $data = array(
                'year' => 2018,
                'month' => 12,
                'company' => "Abc",
                'office' =>'xyz',
                'vat' => 222,
                'country' => $country,
                'dates' => $dates

        );
        return Excel::download(new OrdersExport($data), 'orders.xlsx');
    }

    public function view()
    {

        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile(('file.xlsx'));
$reader->setReadDataOnly(true);
$reader->load('file.xlsx');
// dd($reader);
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Html($reader);

// $writer->save("05featuredemo.htm");
        // return view('dashboard');
    }


}
