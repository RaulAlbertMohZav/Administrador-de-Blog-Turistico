<template>
  <div>
    <v-form :action="urlForm" method="POST">
      <slot name="csrf-token"></slot>
      <p class="headline">Edit Header : "{{ itemName }}"</p>
      <v-container>
        <v-row>
          <v-col cols="12">
            <v-text-field
              v-model="title"
              name="title"
              :counter="20"
              label="Link text"
            ></v-text-field>
          </v-col>
          <!-- ----------------- -->
          <v-col cols="12">
            <v-btn type="submit" class="ma-2" color="success" block>
              Save Config
            </v-btn>
          </v-col>
        </v-row>
      </v-container>
    </v-form>
  </div>
</template>

<script>
export default {
  props: ["urlForm", "itemName"],
  data() {
    return {
      title: "",
    };
  },
  watch: {},
  created() {
    this.title = this.itemName;
  },
};
</script>