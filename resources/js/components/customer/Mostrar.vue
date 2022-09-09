<template>
    <div class="row">
            <div class="card border-info">
                <div class="text-start my-2">
                    <div class="card-header bg-info text-white">
                        <router-link :to='{name:"crearCustomer"}' class="btn btn-light">Nuevo</router-link>
                    </div>
                </div>
                <div class="card-body">
                <table class="table table-striped table-bordered m-auto">
                    <thead class="thead-dark">
                    <tr>
                        <th colspan="5"><h5><center>Clientes</center></h5></th>
                    </tr>
                    <tr>
                        <th scope="col"><center>ID</center></th>
                        <th scope="col"><center>NOMBRE</center></th>
                        <th scope="col"><center>DIRECCIÓN</center></th>
                        <th scope="col"><center>TELÉFONO</center></th>
                        <th scope="col"><center>OPCIONES</center></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="customer in customers" :key="customer.id">
                        <td><center>{{ customer.id }}</center></td>
                        <td><center>{{ customer.name }}</center></td>
                        <td><center>{{ customer.address }}</center></td>
                        <td><center>{{ customer.phone_number }}</center></td>
                        <td>
                            <center>
                            <router-link :to='{name:"editarCustomer",params:{id:customer.id}}' class="btn btn-warning"><i class="fas fa-edit"></i></router-link>
                            <a type="button" @click="borrarCustomer(customer.id)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </center>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
</template>

<script>
export default {
    name:"customers",
    data(){
        return {
            customers:[]
        }
    },
    mounted(){
        this.mostrarCustomers()
    },
    methods:{
        async mostrarCustomers(){
            await this.axios.get('/api/customer').then(response=>{
                this.customers = response.data
            }).catch(error=>{
                console.log(error)
                this.customers = []
            })
        },
        borrarCustomer(id){
            if(confirm("¿Desea eliminar el registro?")){
                this.axios.delete(`/api/customer/${id}`).then(response=>{
                    this.mostrarCustomers()
                    alert("Registro Eliminado");
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>
