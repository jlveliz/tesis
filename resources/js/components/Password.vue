<template>
  <div>
    <input :type="inputField" :id="id" v-model="model" :name="id" class="form-control form-input form-input-bordered w-full" required />
    <button v-if="model" type="button" @click="switchVisibilityPassword"><span v-if="inputField == 'password'">Ver clave</span>  <span v-if="inputField == 'text'">Ocultar clave</span></button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      inputField: "password",
      model:""
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
  }
};
</script>

<style scoped>

  button{
    position: relative;
    bottom: 26px;
    color: #4099de;
    font-weight: bold;
    font-family: inherit;
    float: right;
    margin-right: 6px;
    font-size: 15px;
  }
</style>