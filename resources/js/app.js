require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
});

$('#all_ids').click(function(){
    if($(this).is(":checked")) {
        $('#column_id').prop('checked',true);
    } else {
        $('#column_id').prop('checked',false);
    }
});
