<template>
    <div class="head-container__wrapper">
        <div class="head-container__wrapper__item-container">
            <div class="head-container__wrapper__item-container__wrapper">
                <div class="head-container__wrapper__item-container__wrapper__icon-container">
                    <div class="head-container__wrapper__item-container__wrapper__icon-container__icon"></div>
                </div>
                <div class="head-container__wrapper__item-container__wrapper__content-container">
                    <div class="head-container__wrapper__item-container__wrapper__content-container__wrapper">
                        <div class="head-container__wrapper__item-container__wrapper__content-container__wrapper__number">{{ number }}</div>
                        <div class="head-container__wrapper__item-container__wrapper__content-container__wrapper__text">{{ notDeal }}</div>
                    </div>
                </div>
                <div class="head-container__wrapper__item-container__wrapper__create-container">
                    <div class="head-container__wrapper__item-container__wrapper__create-container__create">作成</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        number: {
            type: Number,
        }, 
        notDeal: {
            type: String,
        }, 
    },
}
</script>


<style lang="scss" scoped>
    .head-container__wrapper {
        &__item-container {
            &__wrapper {
                height: 80px;
                width:320px;
                background-color: #ffffff;
                display: flex;
                justify-content: space-between;
                &__icon-container {
                    padding: 20px;
                    &__icon {
                        height: 40px;
                        width: 40px;
                        border-radius: 50%;
                        border: 1px solid #56D9FE;
                    }
                }
                &__content-container {
                    width: 1000%;
                    display: flex;
                    justify-content: center; /*左右中央揃え*/
                    align-items: center;
                    &__wrapper {
                        &__number {
                            text-align: center;
                            color: #56D9FE;
                        }
                        &__text {
                            text-align: center;
                        }
                    }
                }
                &__create-container {
                    padding: 28px 20px;
                    margin-left: auto;
                    &__create {
                        height: 24px;
                        width: 48px;
                        border-radius: 25px;
                        background-color: #56D9FE;
                        text-align: center;
                        line-height: 24px;
                        
                    }
                }
            }
        }
    }
    


</style>

