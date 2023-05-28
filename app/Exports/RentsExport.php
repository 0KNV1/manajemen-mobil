<?php
namespace App\Exports;

use App\Models\Rent;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class RentsExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Rent::Select('user_id','status','car_id','total_consume')->get();
    }
    public function headings(): array
    {
        return [
            'User_id',
            'Name',
            'Driver_id',
            'Consume_oil'
        ];
    }
}
