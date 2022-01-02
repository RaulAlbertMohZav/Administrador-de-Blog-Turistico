<template>
  <div>
    <section class="d-flex justify-space-between align-center my-7">
      <span class="h1 font-weight-bold ml-5">Meals Plan Individual</span>
      <v-btn
        @click="dialogCreateMealPlanIndividual = true"
        color="success"
        class="mr-12"
        large
      >
        <v-icon> mdi-plus </v-icon>
      </v-btn>
    </section>
    <section v-if="dialogEditMealPlanIndividual">
      <form-edit-dialog-meal-plan-individual
        :show-dialog="dialogEditMealPlanIndividual"
        :object-meal-plan-individual="mealPlanIndividualObject"
        :id-experience="idExperience"
        @closeDialogMealPlanIndividual="closeDialogMealPlanIndividualEmit"
      >
        <template v-slot:csrf-token>
          <slot name="csrf-token"></slot>
        </template>
      </form-edit-dialog-meal-plan-individual>
    </section>
    <section v-if="dialogCreateMealPlanIndividual">
      <form-create-meal-plan-individual-item
        :show-dialog="dialogCreateMealPlanIndividual"
        :id-experience="idExperience"
        @closeDialogCreateMealPlanIndividual="
          closedialogCreateMealPlanIndividualEmit
        "
      >
        <template v-slot:csrf-token>
          <slot name="csrf-token"></slot>
        </template>
      </form-create-meal-plan-individual-item>
    </section>
    <section v-if="dialogDeleteMealPlanIndividual">
      <form-delete-meal-plan-individual-item
        :show-dialog="dialogDeleteMealPlanIndividual"
        :id-item-meal-plan-individual="mealPlanIndividualItemForDelete"
        @closeDialogDeleteMealPlanIndividual="
          closedialogDeleteMealPlanIndividualEmit
        "
      >
        <template v-slot:csrf-token> <slot name="csrf-token"></slot> </template>
      </form-delete-meal-plan-individual-item>
    </section>
    <v-col cols="12">
      <v-row
        v-for="(mealPlanIndividual, index) in itemsMealPlanIndividual"
        :key="index"
      >
        <v-col cols="8">
          {{ mealPlanIndividual.text }}
        </v-col>
        <v-col cols="2" class="d-flex justify-center">
          <v-btn
            @click="showFormEditObjectMealPlanIndividual(mealPlanIndividual)"
            color="primary"
            large
          >
            <v-icon> mdi-pencil </v-icon>
          </v-btn>
        </v-col>
        <v-col cols="2" class="d-flex justify-center">
          <v-btn
            @click="showDialogConfirmDeleteItemAmbience(mealPlanIndividual)"
            color="error"
            large
          >
            <v-icon> mdi-delete </v-icon>
          </v-btn>
        </v-col>
      </v-row>
    </v-col>
  </div>
</template>

<script>
import FormEditDialogMealPlanIndividual from "./../dialogs/edit/FormEditMealPlanIndividual.vue";
import FormCreateMealPlanIndividualItem from "./../dialogs/add/FormCreateMealPlanIndividual.vue";
import FormDeleteMealPlanIndividualItem from "./../dialogs/delete/FormDeleteMealPlanIndivual.vue";

export default {
  props: ["itemsMealPlanIndividual", "idExperience"],
  components: {
    FormEditDialogMealPlanIndividual,
    FormCreateMealPlanIndividualItem,
    FormDeleteMealPlanIndividualItem,
  },
  data() {
    return {
      dialogEditMealPlanIndividual: false,
      dialogCreateMealPlanIndividual: false,
      dialogDeleteMealPlanIndividual: false,
      mealPlanIndividualObject: null,
      mealPlanIndividualItemForDelete: null,
    };
  },
  methods: {
    closeDialogMealPlanIndividualEmit() {
      this.dialogEditMealPlanIndividual = false;
    },
    closedialogCreateMealPlanIndividualEmit() {
      this.dialogCreateMealPlanIndividual = false;
    },
    closedialogDeleteMealPlanIndividualEmit() {
      this.dialogDeleteMealPlanIndividual = false;
    },
    showFormEditObjectMealPlanIndividual(objectAmbienceItem) {
      this.mealPlanIndividualObject = objectAmbienceItem;
      this.dialogEditMealPlanIndividual = !this.dialogEditMealPlanIndividual;
    },
    showDialogConfirmDeleteItemAmbience(itemAmbience) {
      this.dialogDeleteMealPlanIndividual = true;
      this.mealPlanIndividualItemForDelete = itemAmbience;
    },
  },
};
</script>

<style lang="scss" scoped>
</style>