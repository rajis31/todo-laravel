<template>
  <ul v-if="items.length > 0">
    <li v-for="item in items" :key="item.id"
      class="flex flex-row w-full justify-around"
    >
      {{ item.description }} <b-icon icon="x-circle-fill" v-on:click="deleteItem(item.id)"></b-icon>
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
</style>