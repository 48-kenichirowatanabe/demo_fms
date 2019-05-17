<template>
    <div class="main__container">
        <div class="main__container__wrapper">
            <!--main__container__wrapperに記述していく-->
            <h1 class="main__container__wrapper__title">プロフィール管理画面</h1>
            
            <div class="profile-setting_container">
                
                <div class="profile-setting_container__name width1000">
                    <p>名前</p>
                    <div class="control">
                        <input class="input" type="text" placeholder="placeholder">
                    </div>
                </div>

                <div class="profile-setting_container__icon margin-top16 width1000">
                    <div>
                        <p>アイコン</p>
                    </div>
                    <div class="profile-setting_container__icon__wrapper">
                        <div class="profile-setting_container__icon__wrapper__img">
                            <img src="" alt="">
                        </div>
                        <div class="profile-setting_container__icon__wrapper__drag-drop">
                            <div>
                                <div>drag&drop</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="profile-setting_container__work margin-top16 width1000">
                    <p>職種</p>
                    <div class="control">
                        <input class="input" type="text" placeholder="placeholder">
                    </div>
                </div>

                <div class="profile-setting_container__twitter margin-top16 width1000">
                    <p>twitter URL</p>
                    <div class="control">
                        <input class="input" type="text" placeholder="placeholder">
                    </div>
                </div>

                <div class="profile-setting_container__facebook margin-top16 width1000">
                    <p>facebook URL</p>
                    <div class="control">
                        <input class="input" type="text" placeholder="placeholder">
                    </div>
                </div>

                <div class="profile-setting_container__github margin-top16 width1000">
                    <p>Github URL</p>
                    <div class="control">
                        <input class="input" type="text" placeholder="placeholder">
                    </div>
                </div>

                <div class="profile-setting_container__insta margin-top16 width1000">
                    <p>Instagram URL</p>
                    <div class="control">
                        <input class="input" type="text" placeholder="placeholder">
                    </div>
                </div>

                <div class="profile-setting_container__name margin-top16 width1000">
                    <p>Webサイト URL</p>
                    <div class="control">
                        <input class="input" type="text" placeholder="placeholder">
                    </div>
                </div>

                <div class="profile-setting_container__self-introduction margin-top16 width1000">
                    <p>自己紹介</p>
                    <div class="control">
                        <textarea class="textarea has-fixed-size" placeholder="placeholder"></textarea>
                    </div>
                </div>

                <div class="profile-setting_container__btns-container margin-top16">
                    <div class="control">
                        <button class="button preview-btn">プレビュー</button>
                    </div>    
                    <div class="control">
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
                font-size:16px;
            }
            .profile-setting_container{
                background-color: #fff;
                margin-top:16px;
                padding:16px;
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
                .margin-top16{
                    margin-top:16px;
                }
                .width1000{
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
        }
    }
</style>
