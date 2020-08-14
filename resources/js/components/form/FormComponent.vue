<template>
    <div id="general-form">
        <textarea class="form-control" v-model="selected" placeholder="введите несколько строчек"
                  @keyup="fastValidate"></textarea>
        <input type="button" class="btn btn-light" value="Отправить" v-on:click="">
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "FormComponent",
        data: function () {
            return {
                selected: '',
                timeout: null
            }
        },
        methods: {
            fastValidate() {
                clearTimeout(this.timeout);
                this.timeout = setTimeout(function () {
                    axios.get("/cv/validate", {
                            params: {
                                text: this.selected
                            }
                        }
                    ).then(response => {
                        this.selected = response.data;
                    })
                }.bind(this), 500)
            }
        }

    }
</script>

<style scoped>

</style>
