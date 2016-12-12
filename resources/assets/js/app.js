
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

Vue.component('tabs', {
    template:
    '<div class="container">' +

        '<ul class="list-group">' +
            '<li v-for="tab in tabs" @click="selectTab(tab)" :class="{ \'active\' : tab.isActive }" class="list-group-item list-group-item-action">' +
                '<a :href="tab.href">{{ tab.title }}</a>' +
            '</li>' +
        '</ul>' +

        '<div class="tab-content>"' +
            '<slot></slot>' +
        '</div>' +
    '</div>',

    data() {
        return {
            tabs: [],

            isActive: false
        };
    },

    created() {
        this.tabs = this.$children;
    },

    methods: {
        selectTab(selectedTab) {
            this.tabs.forEach(tab => {
                tab.isActive = (tab.title == selectedTab.title)
            })
        }
    },

});

Vue.component('tab', {
    props: {
        title: { required: true },

        seleted: { default: false },
    },

    data() {
        return {
            isActive: false
        }
    },

    mounted() {
        this.isActive = this.seleted;
    },

    computed: {
        href() {
            return '#' + this.title.toLocaleLowerCase().replace(/ /g, '-')
        }
    },

    template:
    '<p v-show="isActive">' +
        '<slot></slot>' +
    '</p>',
});


new Vue({
    el: '.container',

    data: {
        showFirst: false,
        showSecond: false,
    },

    methods: {
        showAll() {
            this.showFirst = true;
            this.showSecond = true;
        }
    }
});