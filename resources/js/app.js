import Vuetify from 'vuetify'
import CKEditor from 'ckeditor4-vue';

require('./bootstrap');
window.Vue = require('vue');
Vue.use(Vuetify);
Vue.use(CKEditor);

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('vue-form-edit-nav', require('./components/admin/forms/app/FormEditNav.vue').default);
Vue.component('vue-form-edit-header', require('./components/admin/forms/app/FormEditHeader.vue').default);
Vue.component('vue-form-edit-subheader', require('./components/admin/forms/app/FormEditSubheader.vue').default);
Vue.component('vue-form-edit-footer', require('./components/admin/forms/app/FormEditFooter.vue').default);

Vue.component('vue-form-create-home-carousel-items', require('./components/admin/forms/home/FormCreateCarousel.vue').default);
Vue.component('vue-form-edit-home-carousel-items', require('./components/admin/forms/home/FormEditCarousel.vue').default);
Vue.component('vue-form-create-home-section-informative', require('./components/admin/forms/home/FormCreateSectionInformative.vue').default);
Vue.component('vue-form-edit-home-section-informative', require('./components/admin/forms/home/FormEditSectionInformative.vue').default);

Vue.component('vue-form-edit-activities-header-content', require('./components/admin/forms/activities/FormEditHeaderContent.vue').default);
Vue.component('vue-form-create-activities-section-content', require('./components/admin/forms/activities/FormCreateSectionContent.vue').default);
Vue.component('vue-form-edit-activities-section-content', require('./components/admin/forms/activities/FormEditSectionContent.vue').default);

Vue.component('vue-form-create-activities-item-sidebar', require('./components/admin/forms/activities/FormCreateItemsSidebar.vue').default);
Vue.component('vue-form-edit-activities-item-sidebar', require('./components/admin/forms/activities/FormEditItemsSidebar.vue').default);

Vue.component('vue-form-create-activities-day-trips', require('./components/admin/forms/activities/FormCreateDayTrips.vue').default);
Vue.component('vue-form-edit-activities-day-trips', require('./components/admin/forms/activities/FormEditDayTrips.vue').default);

Vue.component('vue-form-create-events', require('./components/admin/forms/events/FormCreateEvent.vue').default);
Vue.component('vue-form-edit-events', require('./components/admin/forms/events/FormEditEvent.vue').default);

Vue.component('vue-form-create-news', require('./components/admin/forms/news/FormCreateNotice.vue').default);
Vue.component('vue-form-edit-news', require('./components/admin/forms/news/FormEditNotice.vue').default);

Vue.component('vue-form-create-restaurants', require('./components/admin/forms/restaurants/FormCreateRestaurants.vue').default);
Vue.component('vue-form-edit-restaurants', require('./components/admin/forms/restaurants/FormEditRestaurants.vue').default);
Vue.component('vue-form-create-experiences', require('./components/admin/forms/experiences/FormCreateExperiences.vue').default);
Vue.component('vue-form-edit-experiences', require('./components/admin/forms/experiences/FormEditExperiences.vue').default);

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
});
