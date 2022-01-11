<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\condado;
use App\models\main;

class IrlandaController extends Controller
{
    //
    
    protected $condado;

    public function __construct(condado $condado)
    {
        $this->condado = $condado;
    }


    /*
        Tiene que tener todas las acciones que vaya a realizar en el sitio nuestro modelo de Pokemon.

        Los metodos más comunes son:
            index -> Muestra el listado de Pokemones en algún lugar especifico (vista)
            show($id)  -> Recibe un id, busca un Pokemon y devuelve sus datos.
            create ->  Busca datos (si es necesario) y devuelve la vista del formulario para crear un Pokemon.
            store  ->  Toma los datos del formulario y hace el insert (El archivo del action)
            edit($id) ->  Es como el create, pero busca los datos del Pokemon y los devuelve a la vista del formulario de editar.
            update($id)  -> Es igual que el store, toma los datos del formulario y hace el update.
            destroy($id) -> Hace el delete del ese Pokemon.
    */

    public function indexWeb(){
        return view("condado.index");
    }
    
    public function galeria(){
        $condado = $this->condado->all();

        return view("condado.galeria", compact("condado"));
    }
    
     public function index()
    {
        $condados = $this->condado->all();
        return view("admin.condado.listado",["condados"=> $condados]);
    }
    
        public function create(){

        /*
         Si necesito traerme solamente 2 datos, puedo devolver un array a partir de un objeto con esos dos datos. Uno va a ser el indice y el otro el valor
            1 parametro -> el valor
            2 parametro -> el indice
         */



        return view("admin.condado.nuevo_condado");
    }

    public function edit($id){

        
        $condado = $this->condado->find($id);

        if(!$condado){
            return redirect()->back();
        }

        return view("admin.condado.editar_condado",["condado"=>$condado]);
    }

        public function store(Request $request){

        $datos = $request->except(["_token","imagen"]);

        $nombreimagen = str_replace(" ","_",$datos["nombre"]);
        $ext = explode("/",$request->imagen->getClientMimeType())[1];
        $nombreImagen = $nombreimagen . ".$ext";

        $request->imagen->storeAs("public/condados",$nombreImagen);

        $datos["imagen"] = "../storage/app/public/condados/" . $nombreImagen;

        $this->condado->create($datos);

        return redirect()->route("condados.index");
    }

    public function delete($id)
    {
        $condado = $this->condado->find($id);
        $nombre = $condado->nombre;
        if(is_file("../storage/app/public/condados/$nombre.png")){
            unlink("../storage/app/public/condados/$nombre.png");
        }
        $eliminar=$condado->delete();

        return redirect()->route("condados.index");
    }
    
        public function update($id, Request $request){

        $datos = $request->except(["_method","_token","imagen","descripcion"]);
                 
        $nombreimagen = str_replace(" ","_",$datos["nombre"]);
       
        $nombreImagenCompleto = $nombreimagen . ".png";
            
            $nombreviejo = $datos["nombreviejo"];
        if(is_dir("../storage/app/public/condado/$nombreviejo")){
            if(is_file("../storage/app/public/condado/$nombreviejo/$nombreviejo.png")){
            rename("../storage/app/public/condado/$nombreviejo/$nombreviejo.png","../storage/app/public/condado/$nombreviejo/$nombreImagenCompleto");
            rename("../storage/app/public/condado/$nombreviejo","../storage/app/public/condado/$nombreimagen");
            $datos["imagen"] = "../storage/app/public/condado/$nombreimagen/$nombreImagenCompleto";
            }
        }
        if(!is_null($request->imagen)){
            if(is_file("../storage/app/public/condado/$nombreimagen/$nombreImagenCompleto")){
                unlink("../storage/app/public/condado/$nombreimagen/$nombreImagenCompleto");
            }
            $request->imagen->storeAs("condado/$nombreimagen",$nombreImagenCompleto,"public");
            $datos["imagen"] = "../storage/app/public/condado/$nombreimagen/$nombreImagenCompleto"; 
        }
        
        $condado = $this->condado->find($id);
        $condado->update($datos);

        return redirect()->route("condados.index");
    }
}
