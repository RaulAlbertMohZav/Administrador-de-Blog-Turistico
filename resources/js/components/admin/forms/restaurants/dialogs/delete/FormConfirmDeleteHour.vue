<template>
  <v-row justify="center">
    <v-dialog v-model="showDialog" persistent max-width="600px">
      <v-card>
        <v-card-title>
          <span class="text-h5">Delete Hour Item?</span>
        </v-card-title>
        <v-card-text>
          <v-container>
            <v-form
              :action="`/admin/viva-andaz/delete/fb/restaurants/hours/${idItemHour.id}`"
              method="POST"
              id="formSubmitDeleteHourItem"
              enctype="multipart/form-data"
            >
              <slot name="csrf-token"></slot>
              <v-row>
                <v-col cols="12" class="d-flex justify-center">
                  Once you delete the item, you won't be able to get it back...
                </v-col>
                <v-col cols="12" v-show="false">
                  <v-text-field
                    name="item_hour_for_delete"
                    :value="idItemHour"
                  ></v-text-field>
                </v-col>
              </v-row>
            </v-form>
          </v-container>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>

          <v-btn color="green darken-1" text @click="closeDialogForDeleteHour">
            Close
          </v-btn>

          <v-btn color="green darken-1" text @click="deleteHourItem">
            Delete
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-row>
</template>

<script>
export default {
  props: ["showDialog", "idItemHour"],
  data() {
    return {
      text: "",
    };
  },
  methods: {
    closeDialogForDeleteHour() {
      this.$emit("closeDialogDeleteHour");
    },
    deleteHourItem() {
      document.getElementById("formSubmitDeleteHourItem").submit();
    },
  },
};
</script>