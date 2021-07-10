<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Carbon\Carbon;
use Mail;
use Illuminate\Support\Str;
use Section;
use Hash;
class ForgotPasswordController extends Controller
{
    public function getFormResetPassword()
    {
        return view('admin.resetpassword');
    }
    public function recover_pass(Request $request)
    {
        $data=$request->all();
        $now=Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $title_mail="Lấy lại mật khẩu mail".' '.$now;
        $email=TaiKhoan::where('Email','=',$data['Email'])->get();
        foreach($email as $key=>$value){
            $email_id=$value->id;
                                        }
        if($email){
            $count_email=$email->count();
            if($count_email==0){
                return redirect()->back()->with('status','Email chưa được đăng ký...');

            }
            else{
                $token_ramdom=Str::random();
                $email=TaiKhoan::find($email_id);
                $email->code=$token_ramdom;
                $email->save();
                $to_email=$data['Email'];
                $link=url('admin/update-new-pass?Email='.$to_email.'&code='.$token_ramdom);
                $data=array("name"=>$title_mail,"body"=>$link,'Email'=>$data['Email']);
                Mail::send('admin.resetpassword2',['data'=>$data],function($message)use ($title_mail,$data)
                {
                    $message->to($data['Email'])->subject($title_mail);
                    $message->from($data['Email'],$title_mail);
                });
                return redirect()->back()->with('status','Gửi mail thành công, vui lòng vào Gmail để lấy password!!...');

           }
         }    
    }
    public function update_new_pass()
    {
        return view('admin.new_pass');
    }
    public function reset_new_pass(Request $request)
    {
        $data=$request->all();
        $token_ramdom=Str::random();
        $email=TaiKhoan::where($request->Email)->where($request->code)->get();
        $count=$email->count();
        if($count>0){
            foreach($email as $key=>$value){
                $id=$value->id;
                                            }
             $reset  =  TaiKhoan::find($id);   
             $reset->password=Hash::make($data['password_account']);           
             $reset->code=$token_ramdom;   
             $reset->save(); 
            $count_email=$email->count();
            
            return redirect()->back()->with('status','Mật khẩu đã cập nhật mới, quay lại trang Đăng Nhập...');
        }else{
            return redirect('admin.resetpassword')->back()->with('status','vui lòng nhập Email vì Link đã quá hạn..');
        }

    }
}
    
    

