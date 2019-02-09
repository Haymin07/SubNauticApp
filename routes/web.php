<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// une base avec toutes ses caractéristiques
$router->get('bases/{id}', function ($id) {
	$res = DB::select("SELECT COUNT(*) AS nb FROM NauticBase WHERE id=?",[$id]);
	if ($res[0]->nb == 0) {
		return response()->json(["status"=>false,"message"=>"Base nautique inexistante"],200);
	}
	$base = DB::select("SELECT * FROM NauticBase WHERE id=?",[$id]);
	return response()->json(["status"=>true, "base"=>$base[0]]);
});

// liste des bases nautiques avec seulement le nom et la description
$router->get('bases', function () {
	$basesArray = array();
	$bases = DB::select('SELECT "name", "description" FROM NauticBase');
	foreach ($bases as $base) {
		$basesArray[] = get_object_vars($base);
	}
	return response()->json($basesArray);
});

// ajout d'une base nautique
$router->post('bases', function(Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|string',
		'city' => 'required|string',
		'postal_code' => 'required|integer',
    ]);
    
    if ($validator->fails()) {
        $erreurs = json_encode($validator->errors()->all());
        return response()->json(["status"=>false, "message"=>"La base nautique n'a pas été ajoutée".$erreurs], 200);
    }
    $data = $request->all();
    $id = DB::select("SELECT MAX(id) AS maximum FROM NauticBase");
    $data["id"] = $id[0]->maximum + 1;
    $result=DB::table('NauticBase')->insert($data);
    return response()->json(["status"=>true, "base"=>$data]);
});