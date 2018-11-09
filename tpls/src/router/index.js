import Vue from 'vue'
import Router from 'vue-router'
import Hello from '@/components/Hello'
import Index from '@/components/index'
import Quote from '@/components/quote'
import GeneralShow from '@/components/generalShow'
import WeekShow from '@/components/weekShow'
import OuterShow from '@/components/outerShow'
import QuoteSuccess from '@/components/quoteSuccess'
import Contact from '@/components/contact'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      component: Index,
      children:[
        {path:'/',component:GeneralShow},
        {path:'/generalshow',component:GeneralShow},
        {path:'/weekshow/:data',component:WeekShow},
        {path:'/outershow/:oid',component:OuterShow},
        {path:'/contact',component:Contact}
      ]
    },
    {
      path:'/quote',
      component:Quote
    },
    {
      path:'/quotesuccess',
      component:QuoteSuccess
    }
  ]
})
