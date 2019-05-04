<template>
    <div v-cloak>
        <div v-if="isMember">
            <div class="container col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card shadow-lg border-0 px-3">
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
                        <div class="card shadow-lg border-0 px-3">
                            <div class="card-header border-0 bg-white text-center">
                                <p class="lead">
                                    Get <span class="font-weight-bold">3 free downloads</span> when you start your trial today
                                </p>
                            </div>

                            <div class="card-body">
                                <ul id="features">
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
                                <p class="small text-muted">
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
