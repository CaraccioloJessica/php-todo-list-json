<script>
import axios from 'axios';

const API_URL = "http://localhost/";

export default {
  data() {
    return {
      newTodo: "",
      todoList: [],
    };
  },

  methods: {
    formSubmit(e) {
      e.preventDefault();

      const params = {
        params: {
          'newTodo': this.newTodo
        }
      };

      axios.get(API_URL + "api-create-todo.php", params)
        .then(() => {
          this.getAllData();
        });
    },
    getAllData() {
      axios.get(API_URL + "api.php")
        .then(res => {
          const data = res.data;
          this.todoList = data;
        });
    }
  },
  mounted() {
    this.getAllData();
  }
}
</script>

<template>
  <div class="container">
    <h1>Todo List</h1>
    <ul>
      <li v-for="(todoElem, ind) in todoList" :key="ind" :class="{ 'completed': todoElem.completed }">
        <a href="#"> {{ todoElem.text }} </a>
      </li>
    </ul>

    <form @submit="formSubmit">
      <input type="text" name="newTodo" v-model="newTodo">
      <input type="submit" value="Inserisci">
    </form>
  </div>
</template>

<style>
h1 {
  margin: 20px 0 30px;
}

ul {
  list-style-type: none;
  padding: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
}

li {
  display: inline-block;
  margin: 6px 0;
}

a {
  text-decoration: none;
  color: black;
}

form {
  margin-top: 20px;
}

.completed {
  text-decoration: line-through;
}
</style>
