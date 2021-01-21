<template>
  <div
    class="container mx-auto w-96 h-auto text-center pt-16 pb-4 shadow rounded"
  >

    <h3 class="text-4xl tracking-wider">Todo App</h3>
    <form @submit.prevent="addItem" class="flex flex-row justify-center">
      <input placeholder="Enter Item" class="border text-grey-darkest w-56 my-4" v-model="item" />
      <div class="flex flex-row justify-evenly">
        <button type="submit" class="mx-2"><b-icon icon="plus-circle-fill" id="add"></b-icon></button>
      </div>
    </form>

    <div class="w-full flex justify-center" v-if="shareLink.length>0">
      <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3 mb-4 w-5/6" role="alert">
        <p class="font-bold">Shareable Link</p>
        <p class="text-sm">Copy this link: {{ shareLink }}</p>
      </div>
    </div>
          <p v-if="msg.length > 0" style="color: red">{{ msg }}</p>

        <div class="flex flex-row justify-evenly">
          <button class="bg-blue-300 hover:bg-blue-800 text-gray-800 hover:text-white font-bold rounded-l px-4 py-1 m-2" @click="shareList">Share List</button>
          <button class="bg-red-300 hover:bg-red-800 text-gray-800 hover:text-white font-bold rounded-l px-4 py-1 m-2" @click="deleteAll">Clear All</button>
      </div>
 
    <todo-items :items="items" @delete-item-child="deleteItemChild"></todo-items>
  </div>
</template>

<script>
import TodoItems from "./TodoItems.vue";

export default {
  components: { TodoItems },
  name: "TodoForm",
  data() {
    return {
      item: "",
      items: [],
      id: 1,
      msg: "",
      shareLink:"",
      alreadyShared: false,
    };
  },
  methods: {
    addItem() {
      if (this.item.length >= 1 && this.items.length <= 10) {
        this.msg = "";
        this.items.push({ id: this.id, description: this.item });
        this.id += 1;
      } else {
        if (this.items.length > 10) {
          this.msg = "Entered over 10 items.";
        } else if (this.item.length === 0) {
          this.msg = "Did not enter an item";
        }
      }
    },
    deleteAll(){
        if(confirm("You are about to delete all your items. Do you want to proceed?")){
          this.id=1;
          this.items=[];
          this.item="";
          this.msg="";
          this.shareLink="";
          this.alreadyShared=false;
        }
    },
    shareList(){
       if(!this.alreadyShared){
        const that = this;
        axios.post("/share", this.items)
        .then(res => that.shareLink= "https://localhost:3000/submission/"+res.data["submission_id"]);
        this.alreadyShared=true;
       } else {
         this.msg="Already Shared - Refresh page to start a new list"
       }
    },

    deleteItemChild(id){
        this.items = this.items.filter(items => items.id!==id);
    },
  },
  watch: {
    shareLink: function(){
      console.log(this.shareLink);
    }
  }
};
</script>

<style scoped>
  .container{
    border: #0074D9 2px solid;
    background-color: white;
  }
  #add:hover{
    fill: lightgreen;
  }
  #add{
    height: 20px;
    width: 20px;
  }
</style>