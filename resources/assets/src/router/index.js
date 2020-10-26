import Vue from 'vue'
import Router from 'vue-router'
import Meta from 'vue-meta'
import NotFound from '@/components/NotFound'

import globals from '@/globals'

// Layouts
import Layout1 from '@/layout/Layout1'
import axios from 'axios'

Vue.use(axios)
axios.defaults.baseURL = 'http://127.0.0.1:8000/api'
Vue.use(Router)
Vue.use(Meta)

const router = new Router({
  base: '/',
  //mode: 'history',
  routes: [{
    path: '/',
    component: Layout1,
    children: [{
      path: '',
      component: () => import('@/components/Home')
    },
    {
      path: '/npas/:npa',
      component: () => import('@/components/Npa'),
    },
    {
      path: 'npas',
      component: () => import('@/components/Npas'),
      meta: {auth: false}
    },
    {
      path: 'npas_analysis',
      component: () => import('@/components/NpasAnalysis'),
      meta: {auth: false}
    },
    {
      path: '/categories/:category',
      component: () => import('@/components/Category'),
    },
    {
      path: 'categories',
      component: () => import('@/components/Categories'),
      meta: {auth: false}
    },
    {
      path: 'sign_didgest',
      component: () => import('@/components/SignDidgest'),
      meta: {auth: false}
    },
    {
      path: 'new_question',
      component: () => import('@/components/NewQuestion'),
      meta: {auth: false}
    },
    {
      path: 'materials',
      component: () => import('@/components/Materials'),
      meta: {auth: false}
    },
  
    
  ]
  }, {
    // 404 Not Found page
    path: '*',
    component: NotFound
  }]
})

router.afterEach(() => {
  // On small screens collapse sidenav
  if (window.layoutHelpers && window.layoutHelpers.isSmallScreen() && !window.layoutHelpers.isCollapsed()) {
    setTimeout(() => window.layoutHelpers.setCollapsed(true, true), 10)
  }

  // Scroll to top of the page
  globals().scrollTop(0, 0)
})

router.beforeEach((to, from, next) => {
  // Set loading state
  document.body.classList.add('app-loading')

  // Add tiny timeout to finish page transition
  setTimeout(() => next(), 10)
})

export default router
