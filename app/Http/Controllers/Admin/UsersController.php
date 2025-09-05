<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = User::query()->where('id' , '!=' , auth()->id());

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            });
        }

        if ($request->filled('is_super_admin')) {
            $query->where('is_super_admin', $request->input('is_super_admin'));
        }

        if ($request->filled('email_verified')) {
            if ($request->input('email_verified') === 'verified') {
                $query->whereNotNull('email_verified_at');
            } else {
                $query->whereNull('email_verified_at');
            }
        }

        switch ($request->input('sort')) {
            case 'oldest':
                $query->orderBy('created_at', 'asc');
                break;
            case 'name':
                $query->orderBy('name', 'asc');
                break;
            case 'email':
                $query->orderBy('email', 'asc');
                break;
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }

        $users = $query->paginate(10)->appends($request->query());

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'is_super_admin' => 'boolean',
        ]);

        $data['is_super_admin'] = $request->has('is_super_admin') ? 1 : 0;


        User::create($data);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'تم إضافة المستخدم بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password' => 'nullable|string|min:8|confirmed',
            'is_super_admin' => 'boolean',
        ]);

        $data['is_super_admin'] = $request->has('is_super_admin') ? 1 : 0;

        $user->update($data);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'تم تعديل المستخدم بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        
        if (auth()->id() == $user->id) {
            return back()->with('error', 'لا يمكنك حذف حسابك الخاص');
        }
        
        $user->delete();

        return to_route('admin.users.index')->with('success', 'تم حذف المستخدم بنجاح');
    }

    public function toggleSuper($user)
    {
        $user = User::find($user);
        $new_status = (!$user->is_super_admin);

        $user->update(['is_super_admin' => $new_status]);
        
        return back()->with('success', 'تم تغيير الصلاحيات بنجاح');
    }
}