import { createRouter, createWebHistory, RouterLink } from 'vue-router'
import Accueil from '../views/Accueil.vue'
// import Form from '../views/Form.vue'
// import HomeView from '../views/HomeView.vue'



const routes = [
  {
    path: '/',
    name: 'Accueil',
    component:Accueil
    // component: import(/* webpackChunkName: "Form" */ '../views/Accueil.vue')
  },
  {
      path: '/Form',
      name: 'Form',
      // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "Form" */ '../views/Form.vue')
    },
  // {
  //   path: '/',
  //   name: 'HomeView',
  //   component: HomeView
  // },
  {
    path: '/HomeView',
    name: 'HomeView',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "HomeView" */ '../views/HomeView.vue')
  },
  {
    path: '/Register',
    name: 'Register',

    component: () => import('../components/Register.vue')
  },
  {
    path: '/Dashboard',
    name: 'Dashboard',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "Dashboard" */ '../views/Dashboard.vue')
  },
  {
    path: '/Login',
    name: 'Login',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "Login" */ '../views/Login.vue')
  },

  
  // {
  //   path: '/Form',
  //   name: 'Form',
  //   // route level code-splitting
  //   // this generates a separate chunk (about.[hash].js) for this route
  //   // which is lazy-loaded when the route is visited.
  //   component: () => import(/* webpackChunkName: "Form" */ '../views/Form.vue')
  // }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
