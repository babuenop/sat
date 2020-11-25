<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    protected $fillable = [

    
        'id',   
        'serie',
        'fabricante',
        'posicionGic',
        'sociedad',         
        'mueble',           
        'modelo',           
        'estado',           
        'fechaFabricacion',
        'centro',           
        'subdivision',      
        'participado',      
        'fechaDeIngreso',   
        'fechaDeSalida',    
        'origen',  
        'destino',          
    ];
}


// INSERT INTO slots (id,serie,fabricante,posicionGic,sociedad,mueble,modelo, estado,fechaFabricacion,centro,subdivision,participado,fechaDeIngreso,fechaDeSalida,origen,destino) VALUES (2,5432122,"IGT",12345,"Gaming and Services","G20","CATS",1,'12/12/2018',"BODEGA","PARQUE SUR","ND",'12/12/2019','12/12/2018',"VISTA ALEGRE","ARRAIJAN");