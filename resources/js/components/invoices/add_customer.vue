<template>
    <div class="container">
        <div class="invoices">
            <div class="card__header">
                <div>
                    <h2 class="invoice__title">Add Customer</h2>
                </div>
            </div>
            <div class="table card__content" style="padding: 20px 30px">
                <div>
                    <p class="my-1">First Name</p>
                    <input v-model="form.firstname" type="text" class="input" />
                </div>
                <div>
                    <p class="my-1">Last Name</p>
                    <input v-model="form.lastname" type="text" class="input" />
                </div>
                <div>
                    <p class="my-1">Email</p>
                    <input v-model="form.email" type="text" class="input" />
                </div>
                <div>
                    <p class="my-1">Address</p>
                    <input v-model="form.address" type="text" class="input" />
                </div>
                <div style="margin-top: 30px">
                    <a class="btn btn-secondary" @click="onSave()">Save</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import axios from "axios";
import { useRouter } from "vue-router";
import { ref } from "vue";
const router = useRouter();

const form = ref([]);

const onSave = async () => {
    
     let data = {
        firstname : form.value.firstname,
        lastname : form.value.lastname,
        email : form.value.email ,
        address : form.value.address,
     }
    //  console.log({data});
     let response = await axios.post("/api/add_customer",data );
     form.value=[];

};
</script>

<style scoped>

</style>
