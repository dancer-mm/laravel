<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    private $users = [
        ['id' => 1, 'username' => 'user1', 'password' => 'user2'],
        ['id' => 2, 'username' => 'user2', 'password' => 'user2'],
        ['id' => 3, 'username' => 'user3', 'password' => 'user2'],
        ['id' => 4, 'username' => 'user4', 'password' => 'user2'],
        ['id' => 5, 'username' => 'user5', 'password' => 'user2'],
        ['id' => 6, 'username' => 'user6', 'password' => 'user2'],
    ];
    //
    public function list(Request $request)
    {
        return $this->users;
    }

    public function add(Request $request)
    {
        $addinfo = $request->get('adduser');
        $this->users[]=$addinfo;
//        dump($this->users);
        return response()->json($this->users,201);
    }

    public function edit(Request $request,$id)
    {
        return response()->json($request->all(),202);
    }

    public function del($id)
    {
//        dump($id);die;
//        $data = array_filter($this->users,function($item) use ($id){
            return response()->json(['status' => 0, 'msg' => '删除成功'], 204);
//        });
//        return response()->json($data,204);
    }

    public function info($id,$index)
    {
        $data = array_filter($this->users,function($item) use ($id){
            return $item['id']==$id;
        });
//        dump($data);die;
        return response()->json($data[$index],200);
    }
}
