<template>
  <div>
      <h2 class="my-2">Todo los cursos</h2>
      <hr>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Curso</th>
      <th scope="col">Grupo</th>
      <th scope="col">Meet</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(item, index) in cursos" :key="index">
      <th scope="row"> {{index + 1 }} </th>
      <td >
          {{item.nombre}}
      </td>
      <td >
          {{item.grupo}}
      </td>
      <td>
          <a :href="item.meet">
              Ir
          </a>
      </td>
    </tr>
  </tbody>
</table>



  </div>
</template>

<script>
export default {
    data:()=>({
        cursos:[
            {nombre:'Matematica', grupo:'A', meet:'https://meet.google.com/dmk-znpq-mef'},
            {nombre:'Geometria', grupo:'A', meet:'https://meet.google.com/dmk-znpq-mef'},
            {nombre:'Trigonoometria', grupo:'A', meet:'https://meet.google.com/dmk-znpq-mef'},
            {nombre:'Algebra', grupo:'A', meet:'https://meet.google.com/dmk-znpq-mef'},
        ]
    })
}
</script>

<style>

</style>