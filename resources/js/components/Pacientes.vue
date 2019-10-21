<template >
  <!-- Begin Page Content -->
  <div v-if="show=='pacientes'">
    <spinner v-if="loading"></spinner>
    <div v-else class="container-fluid">
      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Consulta de Pacientes</h1>
      <p class="mb-4">Información detallada de los pacientes.</p>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header pt-3">
          <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h6 class="m-0 font-weight-bold text-primary d-inline">Registro de Pacientes</h6>
            <button
              type="button"
              @click="show='nuevo'"
              class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm"
            >
              <i class="fas fa-user-injured"></i> NUEVO
            </button>
            <!-- use the modal component, pass in the prop -->
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Acciones</th>
                  <th>Nombre</th>
                  <th>Identificación</th>
                  <th>Médico</th>
                  <th>Hospital</th>
                  <th>Estado Paciente</th>
                  <th>Estado</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="paciente in arrayPacientes" :key="paciente.id">
                  <div
                    v-if="paciente.poliza_tres ==''"
                    class="d-none"
                  >{{paciente.poliza_tres = 'DESCONOCIDA'}}</div>
                  <td>
                    <div class="btn-group" role="group">
                      <button
                        type="button"
                        @click="show='ver';verPaciente(paciente.id)"
                        class="btn btn-sm btn-success"
                      >
                        <i class="fas fa-search"></i> Ver
                      </button>

                      <button
                        type="button"
                        @click="show='editar';editarPaciente(paciente.id)"
                        class="btn btn-sm btn-warning"
                      >
                        <i class="fas fa-user-edit"></i> Editar
                      </button>
                    </div>
                  </td>
                  <td v-text="paciente.nombre"></td>
                  <td v-text="paciente.identidad"></td>
                  <td v-text="paciente.medico"></td>
                  <td v-text="paciente.hospital"></td>
                  <td v-text="paciente.estado_paciente"></td>
                  <td v-text="paciente.estado"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div v-else-if="show=='ver'">
    <div v-if="cargado">
      <spinner v-if="loadings"></spinner>
      <div v-else class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Información del Paciente</h1>
        <p class="mb-4">Información detallada del paciente.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header pt-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-2">
              <h6 class="m-0 font-weight-bold text-primary d-inline">Detalles del Paciente</h6>
              <button
                type="button"
                @click="show='pacientes'; cargado=false;"
                class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm"
              >
                <i class="fas fa-user-injured"></i> Consulta de Pacientes
              </button>
              <!-- use the modal component, pass in the prop -->
            </div>
          </div>
          <div class="card-body">
            <form
              id="signupForm"
              class="col-md-10 mx-auto"
              method="post"
              action
              novalidate="novalidate"
              _lpchecked="1"
            >
              <div class="form-group">
                <label for="firstname">Nombre Completo</label>
                <div>
                  <input
                    type="text"
                    class="form-control"
                    v-bind:value="PacienteSolo.nombre"
                    readonly
                  />
                </div>
              </div>

              <div class="form-group">
                <label for="lastname">Identidad</label>
                <div>
                  <input
                    type="text"
                    class="form-control"
                    v-bind:value="PacienteSolo.identidad"
                    name="pac_id"
                    readonly
                  />
                </div>
              </div>

              <div class="form-group">
                <label for="firstname">Hospital</label>
                <div>
                  <input
                    type="text"
                    class="form-control"
                    v-bind:value="PacienteSolo.hospital"
                    readonly
                  />
                </div>
              </div>

              <div class="form-group">
                <label for="firstname">Habitación</label>
                <div>
                  <input
                    type="text"
                    class="form-control"
                    v-bind:value="PacienteSolo.habitacion"
                    readonly
                  />
                </div>
              </div>

              <div class="form-group">
                <label for="lastname">Piso Hospital</label>
                <div>
                  <input
                    type="text"
                    class="form-control"
                    v-bind:value="PacienteSolo.piso_hospital"
                    name="pac_id"
                    readonly
                  />
                </div>
              </div>

              <div class="form-group">
                <label for="lastname">Observación del Paciente</label>
                <div>
                  <textarea class="form-control" v-bind:value="PacienteSolo.observación" readonly></textarea>
                </div>
              </div>

              <div class="form-group">
                <label for="username">Fecha de Entrada al Hospital</label>
                <div>
                  <input
                    type="text"
                    class="form-control"
                    v-bind:value="format_date(PacienteSolo.fec_entrada)"
                    readonly
                  />
                </div>
              </div>

              <div class="form-group">
                <label for="email">Fecha de Salida del Hospital</label>
                <div>
                  <input
                    type="text"
                    class="form-control"
                    v-bind:value="format_date(PacienteSolo.fec_salida)"
                    readonly
                  />
                </div>
              </div>

              <div class="form-group">
                <label for="password">Doctores</label>
                <input type="text" class="form-control" v-bind:value="PacienteSolo.medico" readonly />
              </div>

              <div class="form-group">
                <label for="email">Aseguradoras</label>
                <div>
                  <input
                    type="text"
                    class="form-control"
                    v-bind:value="aseguradoras(PacienteSolo.aseguradora_uno, PacienteSolo.aseguradora_dos, PacienteSolo.aseguradora_tres)"
                    readonly
                  />
                </div>
              </div>

              <div class="form-group">
                <label for="password">Polizas</label>
                <input
                  type="text"
                  class="form-control"
                  v-bind:value="aseguradoras(PacienteSolo.poliza_uno, PacienteSolo.poliza_dos, PacienteSolo.poliza_tres)"
                  readonly
                />
              </div>

              <div class="form-group">
                <label for="password">Numero de Formulario (Atención)</label>
                <input
                  type="text"
                  class="form-control"
                  v-bind:value="PacienteSolo.num_formulario"
                  readonly
                />
              </div>

              <div class="form-group">
                <label for="password">Monto Pasado</label>
                <input
                  type="text"
                  class="form-control"
                  v-bind:value="PacienteSolo.monto_pasado"
                  readonly
                />
              </div>

              <div class="form-group">
                <label for="password">Monto Recibido</label>
                <input
                  type="text"
                  class="form-control"
                  v-bind:value="PacienteSolo.monto_recibido"
                  readonly
                />
              </div>

              <div class="form-group">
                <label for="password">Detalle de Pago</label>
                <textarea class="form-control" v-bind:value="PacienteSolo.detalle_pago" readonly></textarea>
              </div>

              <div class="form-group">
                <label for="password">Estado de Atencion</label>
                <input
                  type="text"
                  class="form-control"
                  v-bind:value="PacienteSolo.estado_paciente"
                  readonly
                />
              </div>

              <div class="form-group">
                <label for="password">Estado de Paciente</label>
                <input type="text" class="form-control" v-bind:value="PacienteSolo.estado" readonly />
              </div>

              <div class="form-group">
                <button
                  type="button"
                  class="btn btn-warning"
                  @click="show='editar';verPaciente(PacienteSolo.id)"
                >
                  <i class="fas fa-user-edit"></i> Editar Paciente
                </button>
                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">
                  <i class="fas fa-search"></i> Ver Atenciones
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div v-else-if="show=='editar'">
    <div v-if="cargado">
      <spinner v-if="loadings"></spinner>
      <div v-else class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Información del Paciente</h1>
        <p class="mb-4">Información detallada del paciente.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header pt-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-2">
              <h6 class="m-0 font-weight-bold text-primary d-inline">Detalles del Paciente</h6>
              <button
                type="button"
                @click="show='pacientes'; cargado=false;"
                class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm"
              >
                <i class="fas fa-user-injured"></i> Consulta de Pacientes
              </button>
              <!-- use the modal component, pass in the prop -->
            </div>
          </div>
          <div class="card-body">
            <form
              id="signupForm"
              class="col-md-10 mx-auto"
              method="post"
              action
              novalidate="novalidate"
              _lpchecked="1"
            >
              <div class="form-group">
                <label for="firstname">Nombre Completo</label>
                <div>
                  <input
                    type="text"
                    class="form-control"
                    v-bind:value="PacienteSolo.nombre"
                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                  />
                </div>
              </div>

              <div class="form-group">
                <label for="lastname">Identidad</label>
                <div>
                  <input
                    type="text"
                    class="form-control"
                    v-bind:value="PacienteSolo.identidad"
                    name="pac_id"
                  />
                </div>
              </div>

              <div class="form-group">
                <label for="firstname">Hospital</label>
                <div>
                  <input type="text" class="form-control" v-bind:value="PacienteSolo.hospital" />
                </div>
              </div>

              <div class="form-group">
                <label for="firstname">Habitación</label>
                <div>
                  <input type="text" class="form-control" v-bind:value="PacienteSolo.habitacion" />
                </div>
              </div>

              <div class="form-group">
                <label for="lastname">Piso Hospital</label>
                <div>
                  <input
                    type="text"
                    class="form-control"
                    v-bind:value="PacienteSolo.piso_hospital"
                    name="pac_id"
                  />
                </div>
              </div>

              <div class="form-group">
                <label for="lastname">Observación del Paciente</label>
                <div>
                  <textarea class="form-control" v-bind:value="PacienteSolo.observación"></textarea>
                </div>
              </div>

              <div class="row" style="margin-bottom: 1rem;">
                <div class="col">
                  <label for="username">Fecha de Entrada al Hospital - Anterior</label>
                  <input
                    type="text"
                    class="form-control"
                    v-bind:value="format_date(PacienteSolo.fec_entrada)"
                  />
                </div>
                <div class="col">
                  <label for="username">Fecha de Entrada al Hospital - Nueva</label>
                  <input type="date" class="form-control" />
                </div>
              </div>

              <div class="row" style="margin-bottom: 1rem;">
                <div class="col">
                  <label for="username">Fecha de Salida del Hospital - Anterior</label>
                  <input
                    type="text"
                    class="form-control"
                    v-bind:value="format_date(PacienteSolo.fec_salida)"
                  />
                </div>
                <div class="col">
                  <label for="username">Fecha de Salida del Hospital - Nueva</label>
                  <input type="date" class="form-control" />
                </div>
              </div>

              <div class="form-group">
                <label for="password">Doctores</label>

                <select class="form-control">
                  <option v-bind:value="PacienteSolo.medico" selected>{{PacienteSolo.medico}}</option>
                  <option value="DR. ARROCHA">DR. ARROCHA</option>
                  <option value="DR. SANDOVAL">DR. SANDOVAL</option>
                  <option value="DR. SOLIS">DR. SOLIS</option>
                  <option value="DR. CALZADA">DR. CALZADA</option>
                </select>
              </div>

              <div class="form-group">
                <label for="email">Aseguradoras</label>
                <div>
                  <select class="form-control">
                    <option
                      v-bind:value="aseguradoras(PacienteSolo.aseguradora_uno, PacienteSolo.aseguradora_dos, PacienteSolo.aseguradora_tres)"
                      selected
                    >{{aseguradoras(PacienteSolo.aseguradora_uno, PacienteSolo.aseguradora_dos, PacienteSolo.aseguradora_tres)}}</option>
                    <option value="ASSA">ASSA</option>
                    <option value="IS">IS</option>
                    <option value="MAPFRE">MAPFRE</option>
                    <option value="SURA">SURA</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="password">Polizas</label>
                <input
                  type="text"
                  class="form-control"
                  v-bind:value="aseguradoras(PacienteSolo.poliza_uno, PacienteSolo.poliza_dos, PacienteSolo.poliza_tres)"
                />
              </div>

              <div class="form-group">
                <label for="password">Numero de Formulario (Atención)</label>
                <input type="text" class="form-control" v-bind:value="PacienteSolo.num_formulario" />
              </div>

              <div class="form-group">
                <label for="password">Monto Pasado</label>
                <input type="text" class="form-control" v-bind:value="PacienteSolo.monto_pasado" />
              </div>

              <div class="form-group">
                <label for="password">Monto Recibido</label>
                <input type="text" class="form-control" v-bind:value="PacienteSolo.monto_recibido" />
              </div>

              <div class="form-group">
                <label for="password">Detalle de Pago</label>
                <textarea class="form-control" v-bind:value="PacienteSolo.detalle_pago"></textarea>
              </div>

              <div class="form-group">
                <label for="password">Estado de Atencion</label>
                <input type="text" class="form-control" v-bind:value="PacienteSolo.estado_paciente" />
              </div>

              <div class="form-group">
                <label for="password">Estado de Paciente</label>
                <input type="text" class="form-control" v-bind:value="PacienteSolo.estado" />
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-warning" @click="1==1">
                  <i class="fas fa-user-edit"></i> Editar Paciente
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div v-else>
    <div class="container-fluid">
      <button
        type="button"
        @click="show='pacientes'"
        class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm"
      >
        <i class="fas fa-user-injured"></i> Consultar Pacientes
      </button>
      <h1>Nuevo Paciente</h1>
    </div>
  </div>
</template>

<script>
import datatables from "datatables";
export default {
  data() {
    return {
      showModal: false,
      loading: true,
      loadings: true,
      show: "pacientes",
      cargado: false,
      id: "",
      nombre: "",
      identidad: "",
      fec_entrada: "",
      fec_salida: "",
      id_medico: "",
      aseguradora_uno: "",
      poliza_uno: "",
      aseguradora_dos: "",
      poliza_dos: "",
      aseguradora_tres: "",
      poliza_tres: "",
      num_formulario: "",
      hospital: "",
      piso_hospital: "",
      habitacion: "",
      observacion: "",
      monto_pasado: "",
      monto_recibido: "",
      detalle_pago: "",
      fec_entrega_factura_seguro: "",
      fec_recibo_pago: "",
      estado_paciente: "",
      estado: "",
      created_at: "",
      updated_at: "",
      arrayPacientes: [],
      PacienteSolo: [],
      dataTable: null
    };
  },
  methods: {
    listarPacientes() {
      let me = this;
      axios
        .get("/pacientes")
        .then(function(response) {
          // handle success
          me.arrayPacientes = response.data;
          me.mytable();
          me.loading = false;
        })
        .catch(function(error) {
          // handle error
          console.log(error);
        });
    },
    verPaciente(id) {
      this.PacienteSolo = [];
      let param = id;
      let me = this;
      axios
        .get("/pacientes/" + param)
        .then(function(response) {
          // handle success
          me.PacienteSolo = response.data;
          me.loadings = false;
          me.cargado = true;
        })
        .catch(function(error) {
          // handle error
          console.log(error);
        });
    },
    editarPaciente(id) {
      this.PacienteSolo = [];
      let param = id;
      let me = this;
      axios
        .get("/pacientes/" + param)
        .then(function(response) {
          // handle success
          me.PacienteSolo = response.data;
          me.loadings = false;
          me.cargado = true;
        })
        .catch(function(error) {
          // handle error
          console.log(error);
        });
    },
    maskCheck: function(field) {
      if (field.target.inputmask.isComplete()) {
        console.log("is Complete");
      } else {
        console.log("is Incomplete");
      }
    },
    aseguradoras(val1, val2, val3) {
      let aseguradora_1 = val1;
      let aseguradora_2 = val2;
      let aseguradora_3 = val3;
      let contador_aseguradora = "";
      if (aseguradora_1) {
        contador_aseguradora += aseguradora_1;
      }
      if (aseguradora_2) {
        contador_aseguradora += ", " + aseguradora_2;
      }
      if (aseguradora_3) {
        contador_aseguradora += ", " + aseguradora_3;
      }
      return contador_aseguradora;
    },
    format_date(inputDate) {
      var date = new Date(inputDate);
      if (!isNaN(date.getTime())) {
        // Months use 0 index.
        return (
          date.getDate() +
          "/" +
          (date.getMonth() + 1) +
          "/" +
          date.getFullYear()
        );
      }
    },
    mytable() {
      $(function() {
        $("#dataTable").DataTable({
          language: {
            sProcessing: "Procesando...",
            sLengthMenu: "Mostrar _MENU_ registros",
            sZeroRecords: "No se encontraron resultados",
            sEmptyTable: "Ningún dato disponible en esta tabla =(",
            sInfo:
              "Registros del _START_ al _END_ de un total de _TOTAL_ registros",
            sInfoEmpty: "Registros del 0 al 0 de un total de 0 registros",
            sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
            sInfoPostFix: "",
            sSearch: "Buscar:",
            sUrl: "",
            sInfoThousands: ",",
            sLoadingRecords: "Cargando...",
            oPaginate: {
              sFirst: "Primero",
              sLast: "Último",
              sNext: "Siguiente",
              sPrevious: "Anterior"
            },
            oAria: {
              sSortAscending:
                ": Activar para ordenar la columna de manera ascendente",
              sSortDescending:
                ": Activar para ordenar la columna de manera descendente"
            },
            dom: "Bfrtip",
            buttons: ["copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"]
          }
        });
      });
    }
  },
  mounted() {
    console.log("Componente montado Paciente.");
    this.listarPacientes();
  }
};
</script>

  <style type="text/css">
.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: table;
  transition: opacity 0.3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  min-width: 200px;
  overflow-y: auto;
  overflow-x: none;
  max-width: 800px;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.33);
  transition: all 0.3s ease;
  font-family: Helvetica, Arial, sans-serif;
}

.modal-header h3 {
  margin-top: 0;
  color: #42b983;
}

.modal-body {
  margin: 20px 0;
}

.modal-default-button {
  float: right;
}

/*
 * The following styles are auto-applied to elements with
 * transition="modal" when their visibility is toggled
 * by Vue.js.
 *
 * You can easily play with the modal transition by editing
 * these styles.
 */

.modal-enter {
  opacity: 0;
}

.modal-leave-active {
  opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
input.form-control {
  text-transform: uppercase;
}
textarea.form-control {
  text-transform: uppercase;
}
</style>