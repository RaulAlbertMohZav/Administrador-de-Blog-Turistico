<template>
  <v-row justify="center">
    <v-dialog v-model="showDialog" persistent max-width="90%">
      <v-card>
        <v-card-title>
          <span class="text-h5">Create Meal Plan Individual Item</span>
        </v-card-title>
        <v-card-text>
          <v-container>
            <v-form
              action="/admin/viva-andaz/create/fb/experiences/meal-plan-individual"
              method="POST"
              id="formSubmitCreateMealPlanIndividualItem"
              enctype="multipart/form-data"
            >
              <slot name="csrf-token"></slot>
              <v-row>
                <v-col cols="12">
                  <v-text-field
                    name="text"
                    label="Text Item More Info"
                    :counter="150"
                    v-model="text"
                    required
                  ></v-text-field>
                </v-col>
                <v-col cols="12" v-show="false">
                  <v-text-field
                    name="experience_id"
                    :value="idExperience"
                  ></v-text-field>
                </v-col>
                <!-- ---------------------------- -->
                <v-col cols="12">
                  <v-file-input
                    v-model="filePDF"
                    name="file_pdf"
                    color="deep-purple accent-4"
                    counter
                    label="File input - PDF"
                    placeholder="Select your file PDF"
                    prepend-icon="mdi-paperclip"
                    outlined
                    show-size
                  >
                    <template v-slot:selection="{ index, text }">
                      <v-chip
                        v-if="index < 2"
                        color="deep-purple accent-4"
                        dark
                        label
                        small
                      >
                        {{ text }}
                      </v-chip>

                      <span
                        v-else-if="index === 2"
                        class="text-overline grey--text text--darken-3 mx-2"
                      >
                        +{{ files.length - 2 }} File(s)
                      </span>
                    </template>
                  </v-file-input>
                  <small
                    >If you do not select a File PDF, the PDF that is already
                    linked will not be modified.</small
                  >
                </v-col>
                <!-- ---------------------------------- -->
                <v-col cols="12">
                  <v-expansion-panels focusable>
                    <v-expansion-panel>
                      <v-expansion-panel-header>
                        <span class="font-weight-bold">PDF Preview</span>
                      </v-expansion-panel-header>
                      <v-expansion-panel-content>
                        <div class="d-flex justify-center">
                          <iframe
                            v-if="urlPreviewPDF"
                            :src="urlPreviewPDF"
                            frameborder="0"
                            width="100%"
                            height="1000"
                          ></iframe>
                          <p class="text-center font-weight-bold h1" v-else>
                            No valid file selected
                          </p>
                        </div>
                      </v-expansion-panel-content>
                    </v-expansion-panel>
                  </v-expansion-panels>
                </v-col>
              </v-row>
            </v-form>
          </v-container>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn
            color="blue darken-1"
            text
            @click="closeDialogCreateMealPlanIndividual"
          >
            Close
          </v-btn>
          <v-btn
            color="blue darken-1"
            text
            @click="createMealPlanIndividualItem"
          >
            Save
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-row>
</template>

<script>
export default {
  props: ["showDialog", "idExperience"],
  data() {
    return {
      text: "",
      filePDF: [],
      urlPreviewPDF: null,
    };
  },
  methods: {
    closeDialogCreateMealPlanIndividual() {
      this.$emit("closeDialogCreateMealPlanIndividual");
    },
    createMealPlanIndividualItem() {
      document
        .getElementById("formSubmitCreateMealPlanIndividualItem")
        .submit();
    },
  },
  watch: {
    filePDF(file) {
      if (file) {
        this.urlPreviewPDF = URL.createObjectURL(file);
      } else {
        this.urlPreviewPDF = null;
      }
    },
  },
};
</script>