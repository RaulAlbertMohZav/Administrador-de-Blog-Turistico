<template>
  <div>
    <v-form :action="urlForm" method="POST" enctype="multipart/form-data">
      <slot name="csrf-token"></slot>
      <p class="headline">Edit Day Trip: "{{ title }}"</p>
      <v-container>
        <v-row>
          <v-col cols="12">
            <v-text-field
              v-model="title_item"
              name="title"
              :counter="40"
              label="Title"
            ></v-text-field>
          </v-col>
          <!-- ------------------ -->
          <v-col cols="12">
            <v-file-input
              v-model="fileImage"
              name="image"
              color="deep-purple accent-4"
              counter
              label="File input - Image"
              placeholder="Select your file Image"
              prepend-icon="mdi-paperclip"
              outlined
              show-size
            >
              <template v-slot:selection="{ index, text }">
                <v-chip
                  v-if="index < 2"
                  color="deep-purple accent-4"
                  dark
                  label
                  small
                >
                  {{ text }}
                </v-chip>

                <span
                  v-else-if="index === 2"
                  class="text-overline grey--text text--darken-3 mx-2"
                >
                  +{{ files.length - 2 }} File(s)
                </span>
              </template>
            </v-file-input>
            <small
              >If you do not select a File Image, the Image that is already
              linked will not be modified.</small
            >
          </v-col>
          <!-- ---------------------------------- -->
          <v-col cols="12">
            <v-expansion-panels focusable>
              <v-expansion-panel>
                <v-expansion-panel-header>
                  <span class="font-weight-bold">Image Preview</span>
                </v-expansion-panel-header>
                <v-expansion-panel-content>
                  <div class="d-flex justify-center">
                    <v-img
                      v-if="urlPreviewImage"
                      :src="urlPreviewImage"
                      max-height="300"
                      max-width="300"
                    ></v-img>
                    <p class="text-center font-weight-bold h1" v-else>
                      No valid file selected
                    </p>
                  </div>
                </v-expansion-panel-content>
              </v-expansion-panel>
            </v-expansion-panels>
          </v-col>
          <!-- ---------------------------------- -->
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
  props: ["urlForm", "title", "urlImageDb"],
  data() {
    return {
      fileImage: [],
      urlPreviewImage: null,
      title_item: "",
    };
  },
  watch: {
    fileImage(file) {
      if (file) {
        this.urlPreviewImage = URL.createObjectURL(file);
      } else {
        this.urlPreviewImage = null;
      }
    },
  },
  created() {
    this.title_item = this.title;
    this.urlPreviewImage = this.urlImageDb;
  },
};
</script>

<style lang="scss" scoped>
</style>