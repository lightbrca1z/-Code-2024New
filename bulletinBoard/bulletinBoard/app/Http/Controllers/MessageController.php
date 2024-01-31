<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;

class MessageController extends Controller
{
    //
    public function index(): View
    {
    // メッセージテーブルのレコードを全件取得。
    $messages = Message::all();
    // messagesという名前で、$messagesをindexビューへ渡す。
    return view('message/index', ['messages' => $messages]);
    }

    public function store(Request $request): RedirectResponse
    {
        //リクエストからボディを取得し、保存。
        $messages = new Message();
        $messages->body = $request->body;
        $messages->save();

        //処理後、リダイレクト。
        return redirect('/messages');
    }
}
