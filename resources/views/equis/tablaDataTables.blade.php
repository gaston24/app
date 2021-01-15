<table id="dataTabla" >
            
    <thead>
        <tr>

            <td class="col-"><h4 >FECHA</h4></td>
            
            <td class="col-"><h4 >RAZON SOCIAL</h4></td>
            
            <td class="col-"><h4 >N COMP</h4></td>
            
            <td class="col-"><h4 >CANT ART</h4></td>
            
            <td class="col-"><h4 >IMPORTE</h4></td>
            
            <td class="col-"><h4 >NUM GUIA</h4></td>

            <td class="col-"><h4 >SELEC</h4></td>
        </tr>
        
    </thead>
    
    <tbody>

        @foreach ($todos as $todo)

        <tr>
            <td>{{Carbon\Carbon::parse($todo->FECHA_MOV)->format('Y-m-d')}}</td>
            <td>{{$todo->RAZON_SOCI}}</td>
            <td>{{$todo->N_COMP}}</td>
            <td>{{number_format($todo->CANT_ART , 0, '', '.')}}</td>
            <td>{{number_format($todo->IMPORTE_TO , 0, '', '.')}}</td>
            <td>{{$todo->GC_GDT_NUM_GUIA}}</td>
            <td>
                <input type="checkbox" onclick="cambiar('{{$todo->N_COMP}}')" <?php if($todo->CHEQUEADO==1){echo 'checked';} ?>>
            </td>
        </tr>
            
        @endforeach
        



       

                        
    </tbody>
        
    </table>