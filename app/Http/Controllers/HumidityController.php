<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Service\WeatherService;
use App\Models\HistoryHumidity;
use Exception;
// use Nette\Iterators\Mapper;
use Mapper;

class HumidityController extends Controller
{
    private $WeatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexHistory()
    {   
        $records = HistoryHumidity::with('city')->get();
        return view('historyHumidity', compact('records'));
        // return $history;
    }

    /**
     * @author Jeisson Sanchez
     * @param  data es un array que trae los datos a utilizar
     * Metodo que registra la consulta y la humedad de la ciudad
     */
    public function store($data)
    {
        try {
            $history = HistoryHumidity::create([
                'city_id'   => $data["city"]->id,
                'humidity'  => $data["weather"]->humid_pct
            ]);
        } catch (Exception $e) {
            $error = "No se logro llevar a cabo la operación";
            return view('error', compact('error'));
        }
    }

    /**
     * @author Jeisson Sanchez
     * @param id de la ciudad a la que se hace la consulta
     * Metodo que busca la ciudad a consultar su humedad y ademas de eso crea el historial del mismo
     */
    public function show(Request $request)
    {
        $city = City::with('country')->where('id', $request->city)->first();

        try {
            if($city){
                switch ($city->id){
                    case "1":
                        $code = $city->country['abbreviation'].".".$city->code;
                        break;
                    case "2";
                        $code = $city->country['abbreviation'].".".$city->code;
                        break;
                    case "3":
                        $code = $city->country['abbreviation'].".".$city->code;
                        break;
                }
    
                $response = $this->weatherService->search($code);

                $data = array (
                    'city' => $city,
                    'weather' => $response
                );

                $this->store($data);

                Mapper::map($data["city"]->latitude,$data["city"]->length);

                return view('resultHumidity', compact('data'));
                // return $response;
    
            }else{
                $error = "Debe seleccionar una ciudad";
                return view('error', compact('error'));
            }
        } catch (\Throwable $th) {
            $error = $th->getMessage();
            return view('error', compact('error'));
        }
    }
}
