<template>
  <div>
    <section class="d-flex justify-space-between align-center my-7">
      <span class="h1 font-weight-bold ml-5">More Info</span>
      <v-btn
        @click="dialogCreateMoreInfo = true"
        color="success"
        class="mr-12"
        large
      >
        <v-icon> mdi-plus </v-icon>
      </v-btn>
    </section>
    <section v-if="dialogEditMoreInfo">
      <form-edit-dialog-more-info
        :show-dialog="dialogEditMoreInfo"
        :object-more-info="moreInfoObject"
        :id-experience="idExperience"
        @closeDialogMoreInfo="closeDialogMoreInfoEmit"
      >
        <template v-slot:csrf-token>
          <slot name="csrf-token"></slot>
        </template>
      </form-edit-dialog-more-info>
    </section>
    <section v-if="dialogCreateMoreInfo">
      <form-create-more-info-item
        :show-dialog="dialogCreateMoreInfo"
        :id-experience="idExperience"
        @closeDialogCreateMoreInfo="closedialogCreateMoreInfoEmit"
      >
        <template v-slot:csrf-token> <slot name="csrf-token"></slot> </template>
      </form-create-more-info-item>
    </section>
    <section v-if="dialogDeleteMoreInfo">
      <form-delete-more-info-item
        :show-dialog="dialogDeleteMoreInfo"
        :id-item-more-info="moreInfoItemForDelete"
        @closeDialogDeleteMoreInfo="closedialogDeleteMoreInfoEmit"
      >
        <template v-slot:csrf-token> <slot name="csrf-token"></slot> </template>
      </form-delete-more-info-item>
    </section>
    <v-col cols="12">
      <v-row v-for="(moreInfo, index) in itemsMoreInfo" :key="index">
        <v-col cols="8">
          {{ moreInfo.text }}
        </v-col>
        <v-col cols="2" class="d-flex justify-center">
          <v-btn
            @click="showFormEditObjectMoreInfo(moreInfo)"
            color="primary"
            large
          >
            <v-icon> mdi-pencil </v-icon>
          </v-btn>
        </v-col>
        <v-col cols="2" class="d-flex justify-center">
          <v-btn
            @click="showDialogConfirmDeleteItemMoreInfo(moreInfo)"
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
import FormEditDialogMoreInfo from "./../dialogs/edit/FormEditMoreInfo.vue";
import FormCreateMoreInfoItem from "./../dialogs/add/FormCreateMoreInfo.vue";
import FormDeleteMoreInfoItem from "./../dialogs/delete/FormDeleteMoreInfo.vue";

export default {
  props: ["itemsMoreInfo", "idExperience"],
  components: {
    FormEditDialogMoreInfo,
    FormCreateMoreInfoItem,
    FormDeleteMoreInfoItem,
  },
  data() {
    return {
      dialogEditMoreInfo: false,
      dialogCreateMoreInfo: false,
      dialogDeleteMoreInfo: false,
      moreInfoObject: null,
      moreInfoItemForDelete: null,
    };
  },
  methods: {
    closeDialogMoreInfoEmit() {
      this.dialogEditMoreInfo = false;
    },
    closedialogCreateMoreInfoEmit() {
      this.dialogCreateMoreInfo = false;
    },
    closedialogDeleteMoreInfoEmit() {
      this.dialogDeleteMoreInfo = false;
    },
    showFormEditObjectMoreInfo(objectMoreInfoItem) {
      this.moreInfoObject = objectMoreInfoItem;
      this.dialogEditMoreInfo = !this.dialogEditMoreInfo;
    },
    showDialogConfirmDeleteItemMoreInfo(itemMoreInfo) {
      this.dialogDeleteMoreInfo = true;
      this.moreInfoItemForDelete = itemMoreInfo;
    },
  },
};
</script>

<style lang="scss" scoped>
</style>