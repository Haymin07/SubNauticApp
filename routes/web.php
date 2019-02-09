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
