<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class GetController extends Controller
{
    public function getPrice(Request $req)
    {	
    	$price = $req->price;
    	$product = products::whereBetween('price',$price)->get();
    	foreach ($product as $key => $value) {
    		echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3">';
    		echo '<div class="pt-4">';
    		echo '<div class="thumbnail pb-4">';
    		echo "<a href='".route('product-detail',['slug'=>$value->slug])."' class='hv-scale p-3 b-ra-30'>";
    		echo "<img src='".asset('public/Uploads')."/".$value->image."' alt='' width='a'class ='img-fluid'>";
    		echo '</a>';
    		echo '<div class="desc text-center">';
    		echo '<h3>';
    		echo "<a href='".route('product-detail',['slug'=>$value->slug])."' title='' class='c-fff text-uppercase f-16'>$value->name</a>";
    		echo '</h3>';
    		echo "<span class='c-feb f-16 text-uppercase'>Giá : ".number_format ($value->price)."</span>";
    		echo "<a href='' class='add-cart'><img src='".url('public')."/frontend/images/icon/ic-cart-feb.png' alt=''></a>";
    		echo '</div></div></div></div>';
    	}


    }
	public function getCategory(Request $req)
	{	
		$id = $req->id;
		$product = products::where('cate_id',$id)->get();
		foreach ($product as $key => $value) {
			echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3">';
			echo '<div class="pt-4">';
			echo '<div class="thumbnail pb-4">';
			echo "<a href='".route('product-detail',['slug'=>$value->slug])."' class='hv-scale p-3 b-ra-30'>";
			echo "<img src='".asset('public/Uploads')."/".$value->image."' alt='' width='a'class ='img-fluid'>";
			echo '</a>';
			echo '<div class="desc text-center">';
			echo '<h3>';
			echo "<a href='".route('product-detail',['slug'=>$value->slug])."' title='' class='c-fff text-uppercase f-16'>$value->name</a>";
			echo '</h3>';
			echo "<span class='c-feb f-16 text-uppercase'>Giá : ".number_format ($value->price)."</span>";
			echo "<a href='' class='add-cart'><img src='".url('public')."/frontend/images/icon/ic-cart-feb.png' alt=''></a>";
			echo '</div></div></div></div>';
		}

	}
}
