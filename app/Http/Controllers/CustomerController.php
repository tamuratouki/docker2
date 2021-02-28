<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Customer;
use App\Pref;

class CustomerController extends Controller
{
    /*
     * 顧客一覧画面を初期表示します。
     *
     * @return View
     */
    public function index():View
    {
        //顧客を全て取得する
        $costomers = Customer::all();

        //画面に渡す
        return view('customer.index', ['costomers' => $costomers]);
    }

    /**
     * 顧客一覧画面を検索します。
     *
     * @param Request $request
     * @return View
     */
    public function search (Request $request):View
    {
        //画面から検索条件を受け取る

        //姓かなが入力されていたら、検索に含める

        //名かなが入力されていたら、検索に含める

        //性別はチェックされたものを、検索に含める

        //都道府県が選択されたら、検索に含める

        //上記の検索条件で検索結果を取得する

        //画面に渡す
        return view('customer.index');
    }

    /**
     * 新規登録画面に遷移します。
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request):View
    {
        //都道府県を全て取得する。
          $prefs = Pref::all();

        //画面に渡す
        return view('customer.create',['prefs' => $prefs]);
    }

    /**
     * 詳細画面に遷移します。
     *
     * @param Request $request
     * @return View
     */
    public function detail(Request $request):View
    {
        //画面から詳細表示対象を取得する

        //詳細表示する顧客を検索する

        //画面に渡す
        return view('customer.detail');
    }

    /**
    * 編集画面に遷移します。
    *
    * @param Request $request
    * @return View
    */
    public function edit(Request $request):View
    {
        //画面から編集対象を取得する

        //編集する顧客を検索する

        //画面に渡す
        return view('customer.edit');
    }

    /**
     * 新規登録画面の内容を登録します。
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request):RedirectResponse
    {
        //画面から登録内容を受け取る

        //新規顧客を登録する

        //顧客一覧に戻って、登録しましたメッセージを表示する
        return redirect()->route('customer_index');
    }

    /**
     * 編集画面の内容を更新します。
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request):RedirectResponse
    {
        //画面から更新内容を受け取る

        //更新対象の顧客を検索する

        //顧客を更新する

        //顧客一覧に戻って、更新しましたメッセージを表示する
        return redirect()->route('customer_index');
    }

    /**
     * 顧客情報を削除します。
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function delete(Request $request):RedirectResponse
    {
        //画面から削除対象を受け取る

        //削除対象の顧客を検索する

        //顧客を削除する

        //顧客一覧に戻って、削除しましたメッセージを表示する
        return redirect()->route('customer_index');
    }
}
