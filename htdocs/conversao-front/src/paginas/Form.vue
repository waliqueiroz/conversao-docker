<template>
    <div>
        <section class="cadastro-form">
            <form @submit.prevent="cadastrar()">
                <h2>Registre-se</h2>
                <p class="hint-text">
                    Crie sua conta. É de graça e leva apenas um minuto.
                </p>
                <div class="form-group">
                    <input v-model="dados.nome" type="text" class="form-control" name="nome" placeholder="Nome" required="required" />
                    <span v-if="erros.nome" class="text-danger">{{ erros.nome[0] }}</span>
                </div>
                <div class="form-group">
                    <input v-model="dados.email" type="email" class="form-control" name="email" placeholder="Email" required="required" />
                    <span v-if="erros.email" class="text-danger">{{ erros.email[0] }}</span>
                </div>
                <div class="form-group">
                    <input v-model="dados.telefone" type="text" class="form-control" v-mask="['(##)#####-####', '(##)####-####']" name="telefone" placeholder="Telefone" required="required" />
                    <span v-if="erros.telefone" class="text-danger">{{ erros.telefone[0] }}</span>
                </div>
                <div class="form-group">
                    <input v-model="dados.cpf" type="text" v-mask="'###.###.###-##'" class="form-control" name="cpf" placeholder="CPF" required="required" />
                    <span v-if="erros.cpf" class="text-danger">{{ erros.cpf[0] }}</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block">
                        Cadastrar
                    </button>
                </div>
            </form>
            <div class="text-center">Já tem uma conta? <a href="#">Faça login aqui</a></div>
        </section>
    </div>
</template>

<script>
import api from "@/services/api";
import { mask } from "vue-the-mask";

export default {
    name: "Formulario",
    components: {},
    directives: {
        mask
    },
    data() {
        return {
            dados: {
                nome: "",
                email: "",
                telefone: "",
                cpf: "",
                hash: ""
            },
            erros: {
                nome: "",
                email: "",
                telefone: "",
                cpf: ""
            }
        };
    },
    mounted() {
        // Se o cadastro for feito a partir de um link personalizado
        const hash = this.$route.params.hash;
        if (hash) {
            this.dados.hash = hash;
        }
    },
    methods: {
        async cadastrar() {
            try {
                const resposta = await api.post("/api/usuarios/criar", this.dados);
                const usuario = resposta.data;
                this.$router.push(`/link/${usuario.id}`);
            } catch (e) {
                this.erros = e.response.data.errors;
            }
        }
    },
    watch: {}
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
