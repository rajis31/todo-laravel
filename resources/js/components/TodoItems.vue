<template>
  <ul v-if="items.length > 0" class="mt-4 border-t border-gray-300">
    <li v-for="item in items" :key="item.id"
      class="flex flex-row w-full justify-between align-center py-2 border-gray-300 border-b"
    >
      <p class="ml-4">{{ item.description }}</p> 
      <b-icon icon="x-circle-fill" class="mr-4" v-on:click="deleteItem(item.id)"></b-icon>
    </li>
  </ul>
</template>

<script>
export default {
  name: "TodoItems",
  props: {
    items: Array,
  },
  methods: {
      deleteItem(val){
          this.$emit("delete-item-child",val);
      }
  },
  watch: {
    items: function (newVal, oldVal) {},
  },
};
</script>

<style scoped>
    svg:hover{
        fill:red;
    }
    svg{
      margin-top: 2px;
    }
</style>