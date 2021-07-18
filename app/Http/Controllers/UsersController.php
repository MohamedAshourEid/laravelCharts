<?php

namespace App\Http\Controllers;
include "phpqrcode/qrlib.php";

use Illuminate\Http\Request;
//include "phpqrcode/qrlib.php";
class UsersController extends Controller
{

    public function userInfo(){
//
//        \QrCode::size(500)
//            ->format('png')
//            ->generate('codingdriver.com', public_path('images/qrcode.png'));
        $id = "courseID33";
        return redirect('qr/'.$id);
//        {!!\QrCode::size(300)->generate('A basic example of QR code! Nicesnippets.com');!!}
//        {!! QrCode::size(100)->generate(Request::url());!!}
//        \QrCode::size(500)
//            ->format('png')
//            ->generate('google.com',public_path('images/qrcode.png'));
//        return view('qrCode',"{!!QrCode::size(300)->generate('A basic example of QR code! Nicesnippets.com');!!}");
//        return $req;
//        $req ->validate([
//            'email'=> "required | email",
//            "password" => "required | min:3 | max:7"
//        ]);
//        $path="imagesOfQRCode/";
//        $file=$path.time().".png";
//
//        $ecc = 'L';
//        $pixel_Size = 10;
//        $frame_Size = 10;
//        $courseID =" 123";
//        // Generates QR Code and Stores it in directory given
//        QRcode::png($courseID, $file, $ecc, $pixel_Size, $frame_Size);
//
//        echo "<center><img src='".$file."'></center>";
//        return $req->input();
    }
}
