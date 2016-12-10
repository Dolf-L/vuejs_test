<template>
    <div>
        <h1> @{{ reverced }}</h1>

        <ul class="list-group" >
            <li class="list-group-item" v-for="task in tasks">
                @{{ task.name }}<button @click="deleteTask">X</button>
            </li>

        </ul>
        <input type="text" v-model="newTask">
        <button :class="[isBlue ? 'blue' : 'red']" :title="title" @click="onClick">Add task</button>
    </div>
</template>

<style>
    .blue {
        color: blue;
    }
    .red {
        color: red;
    }
</style>

<script>
    export default{
        el: '.container',
        data: {
            tasks: [
                {name: 'first', deleted: true},
                {name: 'second', deleted: false},
                {name: 'third', deleted: false},
                {name: 'fourth', deleted: false},
                {name: 'fifth', deleted: false},
            ],
            newTask: '',
            title: 'add new',
            isBlue: false,
            message: 'My title'

        },
        methods: {
            onClick() {
                this.addTask();
                this.changeColor();
            },
            addTask() {
                if (this.newTask != "") {
                    this.tasks.push({name: this.newTask, deleted: false});
                    this.newTask = "";
                }
            },

            changeColor() {
                this.isBlue ? this.isBlue = false :this.isBlue = true
            },
            deleteTask() {
                this.tasks.task.deleted = true;
            },
            undoTask() {
                this.tasks.task.deleted = false;
            }
        },
        computed: {
            reverced() {
               return this.message.split('').reverse().join('')
            },
            compteledTasks() {
                return this.tasks.filter(task => task.deleted);
            }
        }
    }
</script>
