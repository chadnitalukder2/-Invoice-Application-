<template>
    <div class="container">
    <!--==================== INVOICE LIST ====================-->
    <div class="invoices">
        
        <div class="card__header">
            <div>
                <h2 class="invoice__title">All Customer</h2>
            </div>
            
        </div>

        <div class="table card__content">
            <div class="table--filter">
                <span class="table--filter--collapseBtn ">
                    <i class="fas fa-ellipsis-h"></i>
                </span>
                <div class="table--filter--listWrapper">
                    <ul class="table--filter--list">
                        <li>
                            <p class="table--filter--link table--filter--link--active">
                                All
                            </p>
                        </li>
                        <li>
                            <p class="table--filter--link ">
                                Paid
                            </p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="table--search">
                <div class="table--search--wrapper">
                    <select class="table--search--select" name="" id="">
                        <option value="">Filter</option>
                    </select>
                </div>
                <div class="relative">
                    <i class="table--search--input--icon fas fa-search "></i>
                    <input class="table--search--input" type="text" placeholder="Search invoice">
                </div>
            </div>

            <div class="table--heading">
                <p>ID</p>
                <p>First Name</p>
                <p>Last Name</p>
                <p>Email </p>
                <p>Address</p>
            </div>

            <!-- item 1 -->
            <div class="table--items" v-for="item in customers" :key="item.key">
                <a href="#"  ># {{ item.id }}</a>
                <p>{{ item.firstname }}</p>
                <p>{{ item.lastname }}</p>
                <p >{{ item.email }}</p>
                <p>{{ item.address }}</p>
            </div>
            <div v-if="customers.length === 0">
                <p>Invoice not found</p>
            </div>


        </div>
        
    </div>

    </div>
</template>


<script setup>
import axios from "axios";
import { onMounted, ref } from "vue";
import { useRouter } from "vue-router";
const router = useRouter();

let customers = ref([]);

onMounted(async () => {
    getCustomers();
});

const getCustomers = async () => {
    let response = await axios.get("/api/get_all_customer");
    customers.value = response.data.customers;
    console.log("response.data.Products", response.data.customers);
};

    
</script>