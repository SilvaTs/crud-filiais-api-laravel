<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Filiais;
use Iluminate\Support\Facades\Auth;
use App\User;

class FiliaisController extends Controller
{

private $filiais;

  public function __construct(Filiais $filiais){

      $this->filiais = $filiais;
}

    public function index( Request $request)
    {
           $filials = $this->filiais->getResultFiliais($request->nome);

           return response()->json($filials);
    }

    public function cadastrarFilial(Request $request)
    {
          $filiais = $this->filiais->create($request->all());
          return response()->json($filiais, 201);
        }

        public function updateFilial(Request $request, $id)
        {
               if(!$filiais = $this->filiais->find($id))
               return response()->json(['error' => 'não encontrou'],404);

              $filiais->fill($request->all());

              $filiais->save();

              return response()->json($filiais, 201);


            }

            public function deleteFilial(int $id)
            {
              Filiais::destroy($id);
                return response()->json('', 204);
            }

            public function detalhesFilial(int $id)
            {
                $filiais = Filiais::find($id);

                return response()->json($filiais);
            }

            public function verificaUsuario(Request $request)
            {
                $request->validate( [
                     'email' => 'required|email',
                     'password' => 'required'
                ]);

                $credenciais = [
                    'email' => $request->email,
                    'password' => $request->password
               ];

                if(!Auth::attempt($credenciais))
                {
                    return response()->json('Usuário ou senha Inválida', 401);

                }


             }

}
