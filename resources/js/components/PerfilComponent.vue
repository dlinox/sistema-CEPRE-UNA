<template>

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row" v-for="docente in perfilDocente">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" :src="docente.fotoDocente" width="150" height="150">
                    
                    <span class="font-weight-bold">{{ docente.nombre }}</span>
        
                    <span class="text-black-50">{{ docente.correo }}</span>
                    <span>{{ docente.celular }}</span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="text-right font-weight-bold">Perfil de docente</h6>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels font-weight-bold">Nombre:</label></div>
                        <div class="col-md-12"><label class="labels">Lic. {{ docente.nombre }} </label> <label> {{ docente.apellidos }}</label></div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels font-weight-bold">Tipo de documento: </label></div>
                        <div class="col-md-6"><label class="labels font-weight-bold">Numero:</label></div>
                    
                        <div class="col-md-6"><label class="labels">{{ docente.tipo_Documento }} </label></div>
                        <div class="col-md-6"><label class="labels">70757838</label></div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels font-weight-bold">Condición:</label></div>
                        <div class="col-md-6"><label class="labels font-weight-bold">Telefono:</label></div>
                        <div class="col-md-6"><label class="labels">{{ docente.condicion }}</label></div>
                        <div class="col-md-6"><label class="labels">{{ docente.telefono }}</label></div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels font-weight-bold">Profesión: </label></div>
                        <div class="col-md-12"><label class="labels">{{ docente.profesion }}</label></div>
                    </div>
                    <div class="row mt-3 mb-2">
                        <div class="col-md-12"><label class="labels font-weight-bold">Dirección: </label></div>
                        <div class="col-md-12"><label class="labels">{{ docente.dirección }}</label></div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span class="font-weight-bold">Datos Unap</span></div>
                    <div class="d-flex flex-row mt-3 exp-container"><img src="https://upload.wikimedia.org/wikipedia/commons/c/cb/Logo_UNAP.png" width="45" height="45">
                        <div class="work-experience ml-1">
                            <span class="font-weight-bold d-block">Docente de la Unap</span>
                            <span class="d-block text-black-50 labels"><span class="labels font-weight-bold">Cod Docente: </span>{{ docente.codDocente }}</span>
                            <span class="d-block text-black-50 labels">Vigente - Enero 2021</span></div>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
    </div>



</template>

<script>
export default{
    data:()=>({
    perfilDocente:[
        {nombre:'Yohel Ronaldo', apellidos:'Quispe Arratia',fotoDocente:'https://blog.photofeeler.com/wp-content/uploads/2017/12/linkedin-profile-picture.jpg', tipo_Documento:'DNI', numero_DNI:'70757838', condicion:'particular', telefono:'051-13421', profesion:'Licenciatura en Físico Matemáticas',direccion:'Av. Las Palmas #1023', codDocente:'Doc-392712',usuarioDocente:'Ronaldo20', correo:'Yohel.Ronaldo@gmail.com',celular:'965672354'},
    ]

    })
}


</script>
