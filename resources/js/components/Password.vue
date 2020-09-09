<template>
  <div>
    <input :type="inputField" :id="id" :name="id" class="form-control form-input form-input-bordered w-full" required />
    <button type="button" @click="switchVisibilityPassword">Ver clave</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      inputField: "password",
    };
  },
  props: {
    id: {
      type: String,
      default: "password",
    },
  },
  methods: {
    switchVisibilityPassword() {
      this.inputField = this.inputField == "password" ? "text" : "password";
    },
  },
  mounted() {
    console.log("Hola");
  },
};
</script>

<style>
</style>