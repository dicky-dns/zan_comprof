<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.pesan.index');
    }

    public function datatable(Request $request)
    {
        $messages = ContactMessage::query();

        return DataTables::of($messages)
            ->addIndexColumn()
            ->addColumn('action', function ($messages) {
                $kode = encrypt($messages->id);

                $button =
                    '<a href="#" data-id="'.
                    $kode.
                    '" class="viewbtn" data-tooltip="tooltip" title="Lihat Pesan '.
                    $messages->name.
                    ' Data"><i class="bx bx-show-alt text-primary fs-5"></i></a>';

                return $button;
            })
            ->addColumn('dikirim', function ($messages) {
                return $messages->created_at->diffForHumans();
            })
            ->addColumn('tanggal', function ($messages) {
                return $messages->created_at->format('Y-m-d h:i');
            })
            ->toJson();
    }

    public function update($id)
    {
        $de = decrypt($id);

        $data = ContactMessage::find($de);

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
        $data = ContactMessage::find($de);

        if ($data) {
            $data->delete();

            return response()->json('Berhasil menghapus data');
        }
    }
}
