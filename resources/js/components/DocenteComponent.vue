<template>
  <div class="container">
    <h1>Docentes</h1>
    <h3>Turno Mañana</h3>
    <horario-component :horario="horario" :turno_horas="turno_maniana"></horario-component>
  </div>
</template>
<script>
import HorarioComponent from './HorarioComponent.vue';
export default {
  components: { HorarioComponent },
  data:()=>({
    horario:[
      {dia: 'Lunes', hora_ini:'7:30', hora_fin:'8:20', grupo:'A', curso:'Matemarica'},
      {dia: 'Lunes', hora_ini:'8:20', hora_fin:'9:10', grupo:'A', curso:'Matemarica'},
      {dia: 'Jueves', hora_ini:'9:10', hora_fin:'10:00', grupo:'A', curso:'Matemarica'},
      {dia: 'Lunes', hora_ini:'10:10', hora_fin:'11:00', grupo:'B', curso:'Quimica'},
      {dia: 'Lunes', hora_ini:'11:00', hora_fin:'11:50', grupo:'B', curso:'Quimica'},
      {dia: 'Viernes', hora_ini:'7:30', hora_fin:'8:20', grupo:'B', curso:'Algebra'},
      {dia: 'Viernes', hora_ini:'8:20', hora_fin:'9:10', grupo:'B', curso:'Algebra'},
      {dia: 'Viernes', hora_ini:'9:10', hora_fin:'10:00', grupo:'B', curso:'Algebra'},
      {dia: 'Martes', hora_ini:'11:00', hora_fin:'11:50', grupo:'A', curso:'Fisica'},
    
      {dia: 'Miercoles', hora_ini:'8:20', hora_fin:'9:10', grupo:'A', curso:'Geometria'},
      {dia: 'Miercoles', hora_ini:'9:10', hora_fin:'10:00', grupo:'A', curso:'Geometria'},
 
      {dia: 'Viernes', hora_ini:'10:10', hora_fin:'11:00', grupo:'A', curso:'Matemarica'},
      {dia: 'Viernes', hora_ini:'11:00', hora_fin:'11:50', grupo:'A', curso:'Matemarica'},
      {dia: 'Martes', hora_ini:'7:30', hora_fin:'8:20', grupo:'B', curso:'Trigonometria'},
      {dia: 'Martes', hora_ini:'8:20', hora_fin:'9:10', grupo:'B', curso:'Trigonometria'},
    ],
    turno_maniana:[
      {hora_ini:'7:30', hora_fin:'8:20', data:[]},
      {hora_ini:'8:20', hora_fin:'9:10', data:[]},
      {hora_ini:'9:10', hora_fin:'10:00', data:[]},
   
      {hora_ini:'10:10', hora_fin:'11:00', data:[]},
      {hora_ini:'11:00', hora_fin:'11:50', data:[] },
    ],

    turno_tarde:[
      {hora_ini:'14:00', hora_fin:'14:50', data:[]},
      {hora_ini:'14:50', hora_fin:'15:40', data:[]},
      {hora_ini:'15:40', hora_fin:'16:30', data:[]},
      {hora_ini:'16:40', hora_fin:'17:30', data:[]},
      {hora_ini:'17:30', hora_fin:'18:20', data:[] },
    ],

    turno_noche:[
      {hora_ini:'17:20', hora_fin:'18:10', data:[]},
      {hora_ini:'18:10', hora_fin:'19:00', data:[]},
      {hora_ini:'19:00', hora_fin:'19:50', data:[]},
      {hora_ini:'19:50', hora_fin:'20:40', data:[]},
      {hora_ini:'20:40', hora_fin:'21:30', data:[]},
    ],
  }),
};
</script>
