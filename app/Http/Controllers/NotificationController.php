<?php

namespace App\Http\Controllers;

use App\Events\MessageNotification;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller {

    public function index() {
        $customer = $this->currentUser()->customer;
        $list = Notification::orderBy("created_at")->paginate(15);
        return view('notifications.index', ["notifications" => $list]);
    }

    /**
     * @param Notification $notification
     * @return RedirectResponse
     * @throws Exception
     */
    public function show(Notification $notification) {
        $notification->delete();
        return back();
    }

    public function count() {
        return Notification::count();
    }

    /**
     * @param Notification $notification
     * @return \Illuminate\Http\RedirectResponse
     * @throws Exception
     */
    public function delete(Notification $notification) {
        $notification->delete();
        return redirect()->route("notifications.index");
    }

    public function create() {
        return view('create');
    }

    public function store() {
        // maak nieuwe database entry aan
        event(new MessageNotification('notifications'));
        Notification::create([
           "message"=>"dit is een test message",
            "order_id"=>"4",
            "type"=>"potato"
        ]);
        return redirect('/create');
    }
}
