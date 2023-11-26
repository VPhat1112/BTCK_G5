<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Carbon;
use Str;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    //
    public function forgotPassword()
    {
        return view('customer_page.forgot-password');
    }

    //send request to email
    public function forgotPasswordPost(Request $request)
    {
        //kiểm tra email nhập vào có tồn tại trong bảng users ko
        $request->validate([
            'email' => "required|email|exists:users",
        ]);

        //tạo token có độ dài 64 ký tự 
        $token = Str::random(64);

        //thêm dữ liệu vào bảng password_reset_tokens
        DB::table('password_resets')->insert([
            'email' => $request->email, //lưu địa chỉ mail từ request
            'token' => $token, //lưu token đc tạo ra ở trên
            'created_at' => Carbon::now() //lưu thời điểm tạo token
        ]);

        //gửi email thông báo đặt lại mk 
        //fe.email-forgot-password và token sẽ được chuyển đến view
        //trong URL đc gửi đến email, có token được truyền qua URL
        //sau đó sẽ so sánh token trong url có trùng khớp với token trong database ko
        //có thì sẽ cho phép đổi mật khẩu
        Mail::send('customer_page.email-forgot-password', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject("Reset Password");
        }); 

        //hiển thị thông báo đã gửi mail
        return redirect() -> to(route("forgot.password"))
        ->with("success", "da gui mail");
    }

    //go to reset password view
    public function resetPassword($token)
    {
        return view("customer_page.reset-password", compact('token'));
    }

    //reset password
    public function resetPasswordPost(Request $request)
    {
        //kiểm tra thông tin reset password nhập vào có hợp lệ ko
        $request->validate([
            'email' => "required|email|exists:users",
            'password' => "required|string|min:6|confirmed",
            'password_confirmation' => "required",
        ]);

        //Kiểm tra xem email và token có tồn tại trong bảng password_reset_tokens hay không
        $updatePassword = DB::table('password_resets')
        ->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        //ko tồn tại thì hiển thị lỗi
        if(!$updatePassword) {
            return redirect()->to(route("reset.password"))->with("error", "Invalid");
        }

        //cập nhật mật khẩu mới trong bảng users
        User::where("email", $request->email)
            ->update(["password" => $request->password]);

        //xóa token khỏi bảng password_reset_tokens
        DB::table("password_resets")->where(["email" => $request->email])->delete();

        //chuyển hướng đến trang login
        return redirect()->to(route("login"))->with("success", "mat khau da reset");
    }

}
