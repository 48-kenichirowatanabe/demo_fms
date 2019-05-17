<template>
    <div class="main__container">
        <div class="main__container__wrapper">
            <!--main__container__wrapperに記述していく-->
            <h1 class="main__container__wrapper__title">設定</h1>

            <!-- メニューバー -->
            <div class="main__container__wrapper__top">
                <ul class="main__container__wrapper__top__list">
                    <a href="#" @click="clickSmoothScroll('#billing_info')">請求情報設定</a>
                    <a href="#" @click="clickSmoothScroll('#pass_mail_change')">パスワード・メールアドレス設定</a>
                    <a href="#" @click="clickSmoothScroll('#notification_setting')">通知設定</a>
                    <a href="#">プロフィール管理</a>
                </ul>
            </div>

            <!-- 請求情報 -->
            <div class="billing-info-container">
                <h2 id="billing_info">請求情報</h2>
                <div class="billing-info-container__wrapper">
                    <h3 class="subtitle1">基本情報</h3>

                    <div class="billing-info-container__wrapper__block name">
                        <p>屋号/名前</p>
                        <div class="control">
                            <input class="input" type="text" placeholder="placeholder">
                        </div>
                    </div>

                    <div class="billing-info-container__wrapper__block line-box">
                        <div class="billing-info-container__wrapper__block__left postal-code">
                            <p>郵便番号</p>
                            <div class="control">
                                <input class="input" type="text" placeholder="placeholder">
                            </div>
                        </div>
                        <div class="billing-info-container__wrapper__block__right city">
                            <p>都道府県</p>
                            <div class="control">
                                <input class="input" type="text" placeholder="placeholder">
                            </div>
                        </div>
                    </div>

                    <div class="billing-info-container__wrapper__block line-box">
                        <div class="billing-info-container__wrapper__block__left municipality">
                            <p>市区町村・番地</p>
                            <div class="control">
                                <input class="input" type="text" placeholder="placeholder">
                            </div>
                        </div>
                        <div class="billing-info-container__wrapper__block__right building-name">
                            <p>建物名・部屋番号</p>
                            <div class="control">
                                <input class="input" type="text" placeholder="placeholder">
                            </div>
                        </div>
                    </div>

                    <div class="billing-info-container__wrapper__block tel">
                        <p>電話番号</p>
                        <div class="control">
                            <input class="input" type="text" placeholder="placeholder">
                        </div>
                    </div>

                    <h3 class="subtitle2">請求情報</h3>

                    <div class="billing-info-container__wrapper__block line-box">
                        <div class="billing-info-container__wrapper__block__left banking">
                            <p>金融機関</p>
                            <div class="select">
                                <select class="billing-info-container__wrapper__block__left__select">
                                    <option></option>
                                    <option>test1</option>
                                    <option>test2</option>
                                </select>
                            </div>
                        </div>
                        <div class="billing-info-container__wrapper__block__right banking-branch">
                            <p>支店</p>
                            <div class="control">
                                <input class="input" type="text" placeholder="placeholder">
                            </div>
                        </div>
                    </div>

                    <div class="billing-info-container__wrapper__block width300">
                        <p>預金種類</p>
                        <div class="control">
                            <input class="input" type="text" placeholder="placeholder">
                        </div>
                    </div>

                    <div class="billing-info-container__wrapper__block width300">
                        <p>口座番号</p>
                        <div class="control">
                            <input class="input" type="text" placeholder="placeholder">
                        </div>
                    </div>

                    <div class="billing-info-container__wrapper__block width300">
                        <p>口座名義</p>
                        <div class="control">
                            <input class="input" type="text" placeholder="placeholder">
                        </div>
                    </div>

                    <div class="billing-info-container__wrapper__block seal-box">
                        <div class="">
                            <p>請求書書印</p>
                            <p>背景が透明な140px以上の正方形のpng画像を用意してください。</p>
                        </div>
                        <div class="seal-set">
                            <div class="seal-set__left">
                                <div class=seal-img>NO IMAGE</div>
                            </div>
                            <div class="seal-set__right">
                                <div class="control">
                                    <div class="seal-drag_drop">drag&drop</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="control btn-wrapper-left">
                	    <button class="button btn">電子印影を作成</button>
                	</div>
                </div>
            </div>

            <!-- 中段 -->
            <div class="change-container">
                <h2 id="pass_mail_change">パスワード・メールアドレス変更</h2>
                <ul class="change-container__list">
                    <li class="change-container__list__item">
                        <p>メールアドレス</p>
                        <div class="control change-container__list__item__input-wrapper">
                            <input class="input control change-container__list__item__input-wrapper__input" type="text" placeholder="placeholder">
                        </div>
                    </li>
                    <li class="change-container__list__item">
                        <p>現在のパスワード</p>
                        <div class="control change-container__list__item__input-wrapper">
                            <input class="input control change-container__list__item__input-wrapper__input" type="text" placeholder="placeholder">
                        </div>
                    </li>
                    <li class="change-container__list__item">
                        <p>パスワード</p>
                        <div class="control change-container__list__item__input-wrapper">
                            <input class="input control change-container__list__item__input-wrapper__input" type="text" placeholder="placeholder">
                        </div>
                    </li>
                    <li class="change-container__list__item">
                        <p>確認用パスワード</p>
                        <div class="control change-container__list__item__input-wrapper">
                            <input class="input control change-container__list__item__input-wrapper__input" type="text" placeholder="placeholder">
                        </div>
                    </li>
                </ul>
                
                <div>
                    <div class="control btn-wrapper">
                        <button class="button btn">更新</button>
                    </div>   
                </div>
            </div>

            <!-- 下段 -->
            <div class="notification-setting-container">
                <h2 id="notification_setting">通知設定</h2>
                <div class="notification-setting-container__wrapper">
                    <h3>通知メールの受信</h3>
                    <p>タスクや請求書のアクティビティログの通知をメールでお知らせします。</p>
                    <div class="notification-setting-container__wrapper__input-box">
                        <div class="enable-wrapper">
                            <input type="radio" name="group1" value=""><span>有効</span>
                        </div>
                        <div class="disable-wrapper">
                            <input class="invalid" type="radio" name="group1" value=""><span>無効</span>
                        </div>
                    </div>
                </div>
                <div class="notification-setting-container__wrapper">
                    <h3>デイリーメールの受信</h3>
                    <p>毎朝、期限切れのタスクがある場合にメールを送ります。</p>
                    <div class="notification-setting-container__wrapper__input-box">
                        <div class="enable-wrapper">
                            <input type="radio" name="group2" value=""><span>有効</span>
                        </div>
                        <div class="disable-wrapper">
                            <input class="invalid" type="radio" name="group2" value=""><span>無効</span>
                        </div>
                    </div>
                </div>
                <div class="notification-setting-container__wrapper">
                    <h3>Slackと連携</h3>
                    <p>Slackと連携すると、improからの通知がSlackに届きます。</p>
                    <div class="notification-setting-container__wrapper__input-box">
                        <div class="enable-wrapper">
                            <input type="radio" name="group3" value=""><span>有効</span>
                        </div>
                        <div class="disable-wrapper">
                            <input class="invalid" type="radio" name="group3" value=""><span>無効</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="control btn-wrapper">
                        <button class="button btn">更新</button>
                    </div>   
                </div>
            </div>
           
                   
        </div>
    </div>
</template>

<script>
export default {
    methods:{
        clickSmoothScroll (n) {
            event.preventDefault()
            this.$SmoothScroll(
                document.querySelector(n),
                400,
                null,
                null,
                'y'
            )
        }
    }
}
</script>

<style lang="scss" scoped>
    .main__container {
        &__wrapper {
            width:80%;
            font-size:14px;
            background-color: #F0F0F7;
            padding-bottom:720px;
            &__title{
                font-size:16px;
            }
            &__top{
                &__list{
                    margin:16px 16px 0 16px;
                    display:flex;
                    justify-content: space-between;
                    a{
                        cursor: pointer;
                    }
                }
            }
            .billing-info-container{
                background-color: #fff;
                margin-top:16px;
                padding:16px;
                &__wrapper{
                    padding:16px;
                    .line-box{
                        display: flex;
                    }
                    .seal-box{
                        display: flex;
                        flex-direction: column;
                    }
                    .seal-set{
                        display: flex;
                        margin-top:16px;
                        &__left{
                            .seal-img{
                                width:180px;
                                height:140px;
                                background-color: pink;
                            }
                        }
                        &__right{
                            margin-left:24px;
                            .seal-drag_drop{
                                width:180px;
                                height:140px;
                                background-color: skyblue;
                                margin-left:24px;
                            }
                        }
                    }
                    .subtitle1{
                        margin-bottom:16px;
                    }
                    .subtitle2{
                        margin:16px 0;
                    }
                    .name{
                        width:1000px;
                    }
                    .tel{
                        width:200px;
                    }
                    .width300{
                        width:300px;
                    }
                    &__block{
                        margin-top:16px;
                        &__left{
                            .seal-img{
                                width:180px;
                                height:140px;
                                background-color: pink;
                            }
                            &__select{
                                width:400px;
                            }
                        }
                        &__right{
                            margin-left:24px;
                            .seal-drag_drop{
                                width:180px;
                                height:140px;
                                background-color: skyblue;
                                margin-left:24px;
                            }
                        }
                        .postal-code{
                            width:200px;
                        }
                        .city{
                            width:200px;
                        }
                        .municipality{
                            width:680px;
                        }
                        .building-name{
                            width:296px;
                        }
                        .banking{
                            width:400px;
                        }
                        .banking-branch{
                            width:200px;
                        }
                    }
                }
            }
            .change-container{
                margin-top:16px;
                padding:16px;
                background-color: #fff;
                &__list{
                    margin-left:32px;
                    &__item{
                        margin-top:16px;
                        &__input-wrapper{
                            &__input{
                                width:400px;
                            }
                        }
                    }
                }
            }
            .btn-wrapper{
                margin-top:16px;
                text-align: center;
                .btn{
                    width:140px;
                    border-radius: 18px;
                    color:#fff;
                    font-weight:bold;
                    background: #43425D;
                }
                .btn:hover{
                    opacity:0.8;
                }
            }
            .btn-wrapper-left{
                margin-top:16px;
                .btn{
                    width:140px;
                    border-radius: 18px;
                    color:#fff;
                    font-weight:bold;
                    background: #43425D;
                }
                .btn:hover{
                    opacity:0.8;
                }
            }
            .notification-setting-container{
                background-color: #fff;
                margin-top: 16px;
                padding: 16px;
                &__wrapper{
                    h3{
                        margin-bottom:8px;
                    }
                    margin-top:16px;
                    &__input-box{
                        display:flex;
                        .disable-wrapper{
                            margin-left:16px;
                        }
                    }
                }
            }
        }
    }
</style>
