<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pastas;

class StartController extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function convertData($strData){
        switch ($strData) {
        case '10 минут':
            return 600;
            break;
        case '1 час':
            return 3600;
            break;
        case '3 часа':
            return 10800;
            break;
        case '1 день':
            return 86400;
            break;
        case '1 неделя':
            return 604800;
            break;
        case '1 месяц':
            return 2592000;
            break;
        case 'Без ограничений':
            return 0;
            break;
        }     
    }

    
    
    public function actualPastes(){
        $pas = new Pastas();
        $pas = Pastas::select(['name', 'created_at', 'hash_id'])->where('updated_at', '>', date("Y-m-d H:i:s"))
                                                        ->where('access', 'Доступен всем')
                                                        ->orderBy('created_at', 'desc')
                                                        ->take(10)
                                                        ->get();
        //dump($pas);
        return view('index')->with(['pas'=>$pas]); 
    }
    
    
    
    public function  getPaste($id){
        $pasta = new Pastas();
        $pasta = Pastas::select(['name','text', 'created_at'])->where('hash_id', $id)->first();
        //dump($pasta);
        
        $pas = new Pastas();
        $pas = Pastas::select(['name', 'created_at', 'hash_id'])->where('updated_at', '>', date("Y-m-d H:i:s"))
                                                        ->where('access', 'Доступен всем')
                                                        ->orderBy('created_at', 'desc')
                                                        ->take(10)
                                                        ->get();
        //печальный момент, не удалось этот кусок заставить работать через функцию выше в данном представлении
        return view('view')->with(['pasta'=>$pasta, 'pas'=>$pas]);
    }

    public function addPaste(Request $request){
        //dump($request->all());
        $this->validate($request, [
           'text'=>'required',
           'name' => 'required'     
        ]);
        
        $data = $request->all();
        //dump($data);
        $data['expirate']= StartController::convertData($data['expirate']);
        $data['updated_at']=date("Y-m-d H:i:s",time()+$data['expirate']); //костыль, ага=)
        $data['hash_id']= uniqid();
        $pasta = new Pastas();
        $pasta->fill($data);
        // dump($pasta);
        $pasta->save();
        return redirect()->action('StartController@getPaste',[$data['hash_id']]);
    }
}