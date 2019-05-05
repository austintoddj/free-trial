<template>
    <div v-cloak>
        <div v-if="isMember">
            <div class="container col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card shadow-lg border-0 px-3 py-3">
                            <div class="card-body">
                                <p class="lead text-center">
                                    Unfortunately, the free trial is for <span class="font-weight-bold">new members only</span>. It looks like you already have a Creative Market account.
                                </p>
                                <a href="#" class="btn btn-lg btn-block btn-primary font-weight-bold text-uppercase">
                                    Explore our catalogue
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div v-else>
            <div class="container col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card shadow-lg border-0 px-3 pt-3">
                            <div class="card-header border-0 bg-white text-center pb-0">
                                <p id="cta">
                                    Get <span class="font-weight-bolder">3 free downloads</span> when you<br>start your trial today
                                </p>
                            </div>

                            <div class="card-body py-0">
                                <ul id="features" class="py-2">
                                    <li>Get access to our full pro catalogue</li>
                                    <li>Cancel anytime, risk free</li>
                                    <li>7 days free</li>
                                </ul>

                                <form @submit.prevent="submit">
                                    <div class="form-group row">
                                        <input v-model="fields.email" type="email" required name="email"
                                               class="form-control form-control-lg"
                                               placeholder="Enter your Email Address">
                                    </div>
                                    <div class="form-group row">
                                        <button class="btn btn-lg btn-block btn-primary text-uppercase font-weight-bold" type="submit">
                                            Start your free trial
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div class="card-footer bg-white border-0 text-center pt-0">
                                <p class="small text-muted py-2">
                                    The free trial is for new members only. All assets downloaded during the free trial period are covered by a basic license.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import FormMixin from '../mixins/FormMixin';

    export default {
        name: 'VerifyEmail',

        mixins: [FormMixin],

        data() {
            return {
                'action': '/submit',
            }
        },
    }
</script>

<style scoped lang="scss">
    ul {
        list-style: none;
        padding-left: 0;
    }

    li {
        padding: 5px 0;
        font-size: 13px;
        vertical-align: middle;

    &:before {
         vertical-align: middle;
         content: '';
         display: inline-block;
         height: 1.5em;
         width: 1.5em;
         background-image: url('/../../img/checkmark-lined.svg');
         background-size: contain;
         background-repeat: no-repeat;
         margin-left: 2.5em;
         margin-right: 1em;
     }
    }

    #cta {
        font-size: 20px;
        color: rgb(39,44,47);
    }

    ::placeholder {
        color: rgb(144,144,144);
        font-size: 13px;
    }

    .btn-primary {
        color: white;
        font-size: 12px;
        padding: 1.25em;
    }
</style>
