<template>
    <div class="main__container">
        <div class="main__container__wrapper">
            <!--main__container__wrapperに記述していく-->
            <h1>プロフィール管理画面</h1>

            <!-- 上段 -->
            <div class="profile-edit-container">
                <div class="profile-edit-container__name">
                    <h2>名前</h2>
                    <div class="control">
                        <input class="input" type="text" placeholder="placeholder">
                    </div>
                </div>
                <div class="profile-edit-container__icon">
                    <h2>アイコン</h2>
                    <div class="profile-edit-container__icon__wrapper">
                        <div class="profile-edit-container__icon__wrapper__img">
                            <img src="" alt="">
                        </div>
                        <div class="profile-edit-container__icon__wrapper__drag-drop">drag&drop</div>
                    </div>
                </div>
                <div class="profile-edit-container__charge">
                    <h2>担当</h2>
                    <div class="control">
                        <input class="input" type="text" placeholder="placeholder">
                    </div>
                </div>
                <div class="profile-edit-container__self-introduction">
                    <h2>自己紹介</h2>
                    <div class="control">
                        <textarea class="textarea has-fixed-size" placeholder="placeholder"></textarea>
                    </div>
                </div>
                <div class="profile-edit-container__btns-container">
                    <div class="control">
                        <button class="button preview-btn">プレビュー</button>
                    </div>    
                    <div class="control">
                        <button class="button update-btn">更新</button>
                    </div>    
                </div>
            </div>
            
            <!-- 中段 -->
            <div class="change-container">
                <h2>パスワード・メールアドレス変更</h2>
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
                        <button class="button update-btn">更新</button>
                    </div>   
                </div>
            </div>

            <!-- 下段 -->
            <div class="notification-setting-container">
                <h2>通知設定</h2>
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
                        <button class="button update-btn">更新</button>
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
            h1{
                font-size: 16px;
            }
            .profile-edit-container{
                background-color: #fff;
                margin-top:16px;
                padding:16px;
                &__name{
                    input{
                        width:1000px;
                    }
                }
                &__icon{
                    margin-top:16px;
                    &__wrapper{
                        display:flex;
                        align-items: center;
                        &__img{
                            width:80px;
                            height:80px;
                            border-radius: 100px;
                            background-color: skyblue;
                        }
                        &__drag-drop{
                            margin-left:48px;
                            width:120px;
                            height:120px;
                            background-color: pink;
                        }
                    }
                }
                &__charge{
                    margin-top:16px;
                    input{
                        width:1000px;
                    }
                }
                &__self-introduction{
                    margin-top:16px;
                    width:1000px;
                }
                &__btns-container{
                    display:flex;
                    margin-top:16px;

                    .preview-btn{
                        width:140px;
                        border-radius: 18px;
                        color: #000000;
                        font-weight:bold;
                        background: #F7F7FC;
                    }
                    .preview-btn:hover{
                        opacity:0.8;
                    }

                    .update-btn{
                        width:140px;
                        border-radius: 18px;
                        color:#fff;
                        font-weight:bold;
                        background: #43425D;
                        margin-left: 16px;
                    }
                    .update-btn:hover{
                        opacity:0.8;
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
                .update-btn{
                    width:140px;
                    border-radius: 18px;
                    color:#fff;
                    font-weight:bold;
                    background: #43425D;
                }
                .update-btn:hover{
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
