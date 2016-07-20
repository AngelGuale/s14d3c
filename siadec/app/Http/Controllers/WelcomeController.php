<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Session;
use DB;
use Redirect;
use Input;
use DateTime;
use App\User as User;
use App\Examen as Examen;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin_home');
	}

	public function analisisMicroscopioForm()
	{
		return view('analyze');
	}

public function clasificadorForm()
	{
		return view('image_class_form');
	}

	public function analisisMicroscopio(Request $request){

		$zoom4 = Input::file('fileZoom4');
		$zoom10 = Input::file('fileZoom10');
		$zoom40 = Input::file('fileZoom40');
		//$zoom40x = Input::file('fileZoom40x');
		//return $zoom40x->getClientOriginalExtension();

		$responsable = Input::get('responsable');
		$codigo = Input::get('codigo');
		$fecha = Input::get('fecha');
		$empresa = Input::get('empresa');
		$equipos = Input::get('equipos');
		$observaciones = Input::get('observaciones');
		$location = Input::get('location');

		if (empty($zoom4) || empty($zoom10) || empty($zoom40)){
			return "error";
		}

		$name1 = "zoom4" . str_random(10) . "." . $zoom4->getClientOriginalExtension();
		$zoom4->move("../storage", $name1);

		$name2 = "zoom10" . str_random(10) . "." . $zoom10->getClientOriginalExtension();
		$zoom10->move("../storage", $name2);

		$name3 = "zoom40" . str_random(10) . "." . $zoom40->getClientOriginalExtension();
		$zoom40->move("../storage", $name3);

		$date = new DateTime();
		/*
		$examen_id=Examen::insertGetId(
        	array(
            'responsable' => $responsable,
            'fecha' => $date->format('Y-m-d'),
            'fecha_imagenes' => $fecha,
            'codigo' => $codigo,
            'empresa' => $empresa,
            'observaciones' => $observaciones,
            'equipos' => $equipos,
            'location' => $location,
            'img1' => $name1,
            'img2' => $name2,
            'img3' => $name3,
            'user_id' => Session::get('user_id'),
            )
        );
        */
		error_log($name3);
		$output = array();
		//exec("../app/OpenCV/main ../storage/" . $name1 . " ../storage/" . $name2 . " ../storage/" . $name3 , $output);
	//exec("/usr/bin/python /home/xngel/deploy_cnn/code/make_pred22.py -t /home/xngel/siadec/siadec/storage/".$name3, $output, $return);
		if ($return) {
	    //throw new \Exception("Error executing command - error code: $return");
		}
		//error_log($output);
		var_dump($output);
		error_log("ok");
		$resultado=$output;
		return view('result_class')->with('resultado', $resultado);
	
	}
	public function clasificador(){

		if(Input::hasFile('fileZoom40')){
		$output=array();
			$zoom40 = Input::file('fileZoom40');
		
		$name3 = "zoom40" . str_random(10) . "." . $zoom40->getClientOriginalExtension();
		$zoom40->move("../storage", $name3);
		exec("/usr/bin/python /home/xngel/deploy_cnn/code/make_pred22.py -t /home/xngel/siadec/siadec/storage/".$name3, $output, $return);
		if ($return) {
	    throw new \Exception("Error executing command - error code: $return");
		}
		//error_log($output);
		//var_dump($output[2]);
		error_log("ok");
		$salida=$output[2];
		$dictionario= array('0' =>"branquias" ,
		'1' =>"pleopodos" ,
		'2' =>"corazon" ,
		'3' =>"cordon_" ,
		'4' =>"conectivo estomago" ,
		'5' =>"hepatopancreas" ,
		'6' =>"epitelio del cuerpo" ,
		'7' =>"epitelio del estomago" ,
		'8' =>"epitelio del intestino" ,
		'9' =>"glandula antenal" ,
		'10' =>"tejido hematopoyetico" ,
		'11' =>"musculo" ,
		'12' =>"organo linfoide" ,
		);
		$resultado=$dictionario[$salida];
		return view('image_class_form')->with('resultado', $resultado);
	
				}
		return "nofile";
	}
	public function analyzeLog(){

		$user=User::where('id', Session::get('user_id'))->first();
		$exams = $user->Examen;
		error_log('examenes ' . count($exams));
		return view('admin_exams')->with('examenes', $exams);
	}

}
