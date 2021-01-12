<template>
    <div class="container">
        <table class="table table-bordered ">
            <thead>

                <tr class="bg-secondary text-light text-center">
                  <th scope="col">Hora</th>
                    <th scope="col" v-for="(item, index) in dias" :key="index">{{item}}</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center" v-for="(item,index) in _horas"  :key="index">
                    <th  scope="row"  >{{item.hora_ini}} - {{item.hora_fin}}</th>
                    <template v-if="item.data.length > 0 ">
                      <td  v-for="( dia, i) in dias"  :key="i">
                        <div v-for="( data  ,j) in item.data"  :key="j"> 
                          <template v-if="data.dia === dia">
                            <b>{{data.curso}}</b><small>{{data.grupo ? ' - ' + (data.grupo) : '' }}</small>    <br>
                            <small>{{data.docente ? data.docente :'' }} </small>
                          </template>
                        </div>
                      </td>
                    </template>

                    <template  v-else-if="item.receso">
                      <th colspan="5" class=" bg-warning"  >
                        RECESO
                      </th>
                    </template>
                    <template v-else>
                      <td v-for="(item, i) in 5" :key="i"></td>
                    </template>

                </tr>
            </tbody>
        </table>
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
