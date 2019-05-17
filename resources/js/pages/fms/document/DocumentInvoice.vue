<template>
    <div class="main__container">
        <div class="main__container__wrapper">
            <!--main__container__wrapperに記述していく-->
            <div class="head-container">
                <div class="head-container__wrapper">
                    <div class="page-title-container">
                        <div class="page-title-container__page-title">請求書</div>
                    </div>
                    <!-- printボタン -->
                    <div class="head-container__wrapper__print-btn-container">
                        <a class="button head-container__wrapper__print-btn-container__button">Print</a>
                    </div>
                </div>
            </div>
            
            <div class="main-container">
                <div class="main-container__wrapper">
                    <div class="main-container__wrapper__pdf-container">
                        <div class="main-container__wrapper__pdf-container__pdf"></div>
                    </div>
                    <!-- submitボタン -->
                    <div class="main-container__wrapper__submit-btn-container">
                        <a class="button main-container__wrapper__submit-btn-container__button">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script></script>

<style lang="scss" scoped>
    .main__container {
        background-color: #F0F0F7;
        font-size: 14px;
        &__wrapper {
            padding: 8px;
        }
    }

    // 共通部分
    .page-title-container {
        padding: 24px 0;
        &__page-title {
            font-size: 16px;
        }
    }
    .item-name-wrapper {
        width: 100%;
        padding: 16px 0;
        &__item-name {
            font-size: 14px;
            color: #43425D;
        }
    }
    // select
    .select-container {
        margin-bottom: 16px;
        &__wrapper {
            width: 100%;
            &__select {

                width: 100%;
                border-color: #3B86FF;
            }
            &__select:hover {
                border-color: #3B86FF;
            }
        }
    }
    // input
    .input-container {
        margin-bottom: 16px;
        &__control {
        }
        &__control input {
            border: 0;
            border-radius: 0;
            border-bottom: 3px solid #3B86FF;
            caret-color: #3B86FF;
        }
    }
    
    .head-container {
        width: 80%;
        padding: 0 40px;
        &__wrapper {
            // padding: 0 16px;
            display: flex;
            &__print-btn-container {
                margin-left: auto;
                &__button {
                    height: 40px;
                    width: 120px;
                    background-color: #43425D;
                    color: #ffffff;
                    margin: 24px 0;
                }
            }
        }
    }
    .main-container {
        width: 80%;
        padding: 0 40px;
        margin-bottom: 24px;
        &__wrapper {
            padding: 0 16px;
            background-color: #ffffff;
            &__pdf-container {
                padding: 24px;
                &__pdf {
                    height: 560px;
                    background-color: whitesmoke;
                    border: 1px solid #43425D;
                }
            }
            &__submit-btn-container {
                padding: 0 24px;
                text-align: right;
                &__button {
                    height: 40px;
                    width: 120px;
                    background-color: #43425D;
                    color: #ffffff;
                    margin: 24px 0;
                }
            }
        }
    }

</style>
