<!DOCTYPE html>

<html>
    <head>
        <title>Vue Js Practice</title>
        <style>
            .page-container {
                padding: 1rem 2rem;
            }
            div {
                margin-bottom: 4rem;
            }
            .green-text {
                color: green;
            }
            .is-loading {
                background-color: gold;
                color: white;
                text-shadow: 1px 1px 1px black;
            }
        </style>
    </head>

    <body>
        <div id="root" class="page-container">

            <div>
                <h2>Using v-model to data bind variables to dom</h2>
                <input type="text" name="input" v-model="message">
                <p>The value of the input is: {{message}}</p>
            </div>

            <div>
                <h2>Using v-for to iterate through an array and display as an unordered list</h2>
                <ul>
                    <li v-for="name in names">{{ name }}</li>
                </ul>
                <input type="test" name="addName" v-model="newName">
                <button @click="addName">Add Name</button>
            </div>

            <div>
                <h2>Here is a use of v-bind</h2>
                <p :class="green">Testing out v-bind, setting the class to a variable in Vue instance</p>
                <button :class="{ 'is-loading': isLoading }" @click="toggleClass">Is Loading</button>
            </div>

            <div>
                <h2>Expressions inside v-text</h2>
                <p v-text="new Date()"></p>
            </div>

            <div>
                <h2>Computed Properties</h2>
                <p>{{ reversedMessage }}</p>

                <p>Completed Tasks</p>
                <ul>
                    <li v-for="task in tasks" v-if="task.completed" v-text="task.description"></li>
                </ul>

                <p>Incomplete Tasks</p>
                <ul>
                    <li v-for="task in incompleteTasks" v-text="task.description"></li>
                </ul>
            </div>

            <div>
                <h2>PHP Yo</h2>

                <ul>
                    <li><strong>Task: </strong><?= $task['Title']?></li>
                    <li><strong>Due: </strong><?= $task['due']?></li>
                    <li><strong>Responsible for: </strong><?= $task['assigned_to']?></li>
                    <li><strong>Status: </strong><?= $task['completed'] ? '&#9989' : 'Incomplete' ?></li>
                </ul>

                <?php if ($task['completed']) : ?>

                    <p>Completed</p>

                <? else : ?>

                    <p>Incomplete</p>

                <? endif ?>
                
            </div>


        </div>

        <script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>

        <script>

            new Vue({
                el: "#root",
                data: {
                    message: "Hello World",
                    newName: "",
                    names: ['Joe', 'Mary', 'Jane', 'Jack'],
                    green: 'green-text',
                    isLoading: false,
                    tasks: [
                        { description: 'Take out trash', completed: true },
                        { description: 'Do the dishes', completed: true },
                        { description: 'Fold laundry', completed: false },
                        { description: 'Clear to do list', completed: false },
                        { description: 'Walk dog', completed: true }
                    ]
                },
                computed: {
                    reversedMessage() {
                        return this.message.split('').reverse().join('');
                    },
                    incompleteTasks() {
                        return this.tasks.filter(task => task.completed !== true)
                    }
                },
                methods: {
                    addName() {
                        this.names.push(this.newName);
                        this.newName = "";
                    },
                    toggleClass() {
                        this.isLoading == false ? this.isLoading = true : this.isLoading = false;
                    }
                },
                mounted() {
                    //alert('ready');
                }
            })
        
        </script>
    </body>

</html>