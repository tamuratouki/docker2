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
        public function search (Request $request):View
            {
                return view('customer.index');
            }

                public function create(Request $request) : View
                    {
                        return view('customer.create');
                    }

                        public function detail(Request $request): View
                            {

                            }
                            public function edit(Request $request) : View
                                {

                                }
                                public function store(Request $request):RedirectResponse
                                {
                                    return redirect()->('customer_index');
                                }
                                    public function updata(Request $request):RedirectResponse
                                    {
                                        return redirect()->('customer_index');
                                    }
                                        public function delete(Request $request):RedirectResponse
                                        {
                                            return redirect()->('customer_index');
                                        }










}
