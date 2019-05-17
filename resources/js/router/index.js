import Vue from 'vue';
import VueRouter from 'vue-router';

import Top from '../pages/common/TheTop';
import ProjectIndex from '../pages/fms/project/ProjectIndex';
import ProjectDetail from '../pages/fms/project/ProjectDetail';
import ProjectCreate from '../pages/fms/project/ProjectCreate';
import TaskIndex from '../pages/fms/company/task/TaskIndex';
import TaskCreate from '../pages/fms/company/task/TaskCreate';
import TaskDetail from '../pages/fms/company/task/TaskDetail';
import DocumentIndex from '../pages/fms/document/DocumentIndex';
import DocumentInvoiceCreate from '../pages/fms/document/DocumentInvoiceCreate';
import DocumentInvoice from '../pages/fms/document/DocumentInvoice';
import DocumentOrderCreate from '../pages/fms/document/DocumentOrderCreate';
import DocumentOrder from '../pages/fms/document/DocumentOrder';
import DocumentSecrecyCreate from '../pages/fms/document/DocumentSecrecyCreate';
import DocumentSecrecy from '../pages/fms/document/DocumentSecrecy';
import EditIndex from '../pages/fms/edit/EditIndex';
import EditProfile from '../pages/fms/edit/EditProfile';
import PartnerAdminSetting from '../pages/fms/partner/PartnerAdminSetting';
import PartnerProfileSetting from '../pages/fms/partner/PartnerProfileSetting';

import smoothScroll from 'vue-smoothscroll';

Vue.use(VueRouter);
Vue.use(smoothScroll);

const routes = [
    {
        path: '/',
        component: Top
    },
    {
        path: '/project',
        component: ProjectIndex
    },
    {
        path: '/project/detail',
        component: ProjectDetail
    },
    {
        path: '/project/create',
        component: ProjectCreate
    },
    {
        path: '/edit',
        component: EditIndex
    },
    {
        path: '/edit/profile',
        component: EditProfile
    },
    {
        path: '/partner/admin_setting',
        component: PartnerAdminSetting
    },
    {
        path: '/partner/profile_setting',
        component: PartnerProfileSetting
    },
    {
        path: '/task',
        component: TaskIndex
    },
    {
        path: '/task/create',
        component: TaskCreate
    },
    {
        path: '/task/detail',
        component: TaskDetail
    },
    {
        path: '/document',
        component: DocumentIndex
    },
    {
        path: '/document/invoice/create',
        component: DocumentInvoiceCreate
    },
    {
        path: '/document/invoice',
        component: DocumentInvoice
    },
    {
        path: '/document/order/create',
        component: DocumentOrderCreate
    },
    {
        path: '/document/order',
        component: DocumentOrder
    },
    {
        path: '/document/secrecy/create',
        component: DocumentSecrecyCreate
    },
    {
        path: '/document/secrecy',
        component: DocumentSecrecy
    },
    {
        path: '/edit',
        component: EditIndex
    },
    {
        path: '/edit/profile',
        component: EditProfile
    },
    {
        path: '/partner/admin_setting',
        component: PartnerAdminSetting
    },
    {
        path: '/partner/profile_setting',
        component: PartnerProfileSetting
    }
    
];

const router = new VueRouter({
    mode: 'history',
    routes,
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return { x: 0, y: 0 }
        }
    }
});

export default router;
