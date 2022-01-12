<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;


class OrdersExport implements FromView, WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $data = [];
     public function __construct($arr)
     {
        $this->data = $arr;
     }
    public function view(): View
    {
        return view('exports.orders',$this->data);
    }
    public function columnWidths(): array
    {
        return [
            'A' => 15,
            'C' => 28,
            // 'G' => 15,
            // 'H' => 18,


        ];
    }
}
