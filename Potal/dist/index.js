// Vue object

var app = new Vue({
    el: '.app',
    data: {
        message: 'Hello Vue!'
    }
});
app.message = "I have the data"

// Vue display none (v-if)
var app = new Vue({
  el: '#app',
  data: {
    seena: true
  }
})
app.seena = true;

//Vue object <li> (v-for)
var apple = new Vue({
  el: '#apple',
  data: {
    todos: [
      { text: 'Learn JavaScript' },
      { text: 'Learn Vue' },
      { text: 'Build something awesome' }
    ]
  }
});
apple.todos.push({ text: 'New item' })

//Vue onclick
var one_click = new Vue({
  el: '#one_click',
  data: {
    message: 'Hello Vue.js!'
  },
  methods: {
    reverseMessage: function () {
      this.message = this.message.split('').reverse().join('')
    }
  }
})

//Vue model (Mirror)
var model = new Vue({
  el: '#model',
  data: {
    message: 'Hello Vue!'
  }
})

//Vue component(like tree!!)
Vue.component('todo-item', {
  template: '<li>This is a todo</li>'
})

var component = new Vue({
  el: '#component'
})

//Vue todo-item good example
Vue.component('todo-item', {
    props: ['todo'],
    template: '<li>{{ todo.text }}</li>'
})

var todo = new Vue({
    el: '#todo',
    data: {
      groceryList: [
        { id: 0, text: 'Vegetables' },
        { id: 1, text: 'Cheese' },
        { id: 2, text: 'Whatever else humans are supposed to eat' }
      ]
    }
})
