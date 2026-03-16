<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::with(['service', 'roles'])
            ->latest()
            ->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    public function create(): View
    {
        $services = Service::where('is_active', true)->orderBy('name')->get();
        $roles = Role::orderBy('name')->get();

        return view('admin.users.create', compact('services', 'roles'));
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'name' => $data['first_name'] . ' ' . $data['last_name'],
            'email' => $data['email'],
            'username' => $data['username'] ?? null,
            'password' => $data['password'],
            'service_id' => $data['service_id'] ?? null,
            'is_active' => $data['is_active'] ?? true,
        ]);

        $user->syncRoles([$data['role']]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Utilisateur créé avec succès.');
    }

    public function show(User $user): View
    {
        $user->load(['service', 'roles']);

        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user): View
    {
        $services = Service::where('is_active', true)->orderBy('name')->get();
        $roles = Role::orderBy('name')->get();
        $selectedRole = $user->roles->first()?->name;

        return view('admin.users.edit', compact('user', 'services', 'roles', 'selectedRole'));
    }

    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        $data = $request->validated();

        $updateData = [
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'name' => $data['first_name'] . ' ' . $data['last_name'],
            'email' => $data['email'],
            'username' => $data['username'] ?? null,
            'service_id' => $data['service_id'] ?? null,
            'is_active' => $data['is_active'] ?? true,
        ];

        if (!empty($data['password'])) {
            $updateData['password'] = $data['password'];
        }

        $user->update($updateData);
        $user->syncRoles([$data['role']]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Utilisateur mis à jour avec succès.');
    }

    public function destroy(User $user): RedirectResponse
    {
        if ($user->id === auth()->id()) {
            return back()->with('error', 'Vous ne pouvez pas supprimer votre propre compte.');
        }

        $user->delete();

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Utilisateur supprimé avec succès.');
    }
}
