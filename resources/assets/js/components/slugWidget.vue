<style scoped>
    .slug-widget {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .wrapper {
        margin-left: 8px;

    }

    .slug {
        background-color: #fdfd96;
        padding: 3px 5px
    }

    .input {
        width: auto;
    }

    .url-wrapper {
        display: flex;
        aligh-items: center;
        height: 28px;
    }

</style>

<template>
    <div class="slug-widget">
        <div class="icon-wrapper wrapper">
            <i class="fa fa-link"></i>
        </div>
        <div class="url-wrapper wrapper">
               <span class="root-url">{{url}}</span><!--
            --><span class="subdirectory-url">{{subdirectory}}</span><!--
            --><span class="slug"v-show="!isEditing">{{slug}}</span><!--
            --><span class="slug-edit" v-show="isEditing"><input type="text" class="input" v-model="slug" name="customSlug"></span>
        </div>
        <div class="button-wrapper wrapper">
            <button class="save-slug-button button is-small" v-show="!isEditing" @click.prevent="editSlug">Edit</button>
            <button class="save-slug-button button is-small" v-show="isEditing" @click.prevent="saveSlug">Save</button>
            <button class="save-slug-button button is-small" v-show="isEditing" @click.prevent="resetEditing">Reset</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            url: {
                type: String,
                required: true 
            },
            subdirectory: {
                type: String,
                required: true
            },
            title: {
                type: String,
                required: true 
            },

        },

        data: function() {
            return {
                slug: this.convertTitle(),
                isEditing: false,
                customSlug: '',
                wasEdited: false
            }
        },


        methods: {
            convertTitle: function(){
                return Slug(this.title)
            },
            editSlug: function(){
                this.customSlug = this.slug;
                this.isEditing = true;
                this.$emit('edit', this.slug);

            },
            saveSlug: function(){
                if (this.customSlug !== this.slug) this.wasEdited = true;
                this.slug = Slug(this.customSlug);
                this.$emit('save', this.slug);
                this.isEditing = false;

            },
            resetEditing: function(){
                this.slug = this.convertTitle();
                this.wasEdited = false;
                this.$emit('reset', this.slug);
                this.isEditing = false;
            }
        },

        watch: {
            title: _.debounce(function() {
                if (this.wasEdited == false) this.slug = this.convertTitle();
                }, 250),
            slug: function(val) {
                this.$emit('slug-changed', this.slug)
            }
            }
        }
</script>
