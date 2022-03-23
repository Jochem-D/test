<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller {

    public function index() {
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
     * @return RedirectResponse
     * @throws Exception
     */
    public function delete(Notification $notification) {
        $notification->delete();
        return redirect()->route("notifications.index");
    }
}
