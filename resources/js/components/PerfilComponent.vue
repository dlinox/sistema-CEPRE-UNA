<template>
    
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" src="https://blog.photofeeler.com/wp-content/uploads/2017/12/linkedin-profile-picture.jpg" width="150" height="150">
                    <span class="font-weight-bold">Ronaldo20</span>
                    <span class="text-black-50">Yohel.Ronaldo@gmail.com</span>
                    <span>965 672 342</span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="text-right font-weight-bold">Perfil de docente</h6>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels font-weight-bold">Nombre:</label></div>
                        <div class="col-md-12"><label class="labels">Lic. Yohel Ronaldo </label> <label> Quispe Arratia</label></div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels font-weight-bold">Tipo de documento: </label></div>
                        <div class="col-md-6"><label class="labels font-weight-bold">Numero:</label></div>
                    
                        <div class="col-md-6"><label class="labels">DNI </label></div>
                        <div class="col-md-6"><label class="labels">70757838</label></div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels font-weight-bold">Condición:</label></div>
                        <div class="col-md-6"><label class="labels font-weight-bold">Telefono:</label></div>
                        <div class="col-md-6"><label class="labels">Particular:</label></div>
                        <div class="col-md-6"><label class="labels">051-34221</label></div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels font-weight-bold">Profesión: </label></div>
                        <div class="col-md-12"><label class="labels">Licenciatura en Físico Matemáticas</label></div>
                    </div>
                    <div class="row mt-3 mb-2">
                        <div class="col-md-12"><label class="labels font-weight-bold">Dirección: </label></div>
                        <div class="col-md-12"><label class="labels">Av. Las palmas #1024</label></div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span class="font-weight-bold">Datos Unap</span></div>
                    <div class="d-flex flex-row mt-3 exp-container"><img src="https://upload.wikimedia.org/wikipedia/commons/c/cb/Logo_UNAP.png" width="45" height="45">
                        <div class="work-experience ml-1">
                            <span class="font-weight-bold d-block">Docente de la Unap</span>
                            <span class="d-block text-black-50 labels"><span class="labels font-weight-bold">Cod Docente: </span>Doc-392812</span>
                            <span class="d-block text-black-50 labels">Vigente - Enero 2021</span></div>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
    </div>



</template>

<script>
export default {
  props:['horario','turno_horas'],
  data:()=>({
    dias:[
      'Lunes','Martes','Miercoles','Jueves','Viernes'
    ],
    _horario:[],
    _horas:[]
   
  }),
  async created(){
    this._horario = [];
    this._horas = [];
    this._horario = this.horario
    this._horas = this.turno_horas
    await this.GenerarHorarioEs();
  },
  methods:{
    GenerarHorarioEs(){
      this._horario.forEach(item => {
        this._horas.forEach(element => {
          if( item.hora_ini === element.hora_ini && item.hora_fin === element.hora_fin){
            element.data.push({
              dia: item.dia,
              curso: item.curso,
              docente: item.docente,
              grupo: item.grupo
          })}
        });
      });
    },
  } 
};
</script>
