<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function get()
    {
        $settings = Setting::whereIn('key', [
            'meta_title',
            'meta_description',
            'meta_keywords'
        ])->pluck('value', 'key');

        return view('admin.settings', [
            'meta_title'       => $settings['meta_title'] ?? '',
            'meta_description' => $settings['meta_description'] ?? '',
            'meta_keywords'    => $settings['meta_keywords'] ?? '',
        ]);
    }

    public function set(Request $request)
    {
        $request->validate([
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords'    => 'nullable|string|max:500',
        ]);

        foreach (['meta_title', 'meta_description', 'meta_keywords'] as $key) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $request->input($key)]
            );
        }

        return redirect()->route('admin.settings')->with('success', 'تم حفظ الإعدادات بنجاح');
    }
}
