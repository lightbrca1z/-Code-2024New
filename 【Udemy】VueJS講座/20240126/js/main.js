const app = Vue.createApp({
    data: () => ({
        // message: 'Hello Vue.js!',
        todos:[],
        newItem:''
    }),
    methods:{
        addItem: function(event){
            console.log('Clicked!')
            if(this.newItem === ''){
                return
            }
            let todo = {
                item: this.newItem,
                isDone: false
            }
            this.todos.push(todo)
            this.newItem = '';
        },
        deleteItem: function(index){
            console.log('Delete!');
            console.log(index);
            this.todos.splice(index,1);
        }
    }
})
app.mount('#app')