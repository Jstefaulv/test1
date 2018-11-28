<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\ResumenVentas;
use JavaScript;

class Resumen_ventas extends Controller{
    public function index()
    {
        $resumen = DB::select("SELECT Mes, SUM(Neto) AS Neto FROM pl_resumen_ventas WHERE Mes > '201711' GROUP BY Mes");
        
        $TopVendedor = DB::select("SELECT TOP 5 Mes, CódigoVendedor,
            SUM(Neto) AS Neto
            FROM pl_resumen_ventas
            WHERE Mes > '201711' AND CódigoVendedor IN
            (SELECT CódigoVendedor FROM (
            SELECT TOP 5 CódigoVendedor, SUM(Neto) AS Neto
            FROM pl_resumen_ventas WHERE  Mes > '201711'
            GROUP BY CódigoVendedor
            ORDER BY SUM(Neto) DESC) AS t)
            GROUP BY Mes, CódigoVendedor
            ORDER BY Mes DESC, Neto DESC
            ");
        $PorMarca = DB::select("SELECT TOP 5 Mes, SuperFamilia,
            SUM(Neto) AS Neto
            FROM pl_resumen_ventas
            WHERE Mes > '201711' AND SuperFamilia IN
            (SELECT SuperFamilia FROM (
            SELECT TOP 5 SuperFamilia, SUM(Neto) AS Neto
            FROM pl_resumen_ventas WHERE  Mes > '201711'
            GROUP BY SuperFamilia
            ORDER BY SUM(Neto) DESC) AS t)
            GROUP BY Mes, SuperFamilia
            ORDER BY Mes DESC
            ");


        $PorCanal=DB::select("SELECT TOP 4 Mes, Canal,
            SUM(Neto) AS Neto
            FROM pl_resumen_ventas
            WHERE Mes > '201711' AND Canal IN
            (SELECT Canal FROM (
            SELECT TOP 5 Canal, SUM(Neto) AS Neto
            FROM pl_resumen_ventas WHERE  Mes > '201711'
            GROUP BY Canal
            ORDER BY SUM(Neto) DESC) AS t)
            GROUP BY Mes, Canal
            ORDER BY Mes DESC, Neto DESC
            ");

       


        JavaScript::put([
            'graficoTendencial' => $resumen,
            'graficoTopVendedor' => $TopVendedor,
            'graficoParticipacionMarca' => $PorMarca,
            'graficoPorCanal' => $PorCanal,
        ]);

        return view('resumen_ventas.index');
    }
}
