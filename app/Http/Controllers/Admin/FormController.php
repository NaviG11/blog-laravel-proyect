<?php

namespace App\Http\Controllers\Admin;
use Dompdf\Dompdf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Storage;
use Swift_Attachment;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::all();
        return view('admin.form.index', compact('forms'));
    }

    public function create(){
        return view('admin.form.create');
    }

    public function store(Request $request){
        #dd($request->all());
        $form = new Form;
        $form->nombre = $request->input('nombre');
        $form->sexo_denunciante = $request->input('sexo_denunciante');
        $form->ci = $request->input('ci');
        $form->extension = $request->input('extension');
        $form->edad = $request->input('edad');
        $form->direccion = $request->input('direccion');
        $form->email = $request->input('email');
        $form->telefono = $request->input('telefono');
        $form->denunciado = $request->input('denunciado');
        $form->direccion_denunciado = $request->input('direccion_denunciado');
        $form->cargo_ocupa = $request->input('cargo_ocupa');
        $form->ci_denunciado = $request->input('ci_denunciado');
        $form->edad_denunciado = $request->input('edad_denunciado');
        $form->telefono_denunciado = $request->input('telefono_denunciado');
        $form->parentezco = $request->input('parentezco');
        $form->testigo = $request->input('testigo');
        $form->parentezco_testigo = $request->input('parentezco_testigo');
        $form->parentezco_testigo = $request->input('parentezco_testigo');
        $form->fecha_denuncia = $request->input('fecha_denuncia');
        $form->lugar = $request->input('lugar');
        $form->tipo_violencia = $request->input('tipo_violencia');
        $form->departamento = $request->input('departamento'); 
        $form->detalle = $request->input('detalle');
        $form->fecha = $request->input('fecha');
        

        // Manejar el archivo
        if ($request->hasFile('archivo')) {
            $archivo = $request->file('archivo');
            $nombreArchivo = time() . '_' . $archivo->getClientOriginalName();
            $archivo->storeAs('public/uploads', $nombreArchivo);
            $form->archivo = $nombreArchivo;
        }

        // Crear una nueva instancia de Ubicacion (o el modelo que estés usando)
        
        $latitud = $request->input('latitud');
        $longitud = $request->input('longitud');

        $form->latitud = $latitud;
        $form->longitud = $longitud;


        $form->save();
        //dd($request->all());
        //para el pdf variables
        $nombre = $request->input('nombre');
        $sexo_denunciante = $request->input('sexo_denunciante');
        $ci = $request->input('ci');
        $extension = $request->input('extension');
        $edad = $request->input('edad');
        $direccion = $request->input('direccion');
        $email = $request->input('email');
        $telefono = $request->input('telefono');
        $denunciado = $request->input('denunciado');
        $direccion_denunciado = $request->input('direccion_denunciado');
        $cargo_ocupa = $request->input('cargo_ocupa');
        $ci_denunciado = $request->input('ci_denunciado');
        $edad_denunciado = $request->input('edad_denunciado');
        $telefono_denunciado = $request->input('telefono_denunciado');
        $parentezco = $request->input('parentezco');
        $testigo = $request->input('testigo');
        $parentezco_testigo = $request->input('parentezco_testigo');
        //detalle
        $fecha_denuncia = $request->input('fecha_denuncia');
        $lugar = $request->input('lugar');
        $departamento = $request->input('departamento');
        $detalle = $request->input('detalle');
        $fecha = $request->input('fecha');
        $tipo_violencia = $request->input('tipo_violencia');
       // Agregar los datos al HTML del PDF
        $html = '<h1 style="text-align: center;">Informe de Denuncia</h1>';
        $html .= '<h2>Datos del Denunciante</h2>';
        $html .= '<hr>'; // Agrega una línea divisoria aquí
        $html .= '<p>Nombre Denunciante: ' . $nombre . '</p>';
        $html .= '<p>Sexo: ' . $sexo_denunciante . '</p>';
        $html .= '<p>Edad: ' . $edad . '</p>';
        $html .= '<p>Carnet de Identidad: ' . $ci . '</p>';
        $html .= '<p>Email: ' . $email . '</p>';
        $html .= '<p>Telefono/Celular: ' . $telefono . '</p>';
        $html .= '<p>Direccion: ' . $direccion . '</p>';
        $html .= '<h2>Datos del Denunciado</h2>';
        $html .= '<hr>'; // Agrega una línea divisoria aquí
        $html .= '<p>Denunciado: ' . $denunciado . '</p>';
        $html .= '<p>Direccion: ' . $direccion_denunciado . '</p>';
        $html .= '<p>Carnet de Identidad: ' . $ci_denunciado . '</p>';
        $html .= '<p>Cargo: ' . $cargo_ocupa . '</p>';
        $html .= '<p>Edad: ' . $edad_denunciado . '</p>';
        $html .= '<p>Telefono/Celular: ' . $telefono_denunciado . '</p>';
        $html .= '<h2>Detalle de la denuncia</h2>';
        $html .= '<hr>'; // Agrega una línea divisoria aquí
        $html .= '<p>Fecha de la Denuncia: ' . $fecha_denuncia . '</p>';
        $html .= '<p>Fecha del Suceso: ' . $fecha . '</p>';
        $html .= '<p>Detalle: ' . $detalle . '</p>';
        $html .= '<p>Lugar: ' . $lugar . '</p>';
        $html .= '<p>Departamento: ' . $departamento . '</p>';
        $html .= '<p>Violencia Efectuada: ' . $tipo_violencia . '</p>';
        // Agregar pie de página
        $html .= '
            <div style="position: absolute; bottom: 20px; width: 100%; text-align: center;">
                <p style="font-size: 10px;">No quiero sentirme valiente cuando salga a la calle, quiero sentirme libre</p>
            </div>';
        // Resto de los campos

        // Crear una instancia de Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Opcional) Configurar opciones del PDF
        $dompdf->setPaper('A4', 'portrait');

        // Renderizar el PDF
        $dompdf->render();

        // Guardar el PDF
        $pdfOutput = $dompdf->output();

        return response($pdfOutput, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="informe_denuncia.pdf"',
        ]);

        // Redirigir al formulario con un mensaje de confirmación
        $request->session()->flash('status', 'Completado. El informe se ha enviado por correo electrónico.');
        return redirect()->back()->withInput();

    } 
    public function edit(Form $form)
    {
        return view('admin.form.edit', compact('form'));
    }

    public function update(Request $request, Form $form)
    {
        //Validación
        $request->validate([
            'nombre' => 'required',
        ]);
        // Actualizar información
        $form->update($request->all());
        // Redireccionar
        #return redirect('/admin/forms')->with('mensaje','Evento Modificado Exitosamente!');
        return redirect()->route('admin.form.index', $form)->with('info', 'El formulario se actualizó con éxito');
    }
    public function actualizarEstado(Request $request, $id) {
        // Recupera el modelo correspondiente según el ID
        $form = Form::find($id);
    
        // Actualiza el atributo 'estado' a 'verificado'
        $form->Estado = 'verificado';
        $form->save();
    
        // Redirecciona o realiza cualquier acción necesaria
        return redirect()->route('admin.form.index', $form);
    }
    public function destroy(Form $form)
    {
        $form->delete();
        return redirect()->route('admin.form.index')->with('info', 'El formulario se eliminó con éxito');
    }

    public function generarPDF(Request $request)
    {
        // Lógica para procesar los datos del formulario
        // ...
        // Recopilar datos del formulario
        $nombre = $request->input('nombre');
        $ci = $request->input('ci');
        $email = $request->input('email');
   

         // Agregar los datos al HTML del PDF
        $html = '<h1>Informe de Denuncia</h1>';
        $html .= '<p>Nombre: ' . $nombre . '</p>';
        $html .= '<p>Carnet de Identidad: ' . $ci . '</p>';
        $html .= '<p>Email: ' . $email . '</p>';

        // Crear una instancia de Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Opcional) Configurar opciones del PDF
        $dompdf->setPaper('A4', 'portrait');

        // Renderizar el PDF
        $dompdf->render();

        // Descargar el PDF generado
        return $dompdf->stream('informe_denuncia.pdf');
    }
            
}