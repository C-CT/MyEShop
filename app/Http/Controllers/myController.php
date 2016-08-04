<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class myController extends Controller
{
  
 public function index()
    {
       return view("home");
    }   
    
 public function contact_us()
    {
       return "聯絡我們";
    } 
    
  public function login()
    {
       return "登入";
    }  
    
   public function logout()
    {
       return "登出";
    }   
        
   public function products()
    {
       return "產品";
    } 
        
   public function products_category()
    {
       return "型錄";
    } 
        
   public function products_brands()
    {
       return "品牌";
    } 
        
   public function products_details($id)
    {
       return "詳細介紹=$id";
    } 
        
   public function blog()
    {
       return "部落格";
    } 
            
   public function blog_post($id)
    {
       return "部落格分頁=$id";
    } 
            
   public function search($keyword)
    {
       return "搜尋$keyword";
    } 
            
   public function cart()
    {
       return "購物車";
    } 
            
   public function checkout()
    {
       return "checkout";
    } 
}
