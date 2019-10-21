<template>
  <div class="container-fluid">
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
            @click="show='pacientes'"
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
              <input type="text" class="form-control" v-bind:value="PacienteSolo.nombre" readonly />
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
              <input type="text" class="form-control" v-bind:value="PacienteSolo.hospital" readonly />
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
              <textarea class="form-control" v-bind:value="PacienteSolo.observación"></textarea>
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
            <textarea class="form-control" v-bind:value="PacienteSolo.detalle_pago"></textarea>
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
            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">
              <i class="fas fa-search"></i> Ver Atenciones
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
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
    }
  },
  mounted() {
    console.log("Componente montado Ver Paciente.");
  }
};
</script>      