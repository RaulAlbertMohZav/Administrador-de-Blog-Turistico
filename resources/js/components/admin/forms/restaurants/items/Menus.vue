<template>
  <div>
    <section class="d-flex justify-space-between align-center my-7">
      <span class="h1 font-weight-bold ml-5">Menus</span>
      <v-btn
        @click="dialogCreateMenu = true"
        color="success"
        class="mr-12"
        large
      >
        <v-icon> mdi-plus </v-icon>
      </v-btn>
    </section>
    <section v-if="dialogEditMenu">
      <form-edit-dialog-menus
        :show-dialog="dialogEditMenu"
        :object-menu="menuObject"
        :id-restaurant="idRestaurant"
        @closeDialogMenu="closeDialogMenuEmit"
      >
        <template v-slot:csrf-token>
          <slot name="csrf-token"></slot>
        </template>
      </form-edit-dialog-menus>
    </section>
    <section v-if="dialogCreateMenu">
      <form-create-menu-item
        :show-dialog="dialogCreateMenu"
        :id-restaurant="idRestaurant"
        @closedialogCreateMenu="closedialogCreateMenuEmit"
      >
        <template v-slot:csrf-token> <slot name="csrf-token"></slot> </template>
      </form-create-menu-item>
    </section>
    <section v-if="dialogDeleteMenu">
      <form-delete-menu-item
        :show-dialog="dialogDeleteMenu"
        :id-item-menu="menuItemForDelete"
        @closedialogDeleteMenu="closedialogDeleteMenuEmit"
      >
        <template v-slot:csrf-token> <slot name="csrf-token"></slot> </template>
      </form-delete-menu-item>
    </section>
    <v-col cols="12">
      <v-row v-for="(menu, index) in itemsMenus" :key="index">
        <v-col cols="8">
          {{ menu.text }}
        </v-col>
        <v-col cols="2" class="d-flex justify-center">
          <v-btn @click="showFormEditObjectMenu(menu)" color="primary" large>
            <v-icon> mdi-pencil </v-icon>
          </v-btn>
        </v-col>
        <v-col cols="2" class="d-flex justify-center">
          <v-btn
            @click="showDialogConfirmDeleteItemMenu(menu)"
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
import FormEditDialogMenus from "./../dialogs/edit/FormEditDialogMenus.vue";
import FormCreateMenuItem from "./../dialogs/add/FormCreateMenu.vue";
import FormDeleteMenuItem from "./../dialogs/delete/FormConfirmDeleteMenus.vue";

export default {
  props: ["itemsMenus", "idRestaurant"],
  components: {
    FormEditDialogMenus,
    FormCreateMenuItem,
    FormDeleteMenuItem,
  },
  data() {
    return {
      dialogEditMenu: false,
      dialogCreateMenu: false,
      dialogDeleteMenu: false,
      menuObject: null,
      menuItemForDelete: null,
    };
  },
  methods: {
    closeDialogMenuEmit() {
      this.dialogEditMenu = false;
    },
    closedialogCreateMenuEmit() {
      this.dialogCreateMenu = false;
    },
    closedialogDeleteMenuEmit() {
      this.dialogDeleteMenu = false;
    },
    showFormEditObjectMenu(objectMenuItem) {
      this.menuObject = objectMenuItem;
      this.dialogEditMenu = !this.dialogEditMenu;
    },
    showDialogConfirmDeleteItemMenu(itemMenu) {
      this.dialogDeleteMenu = true;
      this.menuItemForDelete = itemMenu;
    },
  },
};
</script>

<style lang="scss" scoped>
</style>