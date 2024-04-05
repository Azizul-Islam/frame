<?php
namespace App\Exports;

use App\Models\Perticipant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ParticipantsExport implements FromCollection, WithMapping, WithHeadings
{
    public function collection()
    {
        return Perticipant::latest()->get();
    }

    public function map($participant): array
    {
        return [
            $participant->id,
            $participant->name,
            $participant->mobile,
            asset('backend/participant/' . $participant->photo)
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Mobile',
            'Photo',
        ];
    }
}
