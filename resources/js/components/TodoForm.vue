<template>
    <div class="container border-2 border-gray-300 border-opacity-50 mx-auto w-96  h-96 shadow rounded">
        <h3 class="text-4xl tracking-wider"> Todo App </h3>
        <form @submit.prevent="addItem" class="flex flex-col">
            <input placeholder="Enter Item" v-model="item"/>
            <button type="submit"> Add </button>
            <p v-if="msg.length>0" style="color: red;">{{ msg }}</p>
        </form>
        <todo-items :items="items"></todo-items>
    </div>

</template>

<script>
import TodoItems from './TodoItems.vue';

export default {
  components: { TodoItems },
    name: "TodoForm",
    data(){
        return {
            item:"",
            items:[],
            id:1,
            msg: "",
        }
    },
    methods: {
        addItem(){
            if( this.item.length>=1 ){
              this.msg="";
              this.items.push({id: this.id, description: this.item});
              this.id += 1;
           } else {
               this.msg="You did not enter a item";
           }
        }
    }
}
</script>

<style scopesd>

</style>