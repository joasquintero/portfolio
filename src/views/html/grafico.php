<style>
    .caja{
        margin: auto;
        max-width: 250px;
        padding: 20px;
        border: 1px solid #BDBDBD;
    }
    .caja select{
        width: 100%;
        font-size: 16px;
        padding: 5px;
    }
</style>

<div class="col-4"></div>
<div class="col-4">
	<div class="caja">
		<select onChange="mostrarResultados(this.value);">
			<?php
				for($i=2014;$i<date('Y',time())+1;$i++){
					if($i == date('Y',time())){
						echo '<option value="'.$i.'" selected>'.$i.'</option>';
					}else{
						echo '<option value="'.$i.'">'.$i.'</option>';
					}
				}
			?>
		</select>
	</div>
	<div id="graficaLineal" style="width: 100%; height: 500px; margin: 0 auto"></div>
</div>
<div class="col-4"></div>
<!-- MAÑANA EMPEZAR A HACER EL GRAFICO OBTENIENDO LOS DATOS DE LA DB EDITAR LA GRAFICA DE ABAJO UTILIZANDO AJAX
 Y SI ES POSIBLE COLOCAR UN DOCUMENTO DE PROCESAR EN LA MISMA CARPETA PARA CAPTURAR LOS DATOS.-->

<script type="text/javascript">
var chart;
$(document).ready(mostrarResultados(2014));
	function mostrarResultados(año){
		$.ajax({
			type:'POST',
			url:'procesar.php',
			data:'año='+año,
			dataType: 'html',
			success:function(data){
				var valores = $.get(data);

                var e   = valores[0];
                var f   = valores[1];
                var m   = valores[2];
                var a   = valores[3];
                var ma  = valores[4];
                var j   = valores[5];
                var jl  = valores[6];
                var ag  = valores[7];
                var s   = valores[8];
                var o   = valores[9];
                var n   = valores[10];
                var d   = valores[11];

			chart = new Highcharts.Chart({
			chart: {
				renderTo: 'graficaLineal', 	// Le doy el nombre a la gráfica
				defaultSeriesType: 'line'	// Pongo que tipo de gráfica es
			},
			title: {
				text: 'Estadistica mensual'	// Titulo (Opcional)
			},
			subtitle: {
				text: 'Enfermedades'		// Subtitulo (Opcional)
			},
			// Pongo los datos en el eje de las 'X'
			xAxis: {
				categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
				// Pongo el título para el eje de las 'X'
				title: {
					text: 'Meses'
				}
			},
			yAxis: {
				// Pongo el título para el eje de las 'Y'
				title: {
					text: 'Nº de casos'
				}
			},
			// Doy formato al la "cajita" que sale al pasar el ratón por encima de la gráfica
			tooltip: {
				enabled: true,
				formatter: function() {
					return '<b>'+ this.series.name +'</b><br/>'+
						this.x +': '+ this.y +' '+this.series.name;
				}
			},
			// Doy opciones a la gráfica
			plotOptions: {
				line: {
					dataLabels: {
						enabled: true
					},
					enableMouseTracking: true
				}
			},
			// Doy los datos de la gráfica para dibujarlas
			series: [{
		                name: ['yolo'],
		                data: [e, f, m, a, ma, j, jl, ag, s, o, n, d]
		            },
		            {
		                name: ['Visitantes Únicos'],
		                data: [21,278,203,370,810,213,0,134,1991,3122,2870,3655]
		            },
		            {
		                name: 'Páginas Vistas',
		                data: [1064,1648,1040,1076,2012,397,0,325,3732,6067,5226,6482]
		            }],
		});		
			}
		});
	}
			
</script>