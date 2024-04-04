<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Category;
use App\Models\User;

class AnnouncementController extends Controller
{

    public function showAnnouncements()
    {
        $announcements = Announcement::where('is_accepted', true)->take(6)->orderBy('created_at', 'desc')->get();
        return view('pages.announcement.show-announcements', ['categories' => Category::all(), 'announcements' => $announcements]);
    }
    

    public function announceView(Announcement $announcement, $id)
    {
        $announcement = Announcement::findOrFail($id);
        $user = User::findOrFail($announcement->user_id);

        return view('pages.announcement.announcement', ['announcement' => $announcement,'user'=>$user]);
    }
}
