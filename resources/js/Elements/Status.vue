<template>
  <span :class="statusClasses">
        {{status}}
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
                this.statusValue(this.status);
            },

    props: {
        status: String,
    },

    methods: {
        statusValue: function(e){
            switch (e) {
                case 'Approved':
                    this.approved = true;
                    this.pending = false;
                    break;
                case 'Pending':
                    this.pending = true;
                    this.approved = false;
                    break;
                default:
                return console.log('unknown');
            } 
        }
    },

    watch: {
        status(newval, old) {
            console.log(newval);
            this.statusValue(newval);
        },
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
