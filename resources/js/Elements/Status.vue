<template>
  <span :class="statusClasses">
        {{data}}
    </span>
</template>

<script>
export default {
    data () {
        return {
            approved: false,
            pending: false,
        }
    },

    mounted (){
        switch (this.data) {
            case 'Approved':
                this.approved = true;
                break;
            case 'Pending':
                this.pending = true;
                break;
            default:
                return console.log('unknown');
        }
            },

    props: {
        data: String,
    },

    methods: {
        
    },

    computed: {
        statusClasses: function() {
            return {
                approved: this.approved,
                pending: this.pending,
            }
        },
    }
}
</script>
