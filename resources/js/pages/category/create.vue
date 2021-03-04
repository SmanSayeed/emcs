<template>
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Create Category</h5>
                <router-link :to="{name:'category-list'}" class="btn btn-primary">Category List</router-link>
            </div>
            <div class="card-body">

<div class="row">
    <div class="col-6 offset-3">

                <form @submit.prevent="createCategory">
                    <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text"  v-model="categoryForm.name" class="from-control" placeholder="Categpry Name" name="name" :class="{ 'is-invalid': categoryForm.errors.has('name') }">

                         <has-error :form="categoryForm" field="name"></has-error>

                    </div>
                        <div class="form-group">
                     <button type="submit" class="btn btn-success">Create</button>
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

            createCategory(){
            //    axios.post('/api/category',
            //     {name:this.categoryName}).then(response => {
            //         console.log(response)
            //         } )

                this.categoryForm.post('/api/category')
                .then(({ data }) => {
                    console.log(data)
                    this.categoryForm.name = ''

                    this.$toast.success({
                        title:'Category Created Successfully',
                        message:''
                    })

                    })


            }

    }


}
</script>

<style>

</style>
