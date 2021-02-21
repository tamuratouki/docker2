<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CustomerController extends Controller
{
    /*
     * Undocumented function
     *
     * @return View
     */
    public function index():View
    {
        return view('customer.index');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return View
     */
    public function search (Request $request):View
    {
        return view('customer.index');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request):View
    {
        return view('customer.create');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return View
     */
    public function detail(Request $request):View
    {
        return view('customer.detail');
    }

    /**
    * Undocumented function
    *
    * @param Request $request
    * @return View
    */
    public function edit(Request $request):View
    {
        return view('customer.edit');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request):RedirectResponse
    {
        return redirect()->route('customer_index');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request):RedirectResponse
    {
        return redirect()->route('customer_index');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function delete(Request $request):RedirectResponse
    {
        return redirect()->route('customer_index');
    }
}
