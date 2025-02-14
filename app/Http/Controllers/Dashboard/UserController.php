<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard.users.index');
    }

    public function datatable(Request $request)
    {
        $data = User::query();

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
                $kode = encrypt($data->id);

                $button =
                    '<a href="#" data-id="'.
                    $kode.
                    '" class="editbtn" data-tooltip="tooltip" title="Edit Data '.
                    $data->name.
                    ' Data"><i class="bx bx-edit-alt text-primary fs-5"></i></a> 
                    
                    <a href="#" data-id="'.
                    $kode.
                    '" class="deletebtn" data-tooltip="tooltip" title="Hapus Data '.
                    $data->name.
                    ' Data"><i class="bx bx-trash-alt text-danger fs-5"></i></a>';

                return $button;
            })
            ->toJson();
    }

    public function add(Request $request)
    {
        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->save();

        return response()->json('Berhasil menyimpan data');
    }

    public function update(Request $request)
    {
        $data = User::find($request->update_id);

        if ($data) {
            $data->name = $request->name;
            $data->email = $request->email;
            if (null != $request->password) {
                $data->password = Hash::make($request->password);
            }
            $data->save();

            return response()->json('Berhasil mengubah data');
        }

        return response()->json('Gagal mengubah data', 400);
    }

    public function delete($id)
    {
        $de = decrypt($id);
        $data = User::find($de);

        if ($data) {
            $data->delete();

            return response()->json('Berhasil menghapus data');
        }

        return response()->json('Gagal menghapus data', 400);
    }
}
