<template>
    <div id="form-conyainer">
        <textarea class="form-control" v-model="selected" placeholder="введите несколько строчек"
                  @keyup="fastValidate"></textarea>
        <input type="button" class="btn btn-light" value="Отправить" v-on:click="alert">
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
            alert() {
                axios.get("/cv/validate", {
                        params: {
                            text: this.selected
                        }
                    }
                ).then(response => {
                    console.log(response.data);
                    this.selected = response.data;
                });
            },
            fastValidate() {
                clearTimeout(this.timeout);
                this.timeout = setTimeout(function () {
                    console.log(this.selected)
                    axios.get("/cv/validate", {
                            params: {
                                text: this.selected
                            }
                        }
                    ).then(response => {
                        console.log(response.data);
                        this.selected = response.data;
                    })
                }.bind(this), 500)
            }
        }

    }
</script>

<style scoped>

</style>
