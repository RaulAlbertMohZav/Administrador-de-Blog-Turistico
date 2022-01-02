<template>
  <v-row justify="center" v-if="ObjectAmbience">
    <v-dialog v-model="showDialog" persistent max-width="600px">
      <v-card>
        <v-card-title>
          <span class="text-h5">Edit Hour Item: {{ ObjectAmbience.id }}</span>
        </v-card-title>
        <v-card-text>
          <v-container>
            <v-form
              :action="`/admin/viva-andaz/edit/fb/restaurants/ambiences/${ObjectAmbience.id}`"
              method="POST"
              id="formSubmitConfigAmbience"
              enctype="multipart/form-data"
            >
              <slot name="csrf-token"></slot>
              <v-row>
                <v-col cols="12">
                  <v-text-field
                    name="text"
                    label="Text Item Ambience"
                    v-model="text"
                    required
                  ></v-text-field>
                </v-col>
                <v-col cols="12" v-show="false">
                  <v-text-field
                    name="restaurant_id"
                    :value="idRestaurant"
                  ></v-text-field>
                </v-col>
              </v-row>
            </v-form>
          </v-container>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue darken-1" text @click="closeDialogAmbience">
            Close
          </v-btn>
          <v-btn color="blue darken-1" text @click="saveConfigHourAmbience">
            Save
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-row>
</template>

<script>
export default {
  props: ["showDialog", "ObjectAmbience", "idRestaurant"],
  data() {
    return {
      text: "",
    };
  },
  methods: {
    closeDialogAmbience() {
      this.$emit("closeDialogAmbience");
    },
    saveConfigHourAmbience() {
      document.getElementById("formSubmitConfigAmbience").submit();
    },
  },
  watch: {
    ObjectAmbience(value) {
      this.text = this.ObjectAmbience.text;
    },
  },
  created() {
    if (this.ObjectAmbience) {
      this.text = this.ObjectAmbience.text;
    }
  },
};
</script>