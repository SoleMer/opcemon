"use strict"

//OBTENGO VALORES
let material = document.querySelector("#id_material").value; 
let accessCommissions[] = 

//


//VUE PARA MOSTRAR LAS COMISIONES
let commissions = new Vue({
    el: "#commissions",
    data: {
        loading: true, //MIENTRAS CARGAN LAS COMISIONES MUESTRA QUE ESTA CARGANDO
        error: false, //SI NO SE OBTIENEN LAS COMISIONES SE MOSTRARA EL ERROR
        allCommissions: [], 
    },
    methods: {

        save: function(id){
          setAccess(id);
        },
    },
});

//OBTENGO TODAS LAS COMISIONES 
function getCommissions(){
    commissions.loading = true;
    fetch('api/commissions/')
        .then(response => response.json())
        .then(commissions =>{
            if(commissions == null){
                commissions.error = true;
            }
            else{
                commissions.allCommissions = commissions;
            }
            commissions.loading = false;
        })
};

//GUARDA PERMISO DE ACCESO A UNA COMISION
function setAccess(id_commission){
    let AccessCommission = {
      id_material: material,
      commissionAccess: id_commission
    };
    fetch("api/commissions/" + id_material + commissionAccess, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(AccessCommission),
    })
    .then((response) => {
        if (response.ok){
            alert('Permiso de acceso otorgado.');
        }
        else{
            alert('No se le puede dar acceso a esa comision');
        }
    })
      .catch((error) => {
        console.log(error);
      })
};


//OBTENGO TODAS LAS COMISIONES CON ACCESO AL MATERIAL
function getCommissionsAccess(){
    commissions.loading = true;
    let id_material = material;
    fetch('api/commissions/' + id_material)
        .then(response => response.json())
        .then(commissionsAccess =>{
            if(commissionsAccess == null){
                commissions.error = true;
            }
            else{
                commissions.accessCommissions = commissionsAccess;
            }
            commissions.loading = false;
        })
};

//
