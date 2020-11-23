/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);

Vue.component('pagination', require('laravel-vue-pagination'));

import Home from './components/HomeComponent.vue';
import About from './components/AboutComponent.vue';
import Admin from './components/admin.vue';
import realisation from './components/realisation.vue';
import user from './components/user.vue';
import newuser from './components/newuser.vue';
import contact from './components/contact.vue';

import vueSmoothScroll from 'vue2-smooth-scroll'
Vue.use(vueSmoothScroll)


const routes = [
    { path: '/', 
  
    components: {
      default: Home,
      a: Admin
    }
  
  },
    { path: '/user', name:"user",  components: {
      a: user
    } },
    { path: '/user/add',  components: {
      a: newuser
    } },
    { path: '/listcontact',  components: {
      a: contact
    } }    ]

  
  
  const router = new VueRouter({
    
     routes
    });
  
   

  





const app = new Vue({
    el: '#app',
    router:router
});

const dpm = new Vue({
  el: '#dpm',
  router:router
});

var video = document.getElementById('video-container');
var videos = document.getElementById('video-containerclub');

video.src = "front_end/video/ecommerce.mp4";
video.play();


var videos = document.getElementById('video-containerclub');

videos.src = "front_end/video/south.mp4";
videos.play();

var videoss = document.getElementById('video-containersalle');

videoss.src = "front_end/video/salle.mp4";
videoss.play();