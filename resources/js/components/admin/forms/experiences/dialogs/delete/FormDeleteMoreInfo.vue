<template>
  <v-row justify="center">
    <v-dialog v-model="showDialog" persistent max-width="600px">
      <v-card>
        <v-card-title>
          <span class="text-h5">Delete More Info Item?</span>
        </v-card-title>
        <v-card-text>
          <v-container>
            <v-form
              :action="`/admin/viva-andaz/delete/fb/experiences/more-info/${idItemMoreInfo.id}`"
              method="POST"
              id="formSubmitDeleteMoreInfoItem"
              enctype="multipart/form-data"
            >
              <slot name="csrf-token"></slot>
              <v-row>
                <v-col cols="12" class="d-flex justify-center">
                  Once you delete the item, you won't be able to get it back...
                </v-col>
                <v-col cols="12" v-show="false">
                  <v-text-field
                    name="item_more_info_for_delete"
                    :value="idItemMoreInfo"
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
            @click="closeDialogForDeleteMoreInfo"
          >
            Close
          </v-btn>

          <v-btn color="green darken-1" text @click="deleteMoreInfoItem">
            Delete
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-row>
</template>

<script>
export default {
  props: ["showDialog", "idItemMoreInfo"],
  data() {
    return {
      text: "",
    };
  },
  methods: {
    closeDialogForDeleteMoreInfo() {
      this.$emit("closeDialogDeleteMoreInfo");
    },
    deleteMoreInfoItem() {
      document.getElementById("formSubmitDeleteMoreInfoItem").submit();
    },
  },
};
</script>