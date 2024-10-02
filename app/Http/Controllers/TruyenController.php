<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DanhMucTruyen;
use App\Models\Truyen;


class TruyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_truyen = Truyen::with('danhmuctruyen')->orderBy('id', 'DESC')->get();
        
        return view('admincp.truyen.index')->with(compact('list_truyen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danhmuc = DanhMucTruyen::orderBy('id', 'DESC')->get();
        return view('admincp.truyen.create')->with(compact('danhmuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                 
         $data=$request->validate(
            [
            'tentruyen' => 'required|unique:truyen|max:255',
            'slug_truyen' => 'required|unique:truyen|max:255',
            'hinhanh' => 'required|image|mimes:jpg, jpeg, gif, svg| max:2048|dimensions:min_width:100, min_height:100, max_width: 1000, max_heightL: 100',
            'tomtat' => 'required',
            'tacgia' => 'required|max:255',
            'kichhoat' => 'required',
            'danhmuc' => 'required',
            'ngonngu' => 'required',

            ],
            [
            'tentruyen.unique' => 'Tên truyện đã có ,xin hãy điền tên khác',
            'slug_truyen.unique' => 'Slug truyện đã có ,xin hãy điền slug khác',
            'tentruyen.required' => 'Không được để trống tên truyện',
            'tomtat.required' => 'Không được để trống tóm tắt truyện',
            'tacgia.required' => 'Không được để trống tác giả truyện',
            'slug_truyen.required' => 'Slug truyện phải có',
            'hinhanh.required' => 'Hình ảnh truyện phải có',
            'ngonngu.required' => 'Ngôn ngữ truyện phải có',
            ]

    );
        $truyen = new Truyen();
        $truyen->tentruyen = $data['tentruyen'];
        $truyen->slug_truyen = $data['slug_truyen'];
        $truyen->ngonngu = $data['ngonngu'];
        
        $truyen->tomtat = $data['tomtat'];
        $truyen->kichhoat = $data['kichhoat'];
        $truyen->tacgia = $data['tacgia'];
        $truyen->danhmuc_id = $data['danhmuc'];
        $get_image = $request->hinhanh;
        // them anh vao folder
        $path = 'public/uploads/truyen/';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image = $name_image.rand(0, 99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path, $new_image);
        $truyen->hinhanh = $new_image;
        // $data['product_image'] = $new_image;
        $truyen->save();
        return redirect()->back()->with('status', 'Thêm thành công');    
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
