<template>
  <v-row justify="center">
    <v-dialog v-model="showDialog" persistent max-width="600px">
      <v-card>
        <v-card-title>
          <span class="text-h5">Delete Meal Plan Individual Item?</span>
        </v-card-title>
        <v-card-text>
          <v-container>
            <v-form
              :action="`/admin/viva-andaz/delete/fb/experiences/meal-plan-individual/${idItemMealPlanIndividual.id}`"
              method="POST"
              id="formSubmitDeleteMealPlanIndividual"
              enctype="multipart/form-data"
            >
              <slot name="csrf-token"></slot>
              <v-row>
                <v-col cols="12" class="d-flex justify-center">
                  Once you delete the item, you won't be able to get it back...
                </v-col>
                <v-col cols="12" v-show="false">
                  <v-text-field
                    name="item_meal_plan_individual_for_delete"
                    :value="idItemMealPlanIndividual"
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
            @click="closeDialogForDeleteMealPlanIndividual"
          >
            Close
          </v-btn>

          <v-btn
            color="green darken-1"
            text
            @click="deleteMealPlanIndividualItem"
          >
            Delete
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-row>
</template>

<script>
export default {
  props: ["showDialog", "idItemMealPlanIndividual"],
  data() {
    return {
      text: "",
    };
  },
  methods: {
    closeDialogForDeleteMealPlanIndividual() {
      this.$emit("closeDialogDeleteMealPlanIndividual");
    },
    deleteMealPlanIndividualItem() {
      document.getElementById("formSubmitDeleteMealPlanIndividual").submit();
    },
  },
};
</script>