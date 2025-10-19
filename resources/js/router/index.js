import { createRouter, createWebHistory } from 'vue-router';
import Login from '../pages/Login.vue';
import Dashboard from '../pages/Dashboard.vue';

// Define routes
const routes = [
  { path: '/', redirect: '/login' },
  { path: '/login', name: 'Login', component: Login },
  { path: '/dashboard', name: 'Dashboard', component: Dashboard, meta: { requiresAuth: true }},
  { path: '/users', name: 'Users', component: () => import('../pages/Users.vue') , meta: { requiresAuth: true } },
  { path: '/users/edit/:identifier', name: 'EditUser', component: () => import('../pages/EditUser.vue'), props: true, meta: { requiresAuth: true } },
  { path: '/contact-messages', name: 'ContactMessages', component: () => import('../pages/ContactMessage.vue'), meta: { requiresAuth: true } },
  { path: '/payments', name: 'Payments', component: () => import('../pages/Payments.vue'), meta: { requiresAuth: true } },
  { path: '/subscriptions', name: 'Subscriptions', component: () => import('../pages/Subscription.vue'), meta: { requiresAuth: true } },
];

// Create router
const router = createRouter({
  history: createWebHistory(),
  routes,
});

router.beforeEach((to, from, next) => {
  const isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';

  if (to.meta.requiresAuth && !isLoggedIn) {
    next({ name: 'Login' });
  } else if (to.name === 'Login' && isLoggedIn) {
    next({ name: 'Users' });
  } else {
    next(); 
  }
});

export default router;
