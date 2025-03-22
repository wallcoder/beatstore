import { createRouter, createWebHistory } from 'vue-router'
import MainLayout from '../views/MainLayout.vue'
import Home from '../views/Home.vue'
import Contact from '../views/Contact.vue'
import Cart from '../views/Cart.vue'
import Checkout from '../views/Checkout.vue'
import Login from '../views/Login.vue'
import SignUp from '../views/SignUp.vue'
import RequestPasswordReset from '../views/RequestPasswordReset.vue'
import ResetPassword from '../views/ResetPassword.vue'
import Orders from '../views/Orders.vue'
import Purchases from '../views/Purchases.vue'
import AdminLayout from '../views/Admin/AdminLayout.vue'
import AdminDashboard from '../views/Admin/AdminDashboard.vue'
import AdminProduct from '../views/Admin/AdminProduct.vue'
import AdminProductCreate from '../views/Admin/AdminProductCreate.vue'
import AdminProductEdit from '../views/Admin/AdminProductEdit.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'main-layout',
      component: MainLayout,
      children: [
        {
          path: '',
          name: 'home',
          component: Home
        },

        {
          path: '/contact',
          name: 'contact',
          component: Contact
        },
        {
          path: '/cart',
          name: 'cart',
          component: Cart
        },
        {
          path: '/checkout',
          name: 'checkout',
          component: Checkout
        },
        {
          path: '/account/login',
          name: 'login',
          component: Login
        },
        {
          path: '/account/register',
          name: 'register',
          component: SignUp
        },
        {
          path: '/account/request-password-reset',
          name: 'request-password-reset',
          component: RequestPasswordReset
        },
        {
          path: '/account/orders',
          name: 'orders',
          component: Orders
        },
        {
          path: '/account/purchases',
          name: 'purchases',
          component: Purchases
        },
        {
          path: '/account/reset-password/:token/:email',
          name: 'reset-password',
          props: true,
          component: ResetPassword
        }
      ]
    },
    {
      path: '/admin',
      name: 'admin',
      component: AdminLayout,
      children: [{
        path: '',
        name: 'dashboard',
        component: AdminDashboard
      },
      {
        path: 'products',
        name: 'products',
        component: AdminProduct
      },
      {
        path: 'products/create',
        name: 'products-create',
        component: AdminProductCreate
      },
      {
        path: 'products/:id/edit',
        name: 'products-edit',
        component: AdminProductEdit
      }
    
    ]
    }

  ],
  scrollBehavior(to, from, savedPosition) {
    if (to.hash) {
      return {
        el: to.hash,
        behavior: 'smooth',
      };
    }
    return savedPosition || { top: 0 };
  },
})

export default router
