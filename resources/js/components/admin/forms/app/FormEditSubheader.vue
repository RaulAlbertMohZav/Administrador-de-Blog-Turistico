<template>
  <div>
    <v-form :action="urlForm" method="POST">
      <slot name="csrf-token"></slot>
      <p class="headline">Edit Subheader : "{{ itemName }}"</p>
      <v-container>
        <v-row>
          <!-- ----------------- -->
          <v-col cols="12">
            <v-text-field
              v-model="title"
              name="title"
              :counter="40"
              label="Title"
            ></v-text-field>
          </v-col>
          <!-- ----------------- -->
          <v-col cols="12">
            <v-text-field
              v-show="false"
              v-model="description"
              name="description"
              :counter="100"
              label="Description"
            ></v-text-field>
            <p>Description</p>
            <ckeditor v-model="description" tag-name="textarea"></ckeditor>
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
  props: ["urlForm", "itemName", "itemDescription"],
  data() {
    return {
      title: "",
      description: "",
    };
  },
  watch: {},
  created() {
    this.title = this.itemName;
    this.description = this.itemDescription;
  },
};
</script>

<style lang="scss" scoped>
</style>