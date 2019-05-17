<template>
    <div class="main__container">
        <div class="main__container__wrapper">
            <!--main__container__wrapperに記述していく-->
            <!-- ページタイトル エリア -->
            <div class="page-title-container">
                <div class="page-title-container__page-title">タスク作成</div>
            </div>

            <!-- プロジェクトを選択する エリア -->
            <div class="select-container">
                <div class="select-container__wrapper">
                    <!-- プロジェクトを選択する -->
                    <div class="select-container__wrapper__textarea">
                        <div class="select-container__wrapper__textarea__text">
                            プロジェクトを選択する
                        </div>
                    </div>
                    <!-- セレクトエリア -->
                    <div class="select-container__wrapper__select-area control">
                        <div class="select-container__wrapper__select-area__field field">
                            <div class="select-container__wrapper__select-area__field__control control">
                                <div class="select-container__wrapper__select-area__field__control__select select is-info">
                                <select>
                                    <option></option>
                                    <option>With options</option>
                                    <option>With options</option>
                                </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content-container">
                <div class="content-container__wrapper">
                    <!-- main -->
                    <div class="main-container">
                        <div class="main-container__wrapper">
                            <!-- 項目：タスク名 -->
                            <div class="main-container__wrapper__item-container">
                                <div class="item-name-wrapper">
                                    <div class="item-name-wrapper__item-name">
                                        タスク名：
                                    </div>
                                </div>
                                <div class="main-container__wrapper__item-container__inputarea">
                                    <div class="main-container__wrapper__item-container__inputarea__field">
                                        <div class="main-container__wrapper__item-container__inputarea__field__control">
                                            <input class="input" type="text" placeholder="Placeholder">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 項目：タスク内容 -->
                            <div class="main-container__wrapper__item-container">
                                <div class="item-name-wrapper">
                                    <div class="item-name-wrapper__item-name">
                                        タスク内容：
                                    </div>
                                </div>
                                <div class="main-container__wrapper__item-container__textarea">
                                    <textarea class="textarea" placeholder="Placeholder"></textarea>
                                </div>
                            </div>
                            <!-- 項目：締め切り -->
                            <div class="main-container__wrapper__item-container">
                                <div class="item-name-wrapper">
                                    <div class="item-name-wrapper__item-name">
                                        締め切り：
                                    </div>
                                </div>
                                <div class="main-container__wrapper__item-container__calendar-content">
                                    <!-- 開始日カレンダー -->
                                    <div class="main-container__wrapper__item-container__calendar-content__content">                               
                                        <div>
                                            <div class="item-name-wrapper__item-name main-container__wrapper__item-container__calendar-content__content__item-name-wrapper__item-name">
                                                開始日
                                            </div>
                                        </div>
                                            <datepicker value="2018-9-5" format="YYYY-M-D" name="date2"></datepicker>
                                    </div>
                                    <!-- 終了日カレンダー -->
                                    <div class="main-container__wrapper__item-container__calendar-content__content">                               
                                        <div>
                                            <div class="item-name-wrapper__item-name main-container__wrapper__item-container__calendar-content__content__item-name-wrapper__item-name">
                                                終了日
                                            </div>
                                        </div>
                                            <datepicker value="2018-9-5" format="YYYY-M-D" name="date2"></datepicker>
                                    </div>
                                </div>
                            </div>
                            <!-- 項目：資料 -->
                            <div class="main-container__wrapper__item-container">
                                <div class="item-name-wrapper">
                                    <div class="item-name-wrapper__item-name">
                                        資料：
                                    </div>
                                </div>
                                <div class="item-name-wrapper main-container__wrapper__item-container__uploadnamearea">
                                    <div class="item-name-wrapper__item-name main-container__wrapper__item-container__uploadarea__uploadname">
                                        Upload
                                    </div>
                                </div>
                                <div class="file is-boxed item-name-wrapper main-container__wrapper__item-container__filearea">
                                    <label class="file-label main-container__wrapper__item-container__filearea__label">
                                        <input class="file-input file-label main-container__wrapper__item-container__filearea__label" type="file" name="resume">
                                        <span class="file-cta main-container__wrapper__item-container__filearea__label__file-cta">
                                        <span class="file-icon">
                                            <i class="fas fa-upload"></i>
                                        </span>
                                        <span class="file-label">
                                            Choose a file…
                                        </span>
                                        </span>
                                    </label>
                                </div>
                                <div class="button-wrapper">
                                    <button class="button-wrapper__btn button">作成</button>
                                </div>
                            </div>
                        </div>      
                    </div>
                    <!-- side -->
                    <div class="side-container">
                        <div class="side-container__wrapper">
                            <!-- テンプレート -->
                            <div class="side-container__wrapper__template-container">
                                <div class="side-container__wrapper__template-container__wrapper">
                                    <div class="item-name-wrapper">
                                        <div class="item-name-wrapper__item-name">
                                            テンプレート：
                                        </div>
                                    </div>
                                    <div class="select-container__wrapper__select-area control">
                                        <div class="select-container__wrapper__select-area__field field">
                                            <div class="select-container__wrapper__select-area__field__control control">
                                                <div class="select-container__wrapper__select-area__field__control__select select is-info">
                                                <select>
                                                    <option></option>
                                                    <option>With options</option>
                                                    <option>With options</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 担当者・パートナー -->
                            <div class="side-container__wrapper__tanpa-container">
                                <div class="side-container__wrapper__tanpa-container__wrapper">
                                    <!-- 担当者 -->
                                    <div class="side-container__wrapper__tanpa-content__wrapper__incharge-container">
                                        <div class="side-container__wrapper__tanpa-content__wrapper__incharge-container__wrapper">
                                            <div class="item-name-wrapper">
                                                <div class="item-name-wrapper__item-name">
                                                    担当者：
                                                </div>
                                            </div>
                                            <div class="select-container__wrapper__select-area control staff">
                                                <div class="select-container__wrapper__select-area__field field">
                                                    <div class="select-container__wrapper__select-area__field__control control">
                                                        <div class="select-container__wrapper__select-area__field__control__select select is-info">
                                                        <select>
                                                            <option></option>
                                                            <option>With options</option>
                                                            <option>With options</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- パートナー -->
                                    <div class="side-container__wrapper__tanpa-content__partner-container">
                                        <div class="side-container__wrapper__tanpa-content__wrapper__partner-container__wrapper">
                                            <div class="item-name-wrapper">
                                                <div class="item-name-wrapper__item-name">
                                                    パートナー：
                                                </div>
                                            </div>
                                            <div class="select-container__wrapper__select-area control">
                                                <div class="select-container__wrapper__select-area__field field">
                                                    <div class="select-container__wrapper__select-area__field__control control">
                                                        <div class="select-container__wrapper__select-area__field__control__select select is-info">
                                                        <select>
                                                            <option></option>
                                                            <option>With options</option>
                                                            <option>With options</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 契約内容 -->
                            <div class="side-container__wrapper__agreement-container">
                                <div class="side-container__wrapper__agreement-container__wrapper">
                                    <div class="item-name-wrapper">
                                        <div class="item-name-wrapper__item-name">
                                            パートナー契約内容：
                                        </div>
                                    </div>
                                    <div class="side-container__wrapper__agreement-container__wrapper__fee-container">
                                        <div  class="side-container__wrapper__agreement-container__wrapper__fee-container__name">
                                            報酬形式
                                        </div>
                                        <div class="side-container__wrapper__agreement-container__wrapper__fee-container__control">
                                            <label class="radio">
                                                <input type="radio" name="foobar">
                                                固定
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="foobar" checked>
                                                時間
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="foobar" checked>
                                                日
                                            </label>
                                        </div>
                                    </div>
                                    <div class="side-container__wrapper__agreement-container__wrapper__order-container">
                                        <div class="side-container__wrapper__agreement-container__wrapper__order-container__name">
                                            発注額
                                        </div>
                                        <div class="side-container__wrapper__agreement-container__wrapper__order-container__content">
                                            <!-- 発注単価 -->
                                            <div class="side-container__wrapper__agreement-container__wrapper__order-container__name">
                                                発注単価(税抜)
                                            </div>
                                            <div class="side-container__wrapper__agreement-container__wrapper__order-container__content__inputitem">
                                                <input class="input" type="text" placeholder="Text input"><div class="side-container__wrapper__agreement-container__wrapper__order-container__content__inputitem__class">円</div>
                                            </div>
                                            <!-- 作業件数 -->
                                            <div class="side-container__wrapper__agreement-container__wrapper__order-container__name">
                                                作業件数
                                            </div>
                                            <div class="side-container__wrapper__agreement-container__wrapper__order-container__content__inputitem">
                                                <input class="input" type="text" placeholder="Text input"><div class="side-container__wrapper__agreement-container__wrapper__order-container__content__inputitem__class">件</div>
                                            </div>
                                            <!-- 水平線 -->
                                            <div class="side-container__wrapper__agreement-container__wrapper__order-container__content__hr"></div>
                                            <div class="side-container__wrapper__agreement-container__wrapper__order-container__content__item-wrapper">
                                                <div class="side-container__wrapper__agreement-container__wrapper__order-container__content__item-wrapper__item">
                                                    <div class="side-container__wrapper__agreement-container__wrapper__order-container__content__item-wrapper__item__item-name">
                                                        発注額(税抜)
                                                    </div>
                                                    <div class="side-container__wrapper__agreement-container__wrapper__order-container__content__item-wrapper__item__item-amount">
                                                        ¥0
                                                    </div>
                                                </div>
                                                <div class="side-container__wrapper__agreement-container__wrapper__order-container__content__item-wrapper__item">
                                                    <div class="side-container__wrapper__agreement-container__wrapper__order-container__content__item-wrapper__item__item-name">
                                                        発注額(税込)
                                                    </div>
                                                    <div class="side-container__wrapper__agreement-container__wrapper__order-container__content__item-wrapper__item__item-amount">
                                                        ¥0
                                                    </div>
                                                </div>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="side-container__wrapper__agreement-container__wrapper__fee-container">
                                        <div  class="side-container__wrapper__agreement-container__wrapper__fee-container__name">
                                            備考
                                        </div>
                                        <div class="side-container__wrapper__agreement-container__wrapper__fee-container__name">
                                            発注書の備考欄に記載されます。
                                        </div>
                                        <div class="side-container__wrapper__agreement-container__wrapper__fee-container__control">
                                            <textarea class="textarea side-container__wrapper__agreement-container__wrapper__fee-container__control__textarea" placeholder="備考"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import datepicker from 'vue-date-picker'
export default {
  components: {
    datepicker
  }
}
</script>


<style lang="scss" scoped>

.main__container {
    width:80%;
    background-color: #F0F0F7;
    font-size: 14px;
    &__wrapper{
        padding:40px;
    }
}

// 共通部分
.page-title-container {
    // padding: 24px 40px;
    &__page-title {
        font-size: 24px;
        margin-bottom:32px;
    }
}
.item-name-wrapper {
    width: 100%;
    &__item-name {
        margin-bottom:8px;
        font-size: 14px;
        color: #43425D;
    }
}

// プロジェクトを選択する エリア
.select-container {
    // width: 80%;
    // padding: 0 40px;
    margin-bottom: 24px;
    &__wrapper {
        padding:16px 0;
        background-color: #ffffff;
        display: flex;
        &__textarea {
            padding: 0 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            &__text {
                &__control {
                    &__select {
                    }
                    &__select select {
                        width: 480px;
                        border-color: #3B86FF;
                    }
                }
            }
        }
        // セレクトエリア
        &__select-area {
            justify-content: center;
            align-items: center;
            &__field {
                &__control {
                    &__select {
                    }
                    &__select select {
                        width: 640px;
                        border-color: #3B86FF;
                    }
                }
            }
        }
    }
}

.content-container {
    // width: 80%;
    // padding: 0 40px;
    // margin-bottom: 24px;
    &__wrapper {
        display: flex;
    }
}
.main-container {
    width: 70%;
    margin-right: 24px;
    &__wrapper {
        background-color: #ffffff;
        padding: 16px;
        &__item-container {
            margin-bottom: 40px;
            // タスク名
            &__inputarea {
                &__field {
                    &__control {
                    }
                    &__control input {
                        border: 0;
                        box-shadow: none;
                        border-radius: 0;
                        border-bottom: 3px solid #3B86FF;
                        caret-color: #3B86FF;
                    }
                }
            }
            // タスク内容
            &__textarea {
                height: 120px;
            }
            &__textarea textarea {
                border-color: #3B86FF;
                caret-color: #3B86FF;
                resize: none;
            }
            // 締め切り
            &__calendar-content {
                display: flex;
                justify-content: space-evenly;
            }
            // 資料
            &__uploadarea {
                &__uploadname {
                }
            }
            &__filearea {
                &__label {
                    &__file-cta {
                        height: 170px;
                    }
                }
            }
            .button-wrapper{
                text-align: center;
                &__btn{
                    width:140px;
                    border-radius: 18px;
                    color:#fff;
                    font-weight:bold;
                    background: #43425D;
                    margin-top: 32px;
                }
                &__btn:hover{
                    opacity:0.8;
                }
            }
        }    
    }
}
.side-container {
        width: 30%;
    &__wrapper {
        // テンプレート
        &__template-container {
            background-color: #ffffff;
            padding: 16px 16px 32px;
            margin-bottom: 24px;
            &__wrapper {
                
            }
        }
        // 担当者・パートナー
        &__tanpa-container {
            background-color: #ffffff;
            padding: 16px 16px 32px;
            margin-bottom: 24px;
            &__wrapper {
                .staff{
                    margin-bottom:8px;
                }
            }
        }
        // 契約内容
        &__agreement-container {     
            background-color: #ffffff;
            padding: 16px 16px 32px;
            margin-bottom: 24px;
            &__wrapper {
                // 報酬形式
                &__fee-container {
                    margin-bottom: 24px;
                    &__name {
                        padding: 8px 0;
                    }
                    &__control {
                        display: flex;
                        justify-content: space-evenly;
                        &__textarea {
                            border-color: #808495;
                            resize: none;
                        }
                    }
                }
                // 発注額
                &__order-container {
                    &__content {
                        border: 1px solid #707070;
                        padding: 8px;
                        margin-bottom: 24px;
                        &__inputitem {
                            margin-bottom: 8px;
                            display: flex;
                            &__class {
                                margin-left: 8px;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }
                        }
                        &__hr {
                            width: 95%;
                            margin: 16px auto;
                            border-bottom: 1px solid #F1F1F3;
                        }
                        &__item-wrapper {
                            &__item {
                                margin-bottom: 8px;
                                display: flex;
                                &__item-name {
                                }
                                &__item-amount {
                                    margin-left: auto;

                                }
                            }
                        }
                    }
                    
                    
                }
            }
        }
    }
}
</style>
