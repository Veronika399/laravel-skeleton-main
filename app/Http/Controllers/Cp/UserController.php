<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function users(Request $request)
    {
        // Filteri
        $search = $request->input('search', '');

        // Query
        $query = User::query()
            ->where('email', 'LIKE', "%$search%")
            ->orWhere('name', 'LIKE', "%$search%");

        // Paginacija
        $data = $query->paginate(30)->withQueryString();
        return view('cp.users.index', compact('data'));
    }

    public function edit(Request $request)
    {
        $id = (int)$request->input('id');
        $data = User::findOrNew($id);

        if($_POST){
            // Lozinka je nepotrebna pri ažuriranju korisnika
            $needed = $id > 0 ? "nullable" : "required";

            $defaultValues = array(
                'password' => $data->password,
            );
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => "required|email|unique:users,email,$id",
                'password' => "$needed|confirmed|string|min:8"
            ]);
            // Filtriranje null vrijednosti (ako postoje) i postavljanje defaultnih vrijednosti
            $validatedData = array_filter($validatedData, fn($value) => $value !== null);
            $validatedData = array_merge($defaultValues, $validatedData);

            // Hashanje lozinke ako je postavljena, a postavi staru ako nije zadana nova
            $validatedData["password"] = $request->password ? Hash::make($request->password) : $data->password;

            // Spremanje korisnika
            $data->fill($validatedData)->save();

            $returnMessage = "User has been successfully " . ($id > 0 ? "updated" : "created") . "!";
            return Redirect::route('users.edit', ['id' => $data->id])->with('message', $returnMessage);
        }

        return view("cp.users.edit", compact("data"));
    }
}
