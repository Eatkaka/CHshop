<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taikhoan extends Model
{
    protected $primaryKey = 'MaND';
    protected $table = 'nguoidung'; 
protected $fillable = [
        'HoTen', 'level', 
    ];
    // protected function create($request){
    //     $tao= new Taikhoan();
    //     $tao->HoTen= $request->HoTen;
    //     $tao->Gioitinh=$request->Gioitinh;
    //     $tao->DiaChi=$request->DiaChi;
    //     $tao->SDT=$request->SDT;
    //     $tao->level=2;
    //     $tao->TaiKhoan=$request->TaiKhoan;
    //     $tao->password=$request->password;
    //     $tao->save();
    //  }
}
