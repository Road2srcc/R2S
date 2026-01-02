
<script>
    export default {
        name: "QuizTypeCard",
        props: {
            quizType: Object
        },
        methods: {
            getGradient(hex) {
                return 'linear-gradient(180deg, '+this.hex2rgba(hex, 0.8)+' 0%, '+this.hex2rgba(hex)+' 100%)';
            },
        },
    }
</script>
