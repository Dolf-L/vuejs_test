
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('tasks-list', {
    props: ['title'],

    data() {
        return {
            tasks: [
                {name: 'first', deleted: true},
                {name: 'second', deleted: false},
                {name: 'third', deleted: false},
                {name: 'fourth', deleted: false},
                {name: 'fifth', deleted: false},
            ],
        }
    },

    template:
    '<div>' +
        '<h1>{{ title}}</h1>' +
        '<ul class="list-group" >' +
            '<task class="list-group-item" v-for="task in tasks">{{ task.name }}' +
            '</task>' +
        '</ul>' +
    '</div>',
});

Vue.component('task', {
    data() {
        return {
            isVisible: true,
        }
    },
    template:
    '<li v-show="isVisible">' +
        '<slot></slot>' +
        '<button type="button" @click="hide">X</button>' +
    '</li>',

    methods: {
        hide() {
            this.isVisible = false;
        }
    }
});


new Vue({
    el: '.container',
});