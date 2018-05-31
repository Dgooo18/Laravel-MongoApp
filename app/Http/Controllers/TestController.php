<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Mongodb\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\collection;
use Illuminate\Support\Facades\DB;
use App\testUser;
use Auth;
use Session;

class TestController extends Controller
{



		public function Login(Request $request)
		{
			$name=$request->name;
			$pass=$request->pass;
			$url='http://localhost:8000/';
			try {
				$user=$p1 = DB::connection('mongodb')
				->collection('testUser')
				->where('name', '=',$name)
				->where('pass', '=',$pass)
				->first();

				if ($user['name']==$name && $user['pass']==$pass) {

							Session::put('id',$user['_id']);
							Session::put('name',$user['name']);
							Session::put('pass',$user['pass']);
							// Session::put('age',$user['age']);
							return json_encode(['mensaje'=>'usuario logeado','url'=>$url]);

				} else {

					 return json_encode(['mensaje'=>'Username o contraseña es incorrecto','url'=>'false']);

				}



			} catch (\Exception $e) {
				return json_encode(['mensaje'=>'error '.$e]);
			}



		}
    public function test()
    {
// get all event
			$p1 = DB::connection('mongodb')
			->collection('CollEventos')
			->where('title','=', 'Prueba de evento')->first();
				dd($p1);
		/*	$p2= DB::connection('mongodb')
			->collection('CollEventos')
			->where('title','=', 'Prueba de evento')
			->where('name', 'pattern');
*/

    }
		// registro
		public function test2(Request $request)
		{
			$name=$request->name;
			$pass=$request->pass;
			$age=$request->age;
		try {
			// insertar
			$p2= DB::connection('mongodb')->collection('testUser')
			->insert([
				'name'=>$name,
				'pass'=>bcrypt($pass)
			]);
			return json_encode(['mensaje'=>'Registro exitoso']);
		} catch (\Exception $e) {
			return json_encode(['mensaje'=>'error de registro'.$e]);
		}

		}
// delete
		public function DeleteUser(Request $reques)
		{


			try {
			DB::connection('mongodb')->collection('testUser')
				->where('name','=','erick')
				->delete();
				return json_encode(['mensaje'=>'usuario erick borrado']);
			} catch (\Exception $e) {
				return json_encode(['mensaje'=>'error de eliminación'.$e]);
			}


		}
		// update
		public function update(Request $request)
		{
			$id=$request->id;
			$name=$request->name;
			$pass=$request->pass;
			$age=$request->age;

			// update user
			try {
				DB::connection('mongodb')
				->collection('testUser')
				->where('_id','=',$id)
				->update([
					'name'=>$name,
					'pass'=>$pass,
					'age'=>$age
				]);
					return json_encode(['mensaje'=>'acualizacion exitosa']);
			} catch (\Exception $e) {
					return json_encode(['mensaje'=>'error'.$e]);
			}



		}

		public function allUser()
		{

		}




}
