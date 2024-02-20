import {createRouter, createWebHistory} from "vue-router";

import notFound from '../components/NotFound.vue';

import invoiceIndex from '../components/invoices/index.vue';
import invoiceNew from '../components/invoices/new.vue';
import invoiceShow from '../components/invoices/show.vue';

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
        path: '/:pathMatch(.*)',
        component:notFound
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;