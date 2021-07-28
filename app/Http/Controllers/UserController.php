<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\Member;


class UserController extends Controller
{
    public function __construct(Member $member, Phone $phone)
    {
      $this->member = $member;
      $this->phone = $phone;
    }
  
    public function insertInto()
    {
      //
    }

    public function fetchDataFromPhone()
    {
      $requestedPhone = $this->member->with('phone')->get();
      return view('view',compact('requestedPhone'));
    }

    public function  fetchDataFromMember()
    {
      $requestedMember = $this->phone->with('user')->get();
      return view('view',compact('requestedMember'));
    }
}
