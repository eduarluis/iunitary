<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

//Tokbox para generar el token automatico
use OpenTok\OpenTok;
use OpenTok\MediaMode;
use OpenTok\ArchiveMode;
use OpenTok\Session;
use OpenTok\Role;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->apiKey = '46675942';
        $this->apiSecret = '56fc23528ba61b4803ba6d59ac61f82f9c0a78dc';
    }

   
    public function index()
    {
        return 'deploy my first app heroku!';
    }

    // recibimos el id del Usuario al cual quieres llamar
    public function GeneratorTheTokenAndSessionIdForCalls($id)
    {
        //Instaciamos a OpenTok pasamos los keys que nos proporciona la el proveedor TokBox.com
        $opentok = new OpenTok($this->apiKey, $this->apiSecret);

        // creamos la session
        $session = $opentok->createSession();

        // generamos el id para realizar la llamada
        $sessionId = $session->getSessionId();

        // generamos el token para ingresar a la llamada
        $token = $session->generateToken(array(
            'role'       => Role::MODERATOR,
            'expireTime' => time()+(7 * 24 * 60 * 60), // in one week
            'data'       => 'name=Johnny',
            'initialLayoutClassList' => array('focus')
        ));

        // le enviamos al usuario esta informacion para que puedan ingresar a la llamada @1 a 1@
        return response()->json([
            'apiKey' => $this->apiKey,
            'sessionId' => $sessionId,
            'token' => $token,
        ]);
    }

    public function users()
    {
        $users = User::all();
        return view('pages.home', ['users' => $users]);
    }

    public function getUserApi()
    {
        $users = User::all();
        return response()->json($users);
    }
}
