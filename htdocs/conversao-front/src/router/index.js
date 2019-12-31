import Vue from 'vue'
import Router from 'vue-router'
import Template from '@/components/Template'
import Form from '@/paginas/Form'
import Link from '@/paginas/Link'
Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Template',
      component: Template,
      children: [
        {
          path: 'home',
          alias: '',
          name: 'Form',
          component: Form,
        },
        {
          path: 'invite/:hash',
          name: 'Conversao',
          component: Form,
        },
        {
          path: 'link/:id',
          name: 'Link',
          component: Link,
        },
      ]
    },
  ]
})
