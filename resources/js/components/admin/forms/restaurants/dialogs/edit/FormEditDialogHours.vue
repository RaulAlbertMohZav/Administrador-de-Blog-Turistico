<template>
  <v-row justify="center" v-if="ObjectHour">
    <v-dialog v-model="showDialog" persistent max-width="600px">
      <v-card>
        <v-card-title>
          <span class="text-h5">Edit Hour Item: {{ ObjectHour.id }}</span>
        </v-card-title>
        <v-card-text>
          <v-container>
            <v-form
              :action="`/admin/viva-andaz/edit/fb/restaurants/hours/${ObjectHour.id}`"
              method="POST"
              id="formSubmitConfigHour"
              enctype="multipart/form-data"
            >
              <slot name="csrf-token"></slot>
              <v-row>
                <v-col cols="12">
                  <v-text-field
                    name="text"
                    label="Text Item Hour"
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
          <v-btn color="blue darken-1" text @click="closeDialogHour">
            Close
          </v-btn>
          <v-btn color="blue darken-1" text @click="saveConfigHourItem">
            Save
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-row>
</template>

<script>
export default {
  props: ["showDialog", "ObjectHour", "idRestaurant"],
  data() {
    return {
      text: "",
    };
  },
  methods: {
    closeDialogHour() {
      this.$emit("closeDialogHour");
    },
    saveConfigHourItem() {
      document.getElementById("formSubmitConfigHour").submit();
    },
  },
  watch: {
    ObjectHour(value) {
      this.text = this.ObjectHour.text;
    },
  },
  created() {
    if (this.ObjectHour) {
      this.text = this.ObjectHour.text;
    }
  },
};
</script>