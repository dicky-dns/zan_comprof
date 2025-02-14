<?php

declare(strict_types=1);

namespace App\Exports;

use App\Models\Category;
use App\Models\SubCategory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Cell\DataValidation;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ProductTemplateExport implements FromCollection, ShouldAutoSize, WithEvents, WithHeadings, WithStyles
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect([]);
    }

    public function headings(): array
    {
        return [
            'Nama Produk',
            'Kategori Produk',
            'Subkategori Produk',
            'Spesifikasi',
            'Bahan-Bahan',
            'Manfaat',
            'Efek',
            'Cara Penggunaan',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();

                $categories = Category::pluck('name')->toArray();
                $subcategories = SubCategory::pluck('name')->toArray();

                $this->addDataToSheet($sheet, $categories, 'AA');
                $this->addDataToSheet($sheet, $subcategories, 'AB');

                $this->setDropdown($sheet, 'B', 500, 'AA2:AA'.(count($categories) + 1));
                $this->setDropdown($sheet, 'C', 500, 'AB2:AB'.(count($subcategories) + 1));
            },
        ];
    }

    private function addDataToSheet(Worksheet $sheet, array $data, string $startColumn)
    {
        $row = 2;
        foreach ($data as $item) {
            $sheet->setCellValue("{$startColumn}{$row}", $item);
            $row++;
        }
    }

    private function setDropdown(Worksheet $sheet, string $column, int $rowCount, string $range)
    {
        for ($row = 2; $row <= $rowCount; $row++) {
            $validation = $sheet->getCell("{$column}{$row}")->getDataValidation();
            $validation->setType(DataValidation::TYPE_LIST);
            $validation->setErrorStyle(DataValidation::STYLE_INFORMATION);
            $validation->setAllowBlank(false);
            $validation->setShowDropDown(true);
            $validation->setFormula1($range);
        }
    }
}
