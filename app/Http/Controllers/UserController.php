<?php



namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Méthode pour afficher la liste des utilisateurs
    public function index()
    {
        $users = User::all();
        $formattedCourses = $users->map(function ($user) {
            return [
                'id' => $user->id,

                'name' => $user->name,
                'email' => $user->email,
                'degree' => $user->degree,


            ];
        });

        $data = [
            'status' => 200,
            'users' => $formattedCourses,
        ];

        return response()->json($data, 200);
    }

    // Méthode pour traiter le téléchargement d'un utilisateur
    public function upload(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'degree' => 'required|string',
        ]);

        // Création d'un nouvel utilisateur
        $user = new User([
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'degree' => $request->input('degree'),
        ]);

        // Enregistrement de l'utilisateur dans la base de données
        $user->save();

        return redirect()->route('users')->with('success', 'Utilisateur ajouté avec succès');
    }



    public function edit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'degree' => 'required',
        ]);
    
        // If validation fails, Laravel will automatically return a response with errors.
        // You don't need to manually use the Validator facade here.
    
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->degree = $request->degree;
        $user->save();
    
        $data = [
            "status" => 200,
            "message" => 'Data updated successfully'
        ];
    
        return response()->json($data, 200);
    }
    








    

  
    public function delete($id){
        $user=User::find($id);
        $user->delete();
        $data=[
          "status"=>200,
          "message"=>'Data deleted successfully'
       ];
         return response()->json($data,200);
      }
        // ...

}
