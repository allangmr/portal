<template>

</template>
<script>
export default{
	data(){
		return {
			nombre:'',
			descripcion:''
		}
	},
	methods:{
		listarPacientes(){
			axios.get('/pacientes')
			  .then(function (response) {
			    // handle success
			    console.log(response);
			  })
			  .catch(function (error) {
			    // handle error
			    console.log(error);
			  });
		}
	},
	mounted(){
		console.log('Component Mounted.');
		this.listarPacientes();
	}
}

</script>