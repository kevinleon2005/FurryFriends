<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserController extends Controller
{
    public function assignRole(Request $request, $userId)
    {
        $user = User::findOrFail($userId);

        // Asignar un rol al usuario
        $user->assignRole($request->input('role'));
        return response()->json(['message' => 'Rol asignado correctamente']);
    }

    public function assignPermission(Request $request, $userId)
    {
        $user = User::findOrFail($userId);

        // Asignar un permiso al usuario
        $user->givePermissionTo($request->input('permission'));

        return response()->json(['message' => 'Permiso asignado correctamente']);
    }

    public function assignRoles()
    {
        $admin = User::find(1); // Usuario administrador
        $admin->assignRole('admin');

        $paseador = User::find(2); // Usuario paseador
        $paseador->assignRole('paseador');

        $propietario = User::find(3); // Usuario propietario
        $propietario->assignRole('propietario');
    }

    public function users(){
        return view('dashboard.propietario');
    }
    public function store(Request $request)
        {
            // Validación de datos
            $request->validate([
                'nombre' => 'required|string|max:255',
                'apellido' => 'required|string|max:255',
                'fecha_nacimiento' => 'required|date',
                'telefono' => 'required|numeric',
                'tipo_documento' => 'required|string|in:CC,TI,CE, PAS',
                'numero_documento' => 'required|integer|unique:users,numero_documento',
                'direccion' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:6|confirmed',
                'role' => 'required|string|in:admin,paseador,propietario',
                'terms' => 'accepted', // Verifica que el usuario acepte los términos
            ]);
    
            $request->merge(['password' => Hash::make($request->password)]);

            User::create($request->except(['password_confirmation', 'terms']));
            return redirect()->route('inicio')->with('success', 'Registro exitoso.');
        }
        public function index(Request $request): View
        {
            $users = User::paginate();

            return view('user.index', compact('users'))
                ->with('i', ($request->input('page', 1) - 1) * $users->perPage());
        }
        public function create(): View
        {
            $user = new User();

            return view('user.create', compact('user'));
        }
        public function show($id): View
        {
            $user = User::find($id);
    
            return view('user.show', compact('user'));
        }
        public function edit($id): View
        {
            $user = User::find($id);

            return view('user.edit', compact('user'));
        }
        public function update(UserRequest $request, User $user): RedirectResponse
    {
        $user->update($request->validated());

        return Redirect::route('users.index')
            ->with('success', 'User updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        User::find($id)->delete();

        return Redirect::route('users.index')
            ->with('success', 'User deleted successfully');
    }
}


