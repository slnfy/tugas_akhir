<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Models\User;
use Illuminate\Http\Request;
use App\Helpers\AuthCommon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('pages.user.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $body = view('pages.user.create')->render();
        $footer = '<button type="button" class="btn btn-secondary" onclick="Global.closeModal();" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="save()">Save</button>';

        return [
            'title' => 'Create User',
            'body' => $body,
            'footer' => $footer
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required',
        ]);

        $formData = $request->except('_token');
        $trx = User::create([
            "nama" => $formData['nama'],
            "email" => $formData['email'],
            "username" => $formData['username'],
            "password" => bcrypt($formData['password']),
        ]);
        if ($trx) {
            return response([
                'status' => true,
                'message' => 'Data Saved Successfully'
            ], 200);
        } else {
            return response([
                'status' => false,
                'message' => 'Data Failed to Save'
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $body = view('pages.user.edit', compact('user'))->render();
        $footer = '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="save()">Save</button>';
        return [
            'title' => 'Edit User',
            'body' => $body,
            'footer' => $footer
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'username' => 'required',
        ]);
        $formData = $request->except(['_token', '_method']);
        $trx = $user->update($formData);
        if ($trx) {
            return response([
                'status' => true,
                'message' => 'Data berhasil diubah'
            ], 200);
        } else {
            return response([
                'status' => false,
                'message' => 'Data gagal diubah'
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $delete = $user->delete();
        if ($delete) {
            return response([
                'status' => true,
                'message' => 'Berhasil menghapus data!'
            ], 200);
        }
        return response([
            'status' => false,
            'message' => 'Data gagal di hapus'
        ], 400);
    }


    public function login()
    {
        $user = AuthCommon::getUserSession();
        if ($user != null) {
            return redirect('dashboard');
        } else {
            return view('pages.login');
        }
    }
}
