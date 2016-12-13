var path = require("path");

module.exports = {
    context: path.resolve('resources'),
    entry: [
        './assets/js/app.js'
    ],
    output: {
        path: path.resolve('public/js'),
        filename: "app.js"
    },
    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.common.js'
        }
    },
}
