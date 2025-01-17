<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;

class AdminCouponsComponent extends Component
{
     public function deleteCoupon($coupon_id)
     {
         $coupon = Coupon::find($coupon_id);
         $coupon->delete();
         session()->flash('message','Coupon has been deleted successfully!');
     }


    public function render()
    {
        $coupons=Coupon::all();
        return view('livewire.admin.admin-coupons-component',['coupons'=>$coupons])->layout('layouts.base');
    }
}
