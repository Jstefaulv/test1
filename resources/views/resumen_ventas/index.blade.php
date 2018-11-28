@extends('adminlte::layouts.app')

@section('htmlheader_title')
Resumen Ventas
@endsection

@section('main-content')


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>

@include('footer')
<section class="content-header">
  <h1 class="pull-left">Resumen Ventas</h1>
  <h1 class="pull-right">

  </h1>
</section>
<div class="content container-fluid">
  @include('flash::message')
  <div class="clearfix"></div>
  <!-- inicio marcadores-->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>Brecha</h3>
          <h3>50</h3>
        </div>
        <div class="icon">
          <i class="ion ion-bag">
          </i>
        </div>
        <a class="small-box-footer" href="#">
          Más información
          <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <!-- Fin marcador1 -->

    <!--Inicio marcador2 -->
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-green">
        <div class="inner">
          <h3>Cobranza</h3>
          <h3>50</h3>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars">

          </i>
        </div>
        <a class="small-box-footer" href="#">
          Más información
          <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>

    <!--Fin marcador 2 -->

    <!-- inicio marcador3-->
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>Metas</h3>
          <h3>50</h3>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars">

          </i>
        </div>
        <a class="small-box-footer" href="#">
          Más información
          <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>

    <!-- Fin marcador3 -->
    <!-- Inicio marcador4-->
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-red">
        <div class="inner">
          <h3>NC</h3>
          <h3>50</h3>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph">

          </i>
        </div>
        <a class="small-box-footer" href="#" target="_blank">
          Más información
          <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>

    <!-- Fin marcador4-->
  </div>
  <!--fin fila marcadores -->
  <div class="form">  
    <div class="row">
      <div class="col-md-12">
        <div class="box box-solid box-primary collapsed-box">
          <div class="box-header with-border">
            <h3 class="box-title">
            Filtros</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            </div>
          </div>
          <div class="box-body">
            <input type="checkbox" name="semestral" value="semestral">
            Semestral<br>
            <input type="checkbox" name="mgn_x_producto" value="mgn_x_producto">
            Margen por producto
            <br>
            <input type="checkbox" name="mensual" value="mensual">
            Mensual
            <br>
            <input type="checkbox" name="xFamilia" value="xFamilia">
            por Familia<br>
            <input type="checkbox" name="trimestral" value="trimestral">
            Trimestral<br>
            <input type="submit" id="filtrar" name="filtrar" value="Filtrar">
          </div>
        </div>
      </div>
    </div>
  </div>



  <!--inicio fila2 -->
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Resumen Ventas</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-8">
              <p class="text-center">
                <strong>Ventas Ene-Dic 2017</strong>
              </p>

              <div class="chart">
                <canvas id="myChart"></canvas>

              </div>
            </div>
            <div class="col-md-4">
              <p class="text-center">
               <strong>Metas</strong> 
             </p>
             <div class="progress-group">
               <span class="progress-text">ARCOR</span>
               <span class="progress-number"><b>160</b>/200</span>
               <div class="progress sm">
                <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
              </div>
            </div>

            <div class="progress-group">
              <span class="progress-text">NESTLE</span>
              <span class="progress-number"><b>200</b>/400</span>

              <div class="progress sm">
                <div class="progress-bar progress-bar-red" style="width: 50%"></div>
              </div>
            </div>
            <div class="progress-group">
              <span class="progress-text">PEPSICO</span>
              <span class="progress-number"><b>480</b>/800</span>

              <div class="progress sm">
                <div class="progress-bar progress-bar-green" style="width: 70%"></div>
              </div>
            </div>
            <div class="progress-group">
              <span class="progress-text">PURATOS</span>
              <span class="progress-number"><b>250</b>/500</span>

              <div class="progress sm">
                <div class="progress-bar progress-bar-yellow" style="width: 50%"></div>
              </div>
            </div>
            <div class="progress-group">
              <span class="progress-text">ALIFRUT</span>
              <span class="progress-number"><b>130</b>/260</span>

              <div class="progress sm">
                <div class="progress-bar progress-bar-yellow" style="width: 50%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
              <!--<div class="box-footer">
                <div class="row">
                 <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                    <h5 class="description-header"></h5>
                    <span class="description-text">Sobre ppto</span>
                  </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header"></h5>
                    <span class="description-text">Respecto al Mes Anterior</span>
                  </div>
                </div>

                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                    <h5 class="description-header"></h5>
                    <span class="description-text">Respecto Mes/Año pasado</span>
                  </div>
                </div></div>

              </div>

            </div>-->
          </div>  
        </div>
        <!--fin fila2 -->
        <!--inicio fila3 -->
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Ventas por Vendedor Mes Enero 2018</h3>
                <div class="box-tools pull-right">
                  <!-- Collapse Button -->
                  <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <div class="box-body">
                <canvas id="myChart2"></canvas>

              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Participación por Marca</h3>
                <div class="box-tools pull-right">
                  <!-- Collapse Button -->
                  <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>

                </div>
                <!-- /.box-tools -->
              </div>
              <div class="box-body">
                <canvas id="myChart3"></canvas>
              </div>
            </div>
          </div>
        </div>
        <!--fin fila3 -->
        <!--inicio fila4 -->
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Ventas por canal</h3>
                <div class="box-tools pull-right">
                  <!-- Collapse Button -->
                  <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <div class="box-body">

                <canvas id="myChart4"></canvas>     
              </div>
            </div></div>
            <div class="col-md-6">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Top Vendedor</h3>
                  <div class="box-tools pull-right">
                    <!-- Collapse Button -->
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                      <i class="fa fa-minus"></i>
                    </button>

                  </div>
                  <!-- /.box-tools -->
                </div>
                <div class="box-body">
                 <table id="topClientes" class="table table-bordered table-hover dataTable" role="grid">
                   <thead>
                     <tr role="row">
                       <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Mes">Mes</th>

                       <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="vendedor">Vendedor</th>

                       <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="neto">Neto</th>
                     </tr>
                   </thead>
                   
                 </table>
               </div>
             </div>
           </div>


         </div>
         <!--fin fila4 -->
         @section('scripts')
         <script src="{{ url (mix('/js/app-landing.js')) }}"></script>
         <script type="text/javascript">

  //Principal - Resumen Ventas
  var datos = [];
  graficoTendencial.forEach( function(valor, indice, array) {
    datos.push(graficoTendencial[indice].Neto);
  });
  var ctx = document.getElementById('myChart').getContext('2d');
  var chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
      datasets: [{
        label: "Ventas por Mes",
        borderColor: 'rgb(0, 0, 0)',
        data: datos,
      }]
    },
    options: {
      tooltips:{
       mode: 'point',
       callbacks: {
        label: function(tooltipItem, data) {
          return "$ "+tooltipItem.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        },
      },
    },
    scales: {
      xAxes: [{
        ticks: {}
      }],
      yAxes: [{
        ticks: {
                                  // Return an empty string to draw the tick line but hide the tick label
                                  // Return `null` or `undefined` to hide the tick line entirely
                                  userCallback: function(value, index, values) {
                                      // Convert the number to a string and splite the string every 3 charaters from the end
                                      value = value.toString();
                                      value = value.split(/(?=(?:...)*$)/);

                                      // Convert the array to a string and format the output
                                      value = value.join('.');
                                      return '$' + value;
                                    }
                                  }
                                }]
                              },
                            }
                          });
//Venta por vendedor
var nombreFamilia = [];
var netoFamilia = [];
graficoParticipacionMarca.forEach(function(valor, indice, array){
  nombreFamilia.push(graficoParticipacionMarca[indice].SuperFamilia);
  netoFamilia.push(graficoParticipacionMarca[indice].Neto);
});
/*console.log(netoFamilia);
console.log(nombreFamilia);*/

var ctx = document.getElementById('myChart3').getContext('2d');
var chart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: nombreFamilia,
    datasets: [{
      label: "Enero - Diciembre 2017",
      backgroundColor: ["#F63801"," #27ae60"," #7d3c98"," #f1c40f"," #2980b9 "],
      borderColor: 'white',
      data: netoFamilia,
    }]
  },
  options: {
    tooltips:{
      mode: 'point',
      callbacks: {
        label: function(tooltipItem, data) {
          var dataset = data.datasets[tooltipItem.datasetIndex];
          var meta = dataset._meta[Object.keys(dataset._meta)[0]];
          var total = meta.total;
          var currentValue = dataset.data[tooltipItem.index];
          var percentage = parseFloat((currentValue/total*100).toFixed(1));
          return "$ "+currentValue.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' (' + percentage + '%)';
        },
      },
    }
  }
});

//top vendedores

var vendedores = [{ codigoVendedor: "V29", nombre: 'Claudio Reyes' },
{ codigoVendedor: "V02", nombre: 'Nelly Clerc' },
{ codigoVendedor: "V03", nombre: 'Fabian oyarzo' },
{ codigoVendedor: "V08", nombre: 'Fabian Diaz(Porvenir)' },
{ codigoVendedor: "V04", nombre: 'Jorge Lopez' },
{ codigoVendedor: "V15", nombre: 'Jorge Saldivia' },
{ codigoVendedor: "V13", nombre: 'Damaris Huisca' },
{ codigoVendedor: "V01", nombre: 'Meson' },
{ codigoVendedor: "V16", nombre: 'Carlos Miranda' },
{ codigoVendedor: "V23", nombre: 'Hector Galindo' },
{ codigoVendedor: "V17", nombre: 'Matias Montt' },
{ codigoVendedor: "V24", nombre: 'Christian Inostroza' },
{ codigoVendedor: "V10", nombre: 'Mario Pardo' },
{ codigoVendedor: "V11", nombre: 'Manuel Saldivia' },
{ codigoVendedor: "V28", nombre: 'Gabriela Silva' },
{ codigoVendedor: "V05", nombre: 'Supervisor' },
{ codigoVendedor: "V07", nombre: 'Fabian Diaz' },
{ codigoVendedor: "V19", nombre: 'Carolina Mancilla' },
{ codigoVendedor: "V50", nombre: 'Economato' }];
var codTopVendedores = [];
var NetoVendedores = [];
var NombreVendedores = [];

graficoTopVendedor.forEach( function(valor, indice, array) {
  codTopVendedores.push(graficoTopVendedor[indice].CódigoVendedor);
  NetoVendedores.push(graficoTopVendedor[indice].Neto);
});

for (var i = 0; i < 19; i++) {
  for(var x = 0; x<6; x++){
    if(codTopVendedores[x] == vendedores[i].codigoVendedor){
      NombreVendedores.push(vendedores[i].nombre);
    }
  }
}
var ctx = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: NombreVendedores,
    datasets: [{
      label: "Top 4",
      backgroundColor: ["#F63801"," #27ae60"," #7d3c98"," #f1c40f","#36F2130"],
      borderColor: "white",
      data: NetoVendedores,
    }]
  },
  options: {
    tooltips:{
      mode: 'point',
      callbacks: {
        label: function(tooltipItem, data) {
          return "$ "+tooltipItem.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        },
      },
    },
    scales: {
      xAxes: [{
        ticks: {}
      }],
      yAxes: [{
        ticks: {
                            // Return an empty string to draw the tick line but hide the tick label
                            // Return `null` or `undefined` to hide the tick line entirely
                            userCallback: function(value, index, values) {
                                // Convert the number to a string and splite the string every 3 charaters from the end
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);

                                // Convert the array to a string and format the output
                                value = value.join('.');
                                return '$' + value;
                              }
                            }
                          }]
                        },
                      }
                    });

//ventas por canal

var NetoCanal = [];
var NumCanal = [];

graficoPorCanal.forEach(function(valor, indice, array){
  NumCanal.push(graficoPorCanal[indice].Canal);
  NetoCanal.push(graficoPorCanal[indice].Neto);
});

console.log(NetoCanal);
console.log(NumCanal);

var ctx = document.getElementById('myChart4').getContext('2d');
var chart = new Chart(ctx, {

 type: 'bar',
 data: {
  labels: NumCanal,
  datasets: [{
    label: "Enero - Diciembre 2017",
    backgroundColor: ["#F63801"," #27ae60"," #7d3c98"," #f1c40f","#36F2130"],
    borderColor: 'rgb(251, 0, 131)',
    data: NetoCanal,
  }]
},

options: {
  tooltips:{
   mode: 'point'
 }
}
});

//Top de clientes


var ctx = document.getElementById('myChart5').getContext('2d');
var chart = new Chart(ctx, {

 type: 'bar',
 data: {
  labels: ["Enero","Febrero","Marzo","Abril"],
  datasets: [{
    label: "Enero - Diciembre 2017",
    backgroundColor: ["#F63801"," #27ae60"," #7d3c98"," #f1c40f"," #2980b9 "],
    borderColor: 'rgb(251, 0, 131)',
    data: [5.5,6.0,4.6,7.0],
  }]
},

options: {
  tooltips:{
   mode: 'point'
 }
}
});

</script>
@endsection
</div><!--fin contenido -->
@endsection
