<template>
    <div class="main__container">
        <div class="main__container__wrapper">
            <!--main__container__wrapperに記述していく-->
            <div class="page-title-container">
                <div class="page-title-container__page-title">機密保持契約書</div>
            </div>
            <div class="main-container">
                <div class="main-container__wrapper">
                    <!-- タスク -->
                    <div class="item-name-wrapper">
                        <div class="item-name-wrapper__item-name">
                            タスク
                        </div>
                    </div>
                    <div class="select-container">
                        <div class="select-container__wrapper select">
                            <select class="select-container__wrapper__select">
                                <option></option>
                                <option>With options</option>
                                <option>With options</option>
                            </select>
                        </div>
                    </div>
                    <!-- 担当者 -->
                    <div class="item-name-wrapper">
                        <div class="item-name-wrapper__item-name">
                            担当者
                        </div>
                    </div>
                    <div class="select-container">
                        <div class="select-container__wrapper select">
                            <select class="select-container__wrapper__select">
                                <option></option>
                                <option>With options</option>
                                <option>With options</option>
                            </select>
                        </div>
                    </div>
                    <!-- パートナー -->
                    <div class="item-name-wrapper">
                        <div class="item-name-wrapper__item-name">
                            パートナー
                        </div>
                    </div>
                    <div class="select-container">
                        <div class="select-container__wrapper select">
                            <select class="select-container__wrapper__select">
                                <option></option>
                                <option>With options</option>
                                <option>With options</option>
                            </select>
                        </div>
                    </div>
                    <!-- 作成ボタン -->
                    <div class="main-container__wrapper__create-btn-container">
                        <a href="/document/secrecy" class="button main-container__wrapper__create-btn-container__button">作成</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script></script>

<style lang="scss" scoped>
    .main__container {
        &__wrapper {
            width:80%;
            font-size:14px;
            background-color: #F0F0F7;
            padding:40px;
        }
    }

    // 共通部分
    .page-title-container {
        margin-bottom:24px;
        &__page-title {
            font-size: 24px;
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
                // outline: 0;
                width: 100%;
                border-color: #3B86FF;
            }
            // &__select select {
            //     color: #3B86FF;
            // }
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
    
    // input-container__control
    .main-container {
        margin-bottom: 24px;
        &__wrapper {
            padding: 0 16px;
            background-color: #ffffff;
            &__create-btn-container {
                text-align: center;
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
    // main-container__wrapper__create-btn-container__button

</style>
