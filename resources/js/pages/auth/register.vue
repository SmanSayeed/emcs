<template>
<div class="container">
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Register</h5>
                <router-link :to="{name:'login'}" class="btn btn-primary">Login </router-link>
            </div>
            <div class="card-body">

<div class="row">

    <div class="col-6 offset-3">

                <form @submit.prevent="login()">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email"  v-model="loginForm.email" class="from-control" placeholder="Email" name="email" :class="{ 'is-invalid': loginForm.errors.has('email') }">

                         <has-error :form="loginForm" field="email"></has-error>

                    </div>

                      <div class="form-group">
                        <label for="">Password</label>
                        <input type="password"  v-model="loginForm.password" class="from-control" placeholder="Categpry Name" name="password" :class="{ 'is-invalid': loginForm.errors.has('password') }">

                         <has-error :form="loginForm" field="password"></has-error>

                    </div>

                        <div class="form-group">
                     <button type="submit" class="btn btn-success">Register</button>
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
                loginForm: new Form({
                    email: '',
                    password:''
                }),
            }
        },
    methods:{
        login(){
            axios.get('/sanctum/csrf-cookie').then(response=>{
                this.loginForm.post('login',{
                email: 'saad@gmail.com',
                password: '11112222'
                });
            });
        }

    }


}
</script>

<style>

</style>
