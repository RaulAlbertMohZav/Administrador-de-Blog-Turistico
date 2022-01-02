<template>
  <div>
    <v-form :action="urlForm" method="POST" enctype="multipart/form-data">
      <slot name="csrf-token"></slot>
      <p class="headline">Edit Link: "{{ itemName }}"</p>
      <v-container>
        <v-row>
          <v-col cols="12">
            <v-text-field
              v-model="textLink"
              name="link_text"
              :counter="30"
              label="Link text"
            ></v-text-field>
          </v-col>
          <!-- ------------------ -->
          <v-col cols="12" v-if="existsPdf">
            <v-file-input
              v-model="files"
              name="file_pdf"
              color="deep-purple accent-4"
              counter
              label="File input"
              placeholder="Select your file PDF"
              prepend-icon="mdi-paperclip"
              outlined
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
              >If you do not select a PDF, the PDF that is already linked will
              not be modified.</small
            >
          </v-col>
          <!-- ---------------------------------- -->
          <v-col cols="12" v-if="existsPdf">
            <v-expansion-panels focusable>
              <v-expansion-panel>
                <v-expansion-panel-header>
                  <span class="font-weight-bold">PDF preview</span>
                </v-expansion-panel-header>
                <v-expansion-panel-content>
                  <iframe
                    v-if="urlPreviewPdf"
                    :src="urlPreviewPdf"
                    frameborder="0"
                    width="100%"
                    height="1000"
                  ></iframe>
                  <p class="text-center font-weight-bold h1" v-else>
                    No valid file selected
                  </p>
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
  props: ["urlForm", "itemName", "existsPdf", "itemHref"],
  data() {
    return {
      files: [],
      urlPreviewPdf: null,
      textLink: "",
    };
  },
  computed: {},
  watch: {
    files(file) {
      if (file) {
        this.urlPreviewPdf = URL.createObjectURL(file);
      } else {
        this.urlPreviewPdf = null;
      }
    },
  },
  created() {
    this.textLink = this.itemName;
    this.urlPreviewPdf = this.itemHref;
  },
};
</script>

<style lang="scss" scoped>
</style>