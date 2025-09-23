<?php

use App\Imports\CursosImport;
use Maatwebsite\Excel\Facades\Excel;

class DigitalTransformationV4Controller extends Controller
{
    public function index()
    {
        $data = Excel::toArray(new CursosImport, storage_path('app/cursos.xlsx'));

        $courses = array_slice($data[0], 1);

        $courses = array_map(function ($row) {
            return [
                'titulo' => $row[0] ?? '',
                'horario' => $row[3] ?? '',
                'inicio' => $row[5] ?? '',
                'modalidad' => $row[14] ?? '',
                'duracion' => $row[4] ?? '',
                'convocatoria' => $row[1] ?? '',
                'imagen' => $row[19] ?? '',
            ];
        }, $courses);

        return view('transformacion-digital-v4', compact('courses'));
    }
}