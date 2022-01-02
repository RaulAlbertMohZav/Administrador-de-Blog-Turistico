<template>
  <div>
    <v-form :action="urlForm" method="POST" enctype="multipart/form-data">
      <slot name="csrf-token"></slot>
      <p class="headline">Edit Item Sidebar: "{{ title }}"</p>
      <v-container>
        <v-row>
          <v-col cols="12">
            <v-text-field
              v-model="title_item"
              name="title"
              :counter="60"
              label="Title"
            ></v-text-field>
          </v-col>
          <!-- ------------------ -->
          <v-col cols="12">
            <v-text-field
              v-model="subtitle_item"
              name="subtitle"
              :counter="80"
              label="Subtitle"
            ></v-text-field>
            <small
              >If you don't want to put a subtitle, leave the field
              empty.</small
            >
          </v-col>
          <!-- ------------------ -->
          <v-col cols="12">
            <v-text-field
              v-show="false"
              v-model="description_item"
              name="description"
              :counter="700"
              label="Description"
            ></v-text-field>
            <p>Description</p>
            <ckeditor v-model="description_item" tag-name="textarea"></ckeditor>
          </v-col>
          <!-- ------------------ -->
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
  props: ["urlForm", "title", "subtitle", "description"],
  data() {
    return {
      title_item: "",
      subtitle_item: "",
      description_item: "",
    };
  },
  watch: {},
  created() {
    this.title_item = this.title;
    this.subtitle_item = this.subtitle;
    this.description_item = this.description;
  },
};
</script>

<style lang="scss" scoped>
</style>