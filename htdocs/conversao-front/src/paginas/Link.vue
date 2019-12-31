<template>
    <div>
        <section class="cadastro-form">
            <form>
                <h2>Sucesso!</h2>
                <p class="hint-text">
                    Este é seu link de convite exclusivo.
                </p>
                <div class="form-group">
                    <input ref="link" v-model="link" type="text" class="form-control" name="link" placeholder="Link" required="required" />
                </div>
                <div class="form-group">
                    <button @click="copiar()" type="button" class="btn btn-success btn-lg btn-block">
                        Copiar
                    </button>
                </div>
            </form>
        </section>
    </div>
</template>

<script>
import api from "@/services/api";
export default {
    name: "Link",
    data() {
        return {
            link: ""
        };
    },
    mounted() {
        this.getLink();
    },
    methods: {
        copiar(){
            this.$refs.link.select();
            document.execCommand('copy');
        },
        async getLink() {
            try {
                const resposta = await api.post(`/api/usuarios/getById/${this.$route.params.id}`, this.dados);
                const hash = resposta.data.link.hash;
                this.link = `${window.location.hostname}/invite/${hash}`
            } catch (error) {
                console.log(error);
            }
        }
    }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
