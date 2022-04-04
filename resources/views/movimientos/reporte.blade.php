

<center><h1>Reporte De Movimientos Ingresos</h1></center>
<table border="1" class="table table-striped" >

	<th height="25" width="30" TD bgcolor="green">#</th>
	<th height="25" width="75" TD bgcolor="green">cantidad</th>
	<th height="25" width="75" TD bgcolor="green">Fecha</th>
    <th height="25" width="75" TD bgcolor="green">Nombre</th>
    <th height="25" width="75" TD bgcolor="green">Apellido</th> 
    <th height="25" width="75" TD bgcolor="green">Cedula</th>
   
    <?php
    $t_ing=0;
    $t_egr=0;
    $t_saldo=0;
    ?>
    @foreach($movimientos as $mov)

    

    <tr>
    	<td>{{$loop->iteration}}</td>
        
    	<td>{{$mov->mov_cantidad}}</td>
    	<td>{{$mov->mov_fecha}}</td>
        <td>{{$mov->usu_nombre}}</td>
        <td>{{$mov->usu_apellido}}</td>
        <td>{{$mov->usu_cedula}}</td>
        
        <td>
            


        </td>
    </tr>


    @endforeach
</table>