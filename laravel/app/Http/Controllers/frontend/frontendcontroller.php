<?php
namespace App\Http\Controllers\frontend;

use Session; //Session
use Redirect; //?
use Crypt; //加密
use Validator; //驗證
// use App\Model\user\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Data
// use App\Repository\DBprocessing;
// use App\Repository\MemberRepository;

//前端控制器
class frontendcontroller extends Controller
{

    // protected $memberRepository;

    // public function __construct(MemberRepository $memberRepository){
	// 	date_default_timezone_set('Asia/Taipei');
    //     $this->memberRepository = $memberRepository;
    // }
    
    public function __construct(){
		date_default_timezone_set('Asia/Taipei');
    }
    
    public function test(Request $data){
        // return view('frontend.website.index',compact('user'));
        echo "12345";
    }
    



   
}
?>