<template>
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Edit Category - {{categoryForm.name}}</h5>
                <router-link :to="{name:'category-list'}" class="btn btn-primary">Category List</router-link>
            </div>
            <div class="card-body">

<div class="row">
    <div class="col-6 offset-3">

                <form @submit.prevent="updateCategory">
                    <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text"  v-model="categoryForm.name" class="from-control" placeholder="Categpry Name" name="name" :class="{ 'is-invalid': categoryForm.errors.has('name') }">

                         <has-error :form="categoryForm" field="name"></has-error>

                    </div>
                        <div class="form-group">
                     <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>

    </div>
</div>

            </div>
        </div>
    </div>
</div>
</div>
</template>

<script>

import { Form } from 'vform'


export default {
    data(){
            return {
                categoryForm: new Form({
                    name: '',
                }),
            }
        },
    methods:{

            updateCategory(){
                    let id = this.$route.params.id;
                this.categoryForm.put(`/api/category/${id}`)
                .then(() => {

                    this.$toast.success({
                        title:'Category Updated Successfully',
                        message:''
                    })

                    })


            },
            loadCategory(){

                let id = this.$route.params.id;
                 console.log(id)
                axios.get(`/api/category/${id}/edit`).then(response => {
                    console.log(response)
                    this.categoryForm.name = response.data.name
                    } )

            }

    },
    mounted(){
         this.loadCategory();
    }


}
</script>

<style>

</style>
