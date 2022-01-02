<template>
  <div>
    <section class="d-flex justify-space-between align-center my-7">
      <span class="h1 font-weight-bold ml-5">Hours</span>
      <v-btn
        @click="dialogCreateHour = true"
        color="success"
        class="mr-12"
        large
      >
        <v-icon> mdi-plus </v-icon>
      </v-btn>
    </section>
    <section v-if="dialogEditHour">
      <form-edit-dialog-hours
        :show-dialog="dialogEditHour"
        :object-hour="hourObject"
        :id-restaurant="idRestaurant"
        @closeDialogHour="closeDialogHourEmit"
      >
        <template v-slot:csrf-token>
          <slot name="csrf-token"></slot>
        </template>
      </form-edit-dialog-hours>
    </section>
    <section v-if="dialogCreateHour">
      <form-create-hour-item
        :show-dialog="dialogCreateHour"
        :id-restaurant="idRestaurant"
        @closeDialogCreateHour="closeDialogCreateHourEmit"
      >
        <template v-slot:csrf-token> <slot name="csrf-token"></slot> </template>
      </form-create-hour-item>
    </section>
    <section v-if="dialogDeleteHour">
      <form-delete-hour-item
        :show-dialog="dialogDeleteHour"
        :id-item-hour="hourItemForDelete"
        @closeDialogDeleteHour="closeDialogDeleteHourEmit"
      >
        <template v-slot:csrf-token> <slot name="csrf-token"></slot> </template>
      </form-delete-hour-item>
    </section>
    <v-col cols="12">
      <v-row v-for="(hour, index) in itemsHours" :key="index">
        <v-col cols="8">
          {{ hour.text }}
        </v-col>
        <v-col cols="2" class="d-flex justify-center">
          <v-btn @click="showFormEditObjectHour(hour)" color="primary" large>
            <v-icon> mdi-pencil </v-icon>
          </v-btn>
        </v-col>
        <v-col cols="2" class="d-flex justify-center">
          <v-btn
            @click="showDialogConfirmDeleteItemHour(hour)"
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
import FormEditDialogHours from "./../dialogs/edit/FormEditDialogHours.vue";
import FormCreateHourItem from "./../dialogs/add/FormCreateHour.vue";
import FormDeleteHourItem from "./../dialogs/delete/FormConfirmDeleteHour.vue";

export default {
  props: ["itemsHours", "idRestaurant"],
  components: {
    FormEditDialogHours,
    FormCreateHourItem,
    FormDeleteHourItem,
  },
  data() {
    return {
      dialogEditHour: false,
      dialogCreateHour: false,
      dialogDeleteHour: false,
      hourObject: null,
      hourItemForDelete: null,
    };
  },
  methods: {
    closeDialogHourEmit() {
      this.dialogEditHour = false;
    },
    closeDialogCreateHourEmit() {
      this.dialogCreateHour = false;
    },
    closeDialogDeleteHourEmit() {
      this.dialogDeleteHour = false;
    },
    showFormEditObjectHour(objectHourItem) {
      this.hourObject = objectHourItem;
      this.dialogEditHour = !this.dialogEditHour;
    },
    showDialogConfirmDeleteItemHour(itemHour) {
      this.dialogDeleteHour = true;
      this.hourItemForDelete = itemHour;
    },
  },
};
</script>

<style lang="scss" scoped>
</style>