import {createRouter, createWebHistory} from "vue-router";

import notFound from '../components/NotFound.vue';

import invoiceIndex from '../components/invoices/index.vue';
import invoiceNew from '../components/invoices/new.vue';
import invoiceShow from '../components/invoices/show.vue';
import invoiceEdit from '../components/invoices/edit.vue';
import AddCustomer from '../components/invoices/add_customer.vue';
import AddProduct from '../components/invoices/add_product.vue';
import AllCustomer from '../components/invoices/all_customer.vue';
import AllProduct from '../components/invoices/all_product.vue';
import EditProduct from '../components/invoices/edit_product.vue';
import EditCustomer from '../components/invoices/edit_customer.vue';

const routes =[
    {
        path: '/',
        component:invoiceIndex
    },
    {
        path: '/invoice/new',
        name : 'invoice.new',
        component: invoiceNew
    },
    {
        path: '/invoice/Show/:id',
        name : 'invoice.Show',
        component: invoiceShow,
        props:true
    },
    {
        path: '/invoice/edit/:id',
        component: invoiceEdit,
        props:true
    },
    {
        path: '/add/customer',
        name : 'add.customer',
        component: AddCustomer
    },
    {
        path: '/edit/customer/:id',
        name : 'edit.customer',
        component: EditCustomer
    },
    {
        path: '/all/customer',
        name : 'all.customer',
        component: AllCustomer
    },
    {
        path: '/add/product',
        name : 'add.product',
        component: AddProduct
    },
    {
        path: '/edit/product/:id',
        name : 'edit.product',
        component: EditProduct
    },
    {
        path: '/all/product',
        name : 'all.product',
        component: AllProduct
    },
    {
        path: '/:pathMatch(.*)',
        component:notFound
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;