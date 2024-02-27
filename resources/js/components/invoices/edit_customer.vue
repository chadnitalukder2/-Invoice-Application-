<template>
    <div style="max-width: 950px; margin-left: auto; margin-right: auto;">
        <div class="invoices">
            <div class="card__header">
                <div>
                    <h2 class="invoice__title">Edit Customer</h2>
                </div>
            </div>
            <div class="table card__content" style="padding: 20px 30px">
                <div>
                    <p class="my-1">First Name</p>
                    <input v-model="customer.firstname" type="text" class="input" />
                </div>
                <div>
                    <p class="my-1">Last Name</p>
                    <input v-model="customer.lastname" type="text" class="input" />
                </div>
                <div>
                    <p class="my-1">Email</p>
                    <input v-model="customer.email" type="text" class="input" />
                </div>
                <div>
                    <p class="my-1">Address</p>
                    <input v-model="customer.address" type="text" class="input" />
                </div>
               
                <div style="margin-top: 30px">
                    <a class="btn btn-secondary" @click="onUpdate()">Update Data</a>
                </div>
            </div>
        </div>
    </div>
</template>

    <script setup>
    import axios from "axios";
    import { useRouter } from "vue-router";
    import {onMounted, ref } from "vue";
    const router = useRouter();
    import { useRoute } from 'vue-router'

    const route = useRoute()

    const customer = ref([]);

    onMounted(async () => {
        getCustomer();
    });

    const onUpdate = async () => {
     
        let data = {
            firstname : customer.value.firstname,
            lastname : customer.value.lastname,
            email : customer.value.email ,
            address : customer.value.address,
        }
        let response = await axios.post(`/api/update_customer/${customer.value.id}`,data );
       
        alert( response.data.msg);
         // form.value=[];
        router.push('/all/customer')
    };

    const getCustomer = async () => {
        let response = await axios.get(`/api/edt_customer/${route.params.id}`)
    
       customer.value = response.data.customer;
    //   console.log(customer.value);
        
    }


    </script>

<style scoped>
    .error-class {
        color: red; 
        font-weight: bold;
    }
</style>
