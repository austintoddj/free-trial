import axios from 'axios';

export default {
    name: 'VerifyEmail',

    data() {
        return {
            fields: {},
            errors: {},
            success: false,
            isMember: false,
        }
    },

    methods: {
        submit() {
            this.isMember = false;
            this.errors = {};
            this.success = false;

            axios.post('/api/verify', {
                email: this.fields.email
            }).then(response => {
                this.fields = {};
                this.success = true;

                window.location.href='https://pro.creativemarket.com/sign-up';
            }).catch(error => {
                if (error.response.status === 422) {
                    this.isMember = true;
                    this.errors = error.response.data || {};
                }
            });
        },
    },
}
