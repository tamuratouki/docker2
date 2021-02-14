<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CustomerController extends Controller
{
public function index():View
{
    return view('customer.index');
//初期表示
}
public function　search (Request $request):View
{
    return view('customer.index');
    //検索
}
public function create(Request $request) : View
{
    return view('customer.create');
    //新規登録画面の表示
}
public function detail(Request $request): View
 {
  //詳細画面の表示
}
public function edit(Request $request) : View
{
    // 編集画面の表示
}
public function store(Request $request):RedirectResponse
{
    return redirect()->(route:'customer_index');
    //新規登録画面の表示
}
public function updata(Request $request):RedirectResponse 
{
    return redirect()->(route:'customer_index');
    //編集画面で更新
}
public function delete(Request $request):RedirectResponse 
{
    return redirect()->(route:'customer_index');
    //詳細画面で削除
}









{
}
