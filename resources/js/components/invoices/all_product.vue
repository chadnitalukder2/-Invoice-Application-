<template>
    <div style="max-width: 950px; margin-left: auto; margin-right: auto;">
        <!--==================== INVOICE LIST ====================-->
        <div class="invoices">
            <div class="card__header">
                <div>
                    <h2 class="invoice__title">All Product</h2>
                </div>
            </div>

            <div class="table card__content">
                <div class="table--filter">
                    <span class="table--filter--collapseBtn">
                        <i class="fas fa-ellipsis-h"></i>
                    </span>
                    <div class="table--filter--listWrapper">
                        <ul class="table--filter--list">
                            <li>
                                <p
                                    class="table--filter--link table--filter--link--active"
                                >
                                    All
                                </p>
                            </li>
                            <li>
                                <p class="table--filter--link">Paid</p>
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
                        <i class="table--search--input--icon fas fa-search"></i>
                        <input
                            class="table--search--input"
                            type="text"
                            placeholder="Search invoice"
                        />
                    </div>
                </div>

                <div class="table--heading">
                    <p>ID</p>
                    <p>Item Code</p>
                    <p>Description</p>
                    <p>Unit Price</p>
                </div>

                <!-- item 1 -->
                <div
                    class="table--items"
                    v-for="item in Products"
                    :key="item.id"
                >
                    <p># {{ item.id }}</p>
                    <p>{{ item.item_code}}</p>
                    <p>{{ item.description }}</p>
                    <p>{{ item.unit_price }}</p>
                </div>
                <div v-if="Products.length === 0">
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

let Products = ref([]);

onMounted(async () => {
    getProducts();
});

const getProducts = async () => {
    let response = await axios.get("/api/get_all_product");
    Products.value = response.data.products;
    // console.log("response.data.Products", response.data.products);
};
</script>
