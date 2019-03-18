<template inline-template>
    <div class="modal fade modal-callback" id="callback" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" v-show="showModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img class="svg" v-bind:src="this.iconCloseUrl" alt="">
                    </button>
                    <div class="callback">
                        <form class="callback-form" v-bind:action="this.postUrl" method="post">
                            @honeypot
                            <input type="hidden" name="type" value="callback">
                            <div class="callback-form__caption">Заказать бесплатную консультацию</div>
                            <div class="callback-form__content">
                                <div class="callback-form__block">
                                    <div class="callback-form__title">Имя</div>
                                    <input class="callback-form__input" type="text" name="name">
                                </div>
                                <div class="callback-form__block">
                                    <div class="callback-form__title">Телефон</div>
                                    <input class="callback-form__input" type="phone" name="phone">
                                </div>
                            </div>
                            <div class="callback-form__button">
                                <button class="button button-cta" type="submit">ПЕРЕЗВОНИТЕ МНЕ</button>
                            </div>
                            <div class="callback-privacy">
                                <div class="callback-privacy__check">
                                    <input type="checkbox" checked>
                                </div>
                                <div class="callback-privacy__text">Я согласен с использованием моих персональных данных для обработки данного обращения</div>
                            </div>
                        </form>
                    </div>
                    <!-- /callback -->
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CallbackFormComponent",
        props: [
            'iconCloseUrl',
            'postUrl',
            'honeypot'
        ],
        data(){
            return{
                showModal: false,
            }
        }
    }
</script>

<style scoped>

</style>
