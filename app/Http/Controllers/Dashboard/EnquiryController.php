<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductEnquiry;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class EnquiryController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.enquiry.index');
    }

    public function datatable(Request $request)
    {
        $data = ProductEnquiry::query();

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
                $kode = encrypt($data->id);

                $button =
                    '<a href="#" data-id="'.
                    $kode.
                    '" class="viewbtn" data-tooltip="tooltip" title="Lihat enquiry '.
                    $data->name.
                    ' Data"><i class="bx bx-show-alt text-primary fs-5"></i></a>';

                return $button;
            })
            ->addColumn('produk', function ($data) {
                $pr = Product::find($data->product_id);

                return $pr ? $pr->name : '-';
            })
            ->addColumn('dikirim', function ($data) {
                return $data->created_at->diffForHumans();
            })
            ->addColumn('tanggal', function ($data) {
                return $data->created_at->format('Y-m-d h:i');
            })
            ->toJson();
    }

    public function update($id)
    {
        $de = decrypt($id);

        $data = ProductEnquiry::find($de);

        if (null == $data->read_at) {
            $data->read_at = Carbon::now();
            $data->save();

            return response()->json('Berhasil menandai dibaca');
        } else {
            $data->read_at = null;
            $data->save();

            return response()->json('Berhasil menandai belum dibaca');
        }
    }

    public function delete($id)
    {
        $de = decrypt($id);
        $data = ProductEnquiry::find($de);

        if ($data) {
            $data->delete();

            return response()->json('Berhasil menghapus data');
        }
    }
}
