<template>
    <div style="max-width: 950px; margin-left: auto; margin-right: auto;">
        <div class="invoices">
            <div class="card__header">
                <div>
                    <h2 class="invoice__title">Add Product</h2>
                </div>
            </div>
            <div class="table card__content" style="padding: 20px 30px">
                <div>
                    <p class="my-1">Item Code</p>
                    <input v-model="form.item_code " type="text" class="input" />
                </div>
                <div>
                    <p class="my-1">Product Description</p>
                    <input v-model="form.description" type="text" class="input" />
                </div>
                <div>
                    <p class="my-1">Unit Price</p>
                    <input v-model="form.unit_price" type="text" class="input" />
                </div>
                <br>
               <p v-if="showError" :class="{'error-class' : showError}"> All fields are required </p>
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
let showError = ref(false);

const onSave = async () => {
    showError.value = false;
    if(!form.value.item_code || !form.value.description || !form.value.unit_price){
        showError.value = true;
        return;
    }
     let data = {
        item_code  : form.value.item_code ,
        description : form.value.description,
        unit_price : form.value.unit_price ,
     }
    //  console.log({data});
     let response = await axios.post("/api/add_product",data );
     
     form.value=[];
     router.push('/all/product')

};
</script>

<style scoped>
    .error-class {
        color: red; 
        font-weight: bold;
    }
</style>
