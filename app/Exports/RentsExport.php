<?php
namespace App\Exports;

use App\Models\Rent;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UsersExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Rent::Select('user_id','name','driver_id','consume_oil')->get();
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
