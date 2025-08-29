<?php
namespace App\Http\Controllers;
use App\Models\Result;
use App\Models\Category;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
  //Metodo para visualizar la pagina de php
    public function operacionesmatematicas()
    {
        return view('OperacionesMatematicas');
    }
  //Operaciones matematicas suma,resta,multiplicacion y division
    public function sumar($num1, $num2)
    {
        $resultado = $num1 + $num2;
        return ($resultado);
    }

    public function restar($num1, $num2)
    {
        $resultado = $num1 - $num2;
        return ($resultado);
    }

    public function multiplicar($num1, $num2)
    {
       $resultado = $num1 * $num2;
        return ($resultado);
    }
    public function dividir($num1, $num2)
{
    if ($num2 == 0) {
        return 'Error: división por cero';
    }

    return $num1 / $num2;
}
  //Funcion para elegir los dos numeros y hacer las operaciones correspondientes(suma,resta,mult,division)
    public function calcular(Request $request)
    {
        $num1 = $request->input('numero1');
        $num2 = $request->input('numero2');
        $operacion = $request->input('operacion');
        $resultado = null;

        switch ($operacion) {
            case 'sumar':
                $resultado = $this->sumar($num1, $num2);
                break;
            case 'restar':
                $resultado = $this->restar($num1, $num2);
                break;
            case 'multiplicar':
                $resultado = $this->multiplicar($num1, $num2);
                break;
            case 'dividir':
                $resultado = $this->dividir($num1, $num2);
                break;
        }

        //Metodo para mostrar el resultado de la operacion .
        return redirect()->route('operacionesmatematicas')
    ->with([
        'resultado' => $resultado,
        'numero1' => $num1,
        'numero2' => $num2,
        'operacion' => $operacion
    ]);

    }

    public function frmcuadratica(){

        return view('frm_cuadratica');

    }

    public function cuadratica(Request $request){

// Agregamos en (float) para pasar el numeroa decimal
           $a=(float) $request->a;
           $b=(float) $request->b;
           $c=(float)$request->c;

           $ecu1=$b*$b-(4*$a*$c);

//movi la $raiz dentro del bucle if y remplaze echo por una redireccion de la ruta para tener
//un resultado mas preciso.
          if($ecu1>0 && $a!=0){
            $raiz=sqrt($ecu1);
            $x1=(-$b+$raiz)/(2*$a);
            $x2=(-$b-$raiz)/(2*$a);


          $resultado = new Result();
          $resultado->a = $request->a;
          $resultado->b = $request->b;
          $resultado->c = $request->c;
          $resultado->x1 = $x1;
          $resultado->x2 = $x2;

          $resultado->save();

        return redirect()->route('cuadratica.formulario')->with([
         'x1' => number_format($x1, 2),
         'x2' => number_format($x2, 2),
         'a' => $a,
         'b' => $b,
         'c' => $c
        ]);
          }
          else{
            //la misma vina de arriba sobre (echo)
             return redirect()->route('cuadratica.formulario')->with('error', 'Ingrese otros valores...');
          }



    }

    //---------------------------------------------------
    public function tablamultFormulario()
{
    return view('tablamult');
}

    public function calcularTabla(Request $request)
    {
        $numero = $request->input('numero');

        if (!is_numeric($numero) || $numero < 1 || $numero > 10) {
            return back()->with('error', ' El número debe estar entre 1 y 10.');
        }

        $tabla = [];
        for ($i = 1; $i <= 10; $i++) {
            $tabla[] = "{$numero} x {$i} = " . ($numero * $i);
        }

        return view('tablamult', compact('numero', 'tabla'));
    }

    //---------------------------------------------------

    // Mostrar todas las categorías

    public function index() {
        $categories = Category::all();
        return view('categoria.index', compact('categories'));
    }

    public function create() {
    $categories = Category::all();
    return view('categoria.create', compact('categories'));
    }


    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Category::create($request->only('name'));
        return redirect()->route('categoria.index')->with('success', 'Categoría creada correctamente.');
    }

    public function show($id) {
        $category = Category::findOrFail($id);
        return view('categoria.show', compact('category'));
    }

    public function edit($id) {
        $category = Category::findOrFail($id);
        return view('categoria.edit', compact('category'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->only('name'));
        return redirect()->route('categoria.index')->with('success', 'Categoría actualizada correctamente.');
    }

    public function destroy($id) {
        Category::destroy($id);
        return redirect()->route('categoria.index')->with('success', 'Categoría eliminada correctamente.');
    }
}
