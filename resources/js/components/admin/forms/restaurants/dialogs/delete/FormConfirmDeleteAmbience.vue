<template>
  <v-row justify="center">
    <v-dialog v-model="showDialog" persistent max-width="600px">
      <v-card>
        <v-card-title>
          <span class="text-h5">Delete Ambience Item?</span>
        </v-card-title>
        <v-card-text>
          <v-container>
            <v-form
              :action="`/admin/viva-andaz/delete/fb/restaurants/ambiences/${idItemAmbience.id}`"
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
                    name="item_ambience_for_delete"
                    :value="idItemAmbience"
                  ></v-text-field>
                </v-col>
              </v-row>
            </v-form>
          </v-container>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>

          <v-btn
            color="green darken-1"
            text
            @click="closeDialogForDeleteAmbience"
          >
            Cancel
          </v-btn>

          <v-btn color="green darken-1" text @click="deleteAmbienceItem">
            Delete
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-row>
</template>

<script>
export default {
  props: ["showDialog", "idItemAmbience"],
  data() {
    return {
      text: "",
    };
  },
  methods: {
    closeDialogForDeleteAmbience() {
      this.$emit("closeDialogDeleteAmbience");
    },
    deleteAmbienceItem() {
      document.getElementById("formSubmitDeleteHourItem").submit();
    },
  },
};
</script>