<template>
    <div class="modal is-active">
        <div class="modal-background" @click="close()"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">{{header}}</p>
                <button class="delete" aria-label="close" @click="close()"></button>
            </header>
            <section class="modal-card-body">
                <slot></slot>
            </section>
            <footer class="modal-card-foot">
                <slot name="footer"></slot>
                <button class="button" @click="close()">Cancel</button>
            </footer>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            'header': {
                type: String,
                default: ''
            },
        },
        methods: {
            close: function() {
                this.$emit('close');
            },
        }
    }
</script>
