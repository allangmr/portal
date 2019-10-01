<template>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Consulta de Pacientes</h1>
          <p class="mb-4">Información detallada de los pacientes.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header pt-3">
            	<div class="d-sm-flex align-items-center justify-content-between mb-2">
              <h6 class="m-0 font-weight-bold text-primary d-inline">Registro de Pacientes</h6>
           	    	<button type="button" @click="hola()" class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm"><i class="fas fa-user-injured"></i> NUEVO</button>
            	</div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Identificación</th>
                      <th>Médico</th>
                      <th>Hospital</th>
                      <th>Piso hospital</th>
                      <th>Habitacion</th>
                      <th>Acciones</th>
                      <th>Estado Paciente</th>
                      <th>Estado</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="paciente in arrayPacientes" :key="paciente.id">
                    	<div v-if="paciente.poliza_tres ==''" class="d-none">
                    		{{paciente.poliza_tres = 'DESCONOCIDA'}}
                    	</div>
                      <td v-text="paciente.nombre"></td>
                      <td v-text="paciente.identidad"></td>
                      <td v-text="paciente.medico"></td>
                      <td v-text="paciente.hospital"></td>
                      <td v-text="paciente.piso_hospital"></td>
                      <td v-text="paciente.habitacion"></td>
                      <td><div class="dropdown">
							  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							    OPCIONES
							  </button>
							  <div class="dropdown-menu">
							    <a class="dropdown-item" href="#">VER</a>
							    <a class="dropdown-item" href="#">EDITAR</a>
							    <div v-if="paciente.estado_paciente=='EN ATENCIÓN' || paciente.estado_paciente=='SALIDA' ">
							    	<a class="dropdown-item" href="#">FINALIZAR</a>
							    </div>
							    <div v-else>
							    	<a class="dropdown-item" href="#">EN ATENCIÓN</a>
							    </div>
							    <div v-if="paciente.estado=='ACTIVO'">
							    	<a class="dropdown-item" href="#">DESACTIVAR</a>
							    </div>
							    <div v-else>
							    	<a class="dropdown-item" href="#">ACTIVAR</a>
							    </div>

							  </div>
							</div>
					   </td>
                      <td v-text="paciente.estado_paciente"></td>
                      <td v-text="paciente.estado"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
</template>
<script>
import datatables from 'datatables'
export default{
	data(){
		return {
			id:'',
			nombre:'',
			identidad:'',
			fec_entrada:'',
			fec_salida:'',
			id_medico:'',
			aseguradora_uno:'',
			poliza_uno:'',
			aseguradora_dos:'',
			poliza_dos:'',
			aseguradora_tres:'',
			poliza_tres:'',
			num_formulario:'',
			hospital:'',
			piso_hospital:'',
			habitacion:'',
			observacion:'',
			monto_pasado:'',
			monto_recibido:'',
			detalle_pago:'',
			fec_entrega_factura_seguro:'',
			fec_recibo_pago:'',
			estado_paciente:'',
			estado:'',
			created_at:'',
			updated_at:'',
			arrayPacientes:[],
			dataTable:null
		}
	},
	methods:{
		listarPacientes(){
			let me = this;
			axios.get('/pacientes')
			  .then(function (response) {
			    // handle success
			   me.arrayPacientes = response.data;
			   me.mytable();
			  })
			  .catch(function (error) {
			    // handle error
			    console.log(error);
			  })

		},
		hola(){
			alert("hola");
		},
		mytable(){
			$(function(){
				$('#dataTable').DataTable({
				"language": {
		                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
                "sInfo":           "Registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad"
                }
		        }
				});
			});
		}
	},
	mounted(){
		console.log('Componente montado Paciente.');
		this.listarPacientes();
	}
}

</script>