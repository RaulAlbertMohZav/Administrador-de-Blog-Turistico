<template>
    <div>
        <v-form :action="urlForm" method="POST" enctype="multipart/form-data">
            <slot name="csrf-token"></slot>
            <p class="headline">Create New Notice:</p>
            <v-container>
                <v-row>
                    <v-col cols="12">
                        <v-text-field
                            v-model="title_item"
                            name="title"
                            :counter="150"
                            label="Title"
                        ></v-text-field>
                    </v-col>
                    <!-- ------------------ -->
                    <v-col cols="12">
                        <v-text-field
                            v-show="false"
                            v-model="description_item"
                            name="description"
                            :counter="800"
                            label="Description"
                        ></v-text-field>
                        <p>Description</p>
                        <ckeditor v-model="description_item" tag-name="textarea"></ckeditor>
                    </v-col>
                    <!-- ------------------ -->
                    <v-col cols="12">
                        <v-file-input
                            v-model="fileVideo"
                            name="file_video"
                            color="deep-purple accent-4"
                            counter
                            label="File input - Video"
                            placeholder="Select your file Video"
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
                                    <span class="font-weight-bold">Video Preview</span>
                                </v-expansion-panel-header>
                                <v-expansion-panel-content>
                                    <div class="d-flex justify-center">
                                        <video
                                            v-if="urlPreviewVideo"
                                            :src="urlPreviewVideo"
                                            controls
                                            width="100%"
                                        ></video>
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
    props: ["urlForm"],
    data() {
        return {
            fileVideo: [],
            urlPreviewVideo: null,
            title_item: "",
            description_item: "",
        };
    },
    watch: {
        fileVideo(file) {
            if (file) {
                this.urlPreviewVideo = URL.createObjectURL(file);
            } else {
                this.urlPreviewVideo = null;
            }
        },
    },
    created() {
    },
};
</script>

<style lang="scss" scoped>
</style>
