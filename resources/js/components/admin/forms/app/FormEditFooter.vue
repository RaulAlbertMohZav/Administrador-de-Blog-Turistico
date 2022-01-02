<template>
  <div>
    <v-form :action="urlForm" method="POST">
      <slot name="csrf-token"></slot>
      <p class="headline">Edit Footer</p>
      <v-container>
        <v-row>
          <!-- ----------------- -->
          <v-col cols="12">
            <v-text-field
              v-model="slogan"
              name="slogan"
              :counter="15"
              label="Slogan"
            ></v-text-field>
          </v-col>
          <!-- ----------------- -->
          <v-col cols="12">
            <v-text-field
              v-model="author"
              name="author"
              :counter="35"
              label="Author"
            ></v-text-field>
          </v-col>
          <!-- ----------------- -->
          <v-col cols="12">
            <v-text-field
              v-model="href_facebook"
              name="btn_facebook_href"
              label="Social network Facebook URL"
            ></v-text-field>
            <small class="success--text">Must be URL Type</small>
          </v-col>
          <!-- ----------------- -->
          <v-col cols="12">
            <v-text-field
              v-model="href_instagram"
              name="btn_instragram_href"
              label="Social network Instagram URL"
            ></v-text-field>
            <small class="success--text">Must be URL Type</small>
          </v-col>
          <!-- ----------------- -->
          <v-col cols="12">
            <v-text-field
              v-model="href_pinterest"
              name="btn_pinterest_href"
              label="Social network Pinterest URL"
            ></v-text-field>
            <small class="success--text">Must be URL Type</small>
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
  props: [
    "urlForm",
    "itemSlogan",
    "itemAuthor",
    "hrefFacebook",
    "hrefInstagram",
    "hrefPinterest",
  ],
  data() {
    return {
      slogan: "",
      author: "",
      href_facebook: "",
      href_instagram: "",
      href_pinterest: "",
    };
  },
  watch: {},
  created() {
    this.slogan = this.itemSlogan;
    this.author = this.itemAuthor;
    this.href_facebook = this.hrefFacebook;
    this.href_instagram = this.hrefInstagram;
    this.href_pinterest = this.hrefPinterest;
  },
};
</script>

<style lang="scss" scoped>
</style>