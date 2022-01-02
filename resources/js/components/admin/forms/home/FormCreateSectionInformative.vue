<template>
    <div>
        <v-form :action="urlForm" method="POST" enctype="multipart/form-data">
            <slot name="csrf-token"></slot>
            <p class="headline">Create New Section Informative Home</p>
            <v-container>
                <v-row>
                    <v-col cols="12">
                        <v-text-field
                            v-model="title_item"
                            name="title"
                            :counter="40"
                            label="Title"
                        ></v-text-field>
                    </v-col>
                    <!-- ------------------ -->
                    <v-col cols="12">
                        <v-text-field
                            v-model="slogan_item"
                            name="slogan"
                            :counter="250"
                            label="Slogan"
                        ></v-text-field>
                    </v-col>
                    <!-- ------------------ -->
                    <v-col cols="12">
                        <v-text-field
                            v-show="false"
                            v-model="description_item"
                            name="description"
                            :counter="500"
                            label="Description"
                        ></v-text-field>
                        <p>Description</p>
                        <ckeditor v-model="description_item" tag-name="textarea"></ckeditor>
                    </v-col>
                    <!-- ------------------ -->
                    <v-col cols="12">
                        <v-text-field
                            v-model="footer_item"
                            name="footer"
                            :counter="80"
                            label="Footer"
                        ></v-text-field>
                    </v-col>
                    <!-- ------------------ -->

                    <v-col cols="12">
                        <v-file-input
                            v-model="filePDF1"
                            name="guide_english"
                            color="deep-purple accent-4"
                            counter
                            label="File input - Guide English"
                            placeholder="Select your file PDF - GUIDE ENGLISH"
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
                    </v-col>
                    <!-- ---------------------------------- -->
                    <v-col cols="12">
                        <v-expansion-panels focusable>
                            <v-expansion-panel>
                                <v-expansion-panel-header>
                  <span class="font-weight-bold"
                  >PDF English Guide preview</span
                  >
                                </v-expansion-panel-header>
                                <v-expansion-panel-content>
                                    <div class="d-flex justify-center">
                                        <iframe
                                            v-if="url_guide_english_pdf"
                                            :src="url_guide_english_pdf"
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
                    <!-- ---------------------------------- -->
                    <v-col cols="12">
                        <v-file-input
                            v-model="filePDF2"
                            name="guide_spanish"
                            color="deep-purple accent-4"
                            counter
                            label="File input - Guide Spanish"
                            placeholder="Select your File PDF - GUIDE SPANISH"
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
                    </v-col>
                    <!-- ---------------------------------- -->
                    <v-col cols="12">
                        <v-expansion-panels focusable>
                            <v-expansion-panel>
                                <v-expansion-panel-header>
                  <span class="font-weight-bold"
                  >PDF Spanish Guide preview</span
                  >
                                </v-expansion-panel-header>
                                <v-expansion-panel-content>
                                    <div class="d-flex justify-center">
                                        <iframe
                                            v-if="url_guide_spanish_pdf"
                                            :src="url_guide_spanish_pdf"
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
                    <!-- ---------------------------------- -->
                    <v-col cols="12">
                        <v-btn type="submit" class="ma-2" color="success" block>
                            Save Config
                        </v-btn>
                    </v-col>
                </v-row>
            </v-container>
        </v-form>
    </div>
</template>

<script>
export default {
    props: [
        "urlForm",
        "title",
        "slogan",
        "description",
        "footer",
        "btnHrefEnglish",
        "btnHrefSpanish",
    ],
    data() {
        return {
            filePDF1: [],
            filePDF2: [],
            title_item: "",
            slogan_item: "",
            description_item: "",
            footer_item: "",
            url_guide_english_pdf: null,
            url_guide_spanish_pdf: null,
        };
    },
    watch: {
        filePDF1(file) {
            if (file) {
                this.url_guide_english_pdf = URL.createObjectURL(file);
            } else {
                this.url_guide_english_pdf = null;
            }
        },
        filePDF2(file) {
            if (file) {
                this.url_guide_spanish_pdf = URL.createObjectURL(file);
            } else {
                this.url_guide_spanish_pdf = null;
            }
        },
    },
    created() {

    },
};
</script>

<style lang="scss" scoped>
</style>
