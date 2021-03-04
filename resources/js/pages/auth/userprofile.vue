<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">User Profile </h5>
                        <router-link :to="{name:'create-category'}" class="btn btn-primary ">Edit Profile</router-link>

                    </div>

                    <div class="card-body">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>Id</th>
                                   <th>Name</th>
                                   <th>email</th>
                                   <th>Action</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>{{userdata.id}}</td>
                                   <td>{{userdata.name}}</td>
                                   <td>{{userdata.email}}</td>
                                   <td>
                                       <router-link :to="{name:'edit-category' , params:{id: category.id} }" class="btn btn-success btn-sm">Edit</router-link>

                                   </td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                categories:[]
            }
        },
        methods:{
            loadUserdata(){
                axios.get('/api/category').then(response => {
                    this.categories = response.data;
                });
            },

        },
        mounted() {
            console.log('Component mounted.')
            this.loadCategories();
        }
    }
</script>
