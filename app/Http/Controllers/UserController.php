<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class UserController extends Controller
{
    //
    private $today;
    private $table;

    public function __construct()
    {
        $this->today = Carbon::now()->toDateTimeString();
        $this->table = 'user_pawoon';
    }

    public function index()
    {
        $data['title']      = 'Customer Form';
        $data['subtitle']   = 'Add customer';
        $data['title_2']    = 'Customer List';

        $data['uuid']   = $this->generateRandomString(20);

        return view('user', $data);
    }

    public function getList()
    {
        $datas = DB::table($this->table)->get();

        $response = array(
            'data' => $datas
        );
        echo json_encode($response);
    }

    public function add(Request $request)
    {
        DB::beginTransaction();
        try {
            $this->validate($request, [
                'inp_uuid'      => 'required',
                'inp_name'      => 'required',
                'inp_address'   => 'required'
            ]);
    
            DB::table($this->table)->insert(
                [
                    'uuid'          => $request->get('inp_uuid'),
                    'nama'          => $request->get('inp_name'),
                    'alamat'        => $request->get('inp_address'),
                    'created_at'    => $this->today
                ]
            );

            DB::commit();

            $response = array(
                'message'       => 'Congratulation, add user successfully!',
                'head_message'  => 'Success!',
                'status'        => 'success',
            );
            echo json_encode($response);
    
        } catch (\Exception $e) {
            DB::rollback();

            $response = array(
                'message'       => 'Sorry, add user failed!',
                'head_message'  => 'Failed!',
                'status'        => 'error'
            );
            echo json_encode($response);
        }
    }

    public function checkExist(Request $request)
    {
        $select = $request->get('select');
        $values = $request->get('values');

        $datas = DB::table($this->table)
                        ->where($select, '=', $values)
                        ->get();

        if (count($datas) > 0) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }

    public function generateRandomString($length = 20) 
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
