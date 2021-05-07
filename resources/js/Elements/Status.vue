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
            cancelled: false,
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
            this.approved = false;
            this.pending = false;
            this.cancelled = false;

            switch (e) {
                case 'Approved':
                    this.approved = true;
                    break;
                case 'Pending':
                    this.pending = true;
                    break;
                case 'Cancelled':
                    this.cancelled = true;
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
                cancelled: this.cancelled,
            }
        },
    }
}
</script>
