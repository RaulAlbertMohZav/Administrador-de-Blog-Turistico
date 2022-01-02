<template>
  <v-row justify="center">
    <v-dialog v-model="showDialog" persistent max-width="600px">
      <v-card>
        <v-card-title>
          <span class="text-h5">Create Hour Item</span>
        </v-card-title>
        <v-card-text>
          <v-container>
            <v-form
              action="/admin/viva-andaz/create/fb/restaurants/hours"
              method="POST"
              id="formSubmitCreateHourItem"
              enctype="multipart/form-data"
            >
              <slot name="csrf-token"></slot>
              <v-row>
                <v-col cols="12">
                  <v-text-field
                    name="text"
                    label="Text Item Hour"
                    :counter="150"
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
          <v-btn color="blue darken-1" text @click="closeDialogCreateHour">
            Close
          </v-btn>
          <v-btn color="blue darken-1" text @click="createHourItem">
            Save
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-row>
</template>

<script>
export default {
  props: ["showDialog", "idRestaurant"],
  data() {
    return {
      text: "",
    };
  },
  methods: {
    closeDialogCreateHour() {
      this.$emit("closeDialogCreateHour");
    },
    createHourItem() {
      document.getElementById("formSubmitCreateHourItem").submit();
    },
  },
};
</script>