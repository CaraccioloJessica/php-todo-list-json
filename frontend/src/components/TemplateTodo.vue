<script>
export default {
  data() {
  }
}
</script>

<template>
  <div class="container">
    <h1>Todo List</h1>
    <ul>
      <li>test test test test</li>
      <li>test test test</li>
      <li>test test test test test</li>
      <li>test test test</li>
      <li>test test</li>
    </ul>

    <form @submit="formSubmit">
      <input type="text" name="newTodo" v-model="newTodo">
      <input type="submit" value="Inserisci">
    </form>
  </div>
</template>

<style scoped>
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

form {
  margin-top: 20px;
}
</style>
