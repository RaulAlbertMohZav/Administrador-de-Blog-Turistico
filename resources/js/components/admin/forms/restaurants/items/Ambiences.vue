<template>
  <div>
    <section class="d-flex justify-space-between align-center my-7">
      <span class="h1 font-weight-bold ml-5">Ambiences</span>
      <v-btn
        @click="dialogCreateAmbience = true"
        color="success"
        class="mr-12"
        large
      >
        <v-icon> mdi-plus </v-icon>
      </v-btn>
    </section>
    <section v-if="dialogEditAmbience">
      <form-edit-dialog-ambiences
        :show-dialog="dialogEditAmbience"
        :object-ambience="ambienceObject"
        :id-restaurant="idRestaurant"
        @closeDialogAmbience="closeDialogAmbience"
      >
        <template v-slot:csrf-token>
          <slot name="csrf-token"></slot>
        </template>
      </form-edit-dialog-ambiences>
    </section>
    <section v-if="dialogCreateAmbience">
      <form-create-ambience-item
        :show-dialog="dialogCreateAmbience"
        :id-restaurant="idRestaurant"
        @closeDialogCreateAmbience="closedialogCreateAmbienceEmit"
      >
        <template v-slot:csrf-token> <slot name="csrf-token"></slot> </template>
      </form-create-ambience-item>
    </section>
    <section v-if="dialogDeleteAmbience">
      <form-delete-ambience-item
        :show-dialog="dialogDeleteAmbience"
        :id-item-ambience="ambienceItemForDelete"
        @closeDialogDeleteAmbience="closedialogDeleteAmbienceEmit"
      >
        <template v-slot:csrf-token> <slot name="csrf-token"></slot> </template>
      </form-delete-ambience-item>
    </section>
    <v-col cols="12">
      <v-row v-for="(ambience, index) in itemsAmbiences" :key="index">
        <v-col cols="8">
          {{ ambience.text }}
        </v-col>
        <v-col cols="2" class="d-flex justify-center">
          <v-btn
            @click="showFormEditObjectAmbience(ambience)"
            color="primary"
            large
          >
            <v-icon> mdi-pencil </v-icon>
          </v-btn>
        </v-col>
        <v-col cols="2" class="d-flex justify-center">
          <v-btn
            @click="showDialogConfirmDeleteItemAmbience(ambience)"
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
import FormEditDialogAmbiences from "./../dialogs/edit/FormEditDialogAmbiences.vue";
import FormCreateAmbienceItem from "./../dialogs/add/FormCreateAmbience.vue";
import FormDeleteAmbienceItem from "./../dialogs/delete/FormConfirmDeleteAmbience.vue";

export default {
  props: ["itemsAmbiences", "idRestaurant"],
  components: {
    FormEditDialogAmbiences,
    FormCreateAmbienceItem,
    FormDeleteAmbienceItem,
  },
  data() {
    return {
      dialogEditAmbience: false,
      dialogCreateAmbience: false,
      dialogDeleteAmbience: false,
      ambienceObject: null,
      ambienceItemForDelete: null,
    };
  },
  methods: {
    closeDialogAmbience() {
      this.dialogEditAmbience = false;
    },
    closedialogCreateAmbienceEmit() {
      this.dialogCreateAmbience = false;
    },
    closedialogDeleteAmbienceEmit() {
      this.dialogDeleteAmbience = false;
    },
    showFormEditObjectAmbience(objectAmbienceItem) {
      this.ambienceObject = objectAmbienceItem;
      this.dialogEditAmbience = !this.dialogEditAmbience;
    },
    showDialogConfirmDeleteItemAmbience(itemAmbience) {
      this.dialogDeleteAmbience = true;
      this.ambienceItemForDelete = itemAmbience;
    },
  },
};
</script>

<style lang="scss" scoped>
</style>