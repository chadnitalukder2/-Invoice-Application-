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
                <div style="margin-top: 30px">
                    <a class="btn btn-secondary" @click="Update()">Update Data</a>
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
    import { useRoute } from 'vue-router';

    const route = useRoute();

const form = ref([]);

    onMounted(async () => {
        getProduct();
    });

const Update = async () => {
     let data = {
        item_code  : form.value.item_code ,
        description : form.value.description,
        unit_price : form.value.unit_price ,
     }
    //  console.log({data});
     let response = await axios.post(`/api/update_product/${form.value.id}`,data );
     alert( response.data.msg);
     router.push('/all/product')

};

const getProduct = async () => {
    let response = await axios.get(`/api/edit_product/${route.params.id}`)
    // console.log('response', response)
    form.value = response.data.product
    console.log('form', form.value)
}
</script>

<style scoped>
    .error-class {
        color: red; 
        font-weight: bold;
    }
</style>
