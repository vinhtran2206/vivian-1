<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageAdminController extends Controller
{
     public function getIndexAdmin(){
    	return view('admin.pageAdmin.indexAdmin');
    }

    public function getImageProduct(){
    	return view('admin.pageAdmin.imageProduct');
    }

    public function getAddImageProduct(){
    	return view('admin.pageAdmin.addImageProduct');
    }

   	public function getProduct(){
   		return view('admin.pageAdmin.products');
   	}

   	public function getAddProduct(){
   		return view('admin.pageAdmin.addProduct');
   	}

   	public function getEditProduct(){
   		return view('admin.pageAdmin.editProducts');
   	}
}
