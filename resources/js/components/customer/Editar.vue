<template>
    <div class="container md mt-2 col-lg-5">
        <div class="card border-info">
            <div class="card-header bg-info text-white">
                <center><h2 class="mt-2 mb-2"> EDITAR CLIENTE &nbsp;<i class="fas fa-pen-alt"></i></h2> </center>
            </div>
            <div class="card-body">
                <!-- Formulario -->
                <form @submit.prevent="actualizar">
                    <div>
                        <b><label for="description" class="mt-2">NAME</label></b>
                        <input type="text"  id="name" class="form-control" autocomplete="off" name="name" placeholder="" maxlength="45" v-model="customer.name" required>
                    </div>
                    <div>
                        <b><label for="address" class="mt-2">DIRECCIÓN</label></b>
                        <input type="text"  class="form-control" autocomplete="off" name="address" placeholder="" maxlength="250" v-model="customer.address" required>
                    </div>
                    <div>
                        <b><label for="phone_number" class="mt-2">TELÉFONO</label></b>
                        <input type="text" class="form-control" autocomplete="off" name="phone_number" placeholder="" maxlength="25" v-model="customer.phone_number" required>
                    </div>
<!--                    <div>-->
<!--                        <b><label for="category_id" class="mt-2">CATEGORÍA</label></b>-->
<!--                        <select class="custom-select" name="category_id" id="category_id" required>-->
<!--                            <option value="{{$customer->category_id}}">&#45;&#45;Cambiar categoría&#45;&#45;</option>-->
<!--                            @foreach($categories as $category)-->
<!--                            <option value="{{$category->id}}">{{$category->description}}</option>-->
<!--                            @endforeach-->
<!--                        </select>-->
<!--                    </div>-->
                    <button type="submit" class="btn btn-primary my-3">Guardar</button>
                    <a href="/customers"> <input type="button" value="Cancelar" class="btn btn-danger" id="btnCancelar"></a>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"editar-customer",
    data(){
        return {
            customer:{
                name:"",
                address:"",
                phone_number:""
            }
        }
    },
    mounted(){
        this.mostrarCustomer()
    },
    methods:{
        async mostrarCustomer(){
            await this.axios.get(`/api/customer/${this.$route.params.id}`).then(response=>{
                const { name, address, phone_number } = response.data
                this.customer.name = name
                this.customer.address = address
                this.customer.phone_number = phone_number
            }).catch(error=>{
                console.log(error)
            })
        },
        async actualizar(){
            await this.axios.put(`/api/customer/${this.$route.params.id}`,this.customer).then(response=>{
                this.$router.push({name:"mostrarCustomers"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>

<!--
<form @submit.prevent="actualizar">
-->
