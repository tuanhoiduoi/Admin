<?php

namespace App\Http\Controllers;

use App\Models\Linhvuc;

use Illuminate\Http\Request;

class LinhvucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function linhvuc(Request $linhvuc)
    {
        $linhvuc = Linhvuc::all();
        return response()->json([
            'linhvuc'=>$linhvuc
        ], 200,);

    }
    public function index()
    {
        $linhvuc = Linhvuc::all();
        return view('pages.linhvuc.index')->with('linhvuc', $linhvuc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.linhvuc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Linhvuc::create($input);
        return redirect('linhvuc')->with('thongbao', 'Thêm câu hỏi thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $linhvuc = Linhvuc::find($id);
        return view('pages.linhvuc.show')->with('linhvuc', $linhvuc);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $linhvuc = Linhvuc::find($id);
        return view('pages.linhvuc.edit')->with('linhvuc', $linhvuc);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $linhvuc = Linhvuc::find($id);
        $input = $request->all();
        $linhvuc->update($input);
        return redirect('linhvuc')->with('thongbao', 'Cập nhật câu hỏi thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Linhvuc::destroy($id);
        return redirect('linhvuc')->with('linhvuc', 'Xóa câu hỏi thành công');
    }
}
