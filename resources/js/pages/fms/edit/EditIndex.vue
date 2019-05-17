<template>
    <div class="main__container">
        <div class="main__container__wrapper">
            <!--main__container__wrapperに記述していく-->         
            <!-- top -->
            <h1 class="main__container__wrapper__title">設定</h1>
            <div class="main__container__wrapper__top">
                <ul class="main__container__wrapper__top__list">
                    <a href="#" @click="clickSmoothScroll('#basic-info')">会社基本情報設定</a>
                    <a href="#" @click="clickSmoothScroll('#other-info')">会社その他設定</a>
                    <a href="#" @click="clickSmoothScroll('#charge')">会社担当者設定</a>
                    <a href="#" @click="clickSmoothScroll('#setting')">アカウント設定</a>
                    <a href="#">個人情報の設定</a>
                </ul>
            </div>
            <!-- 会社基本情報設定 -->
            <div id="basic-info" class="basic-info-container">
                <h2>会社基本情報設定</h2>
                <ul class="basic-info-container__list">
                    <li class="basic-info-container__list__item-container">
                        <div class="basic-info-container__list__item-container__wrapper">
                            <h3>会社名</h3>
                            <div class="control">
                                <input class="top-input input" type="text" placeholder="placeholder">
                            </div>
                        </div>
                        <div class="basic-info-container__list__item-container__wrapper right-input">
                            <h3>代表者名</h3>
                            <div class="control">
                                <input class="top-input input" type="text" placeholder="placeholder">
                            </div>
                        </div>
                    </li>
                    <li class="basic-info-container__list__item-container">
                        <div class="basic-info-container__list__item-container__wrapper">
                            <h3>郵便番号</h3>
                            <div class="control">
                                <input class="middle-input input" type="text" placeholder="placeholder">
                            </div>
                        </div>
                        <div class="basic-info-container__list__item-container__wrapper right-input">
                            <h3>都道府県</h3>
                            <div class="control">
                                <input class="middle-input input" type="text" placeholder="placeholder">
                            </div>
                        </div>
                    </li>
                    <li class="basic-info-container__list__item-container">
                        <div class="basic-info-container__list__item-container__wrapper">
                            <h3>市区町村・番地</h3>
                            <div class="control">
                                <input class="bottom-left-input input" type="text" placeholder="placeholder">
                            </div>
                        </div>

                        <div class="basic-info-container__list__item-container__wrapper right-input">
                            <h3>建物名・部屋番号</h3>
                            <div class="control">
                                <input class="bottom-right-input input" type="text" placeholder="placeholder">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- 会社その他設定 -->
            <div id="other-info" class="other-info-container">
                <ul class="other-info-container__list">
                    <h2 class="other-info-container__list__title">会社その他設定</h2>
                    <li class="other-info-container__list__item">
                        <h3 class="other-info-container__list__item__subtitle">上長、経理による書類・タスクの承認</h3>
                        <div class="other-info-container__list__item__input-wrapper">
                            <div class="enable-wrapper">
                                <input type="radio" name="group1" value=""><span>有効</span>
                            </div>
                            <div class="disable-wrapper">
                                <input class="invalid" type="radio" name="group1" value=""><span>無効</span>
                            </div>
                        </div>
                    </li>

                    <li class="other-info-container__list__item">
                        <h3 class="other-info-container__list__item__subtitle">請求書の源泉所得税の有無</h3>
                        <p class="other-info-container__list__item__description">請求書作成時に、経費を源泉徴収の対象にするかどうか選択できます。</p>
                        <div class="other-info-container__list__item__input-wrapper">
                            <div class="enable-wrapper">
                                <input type="radio" name="group2" value=""><span>有効</span>
                            </div>
                            <div class="disable-wrapper">
                                <input class="invalid" type="radio" name="group2" value=""><span>無効</span>
                            </div>
                        </div>
                    </li>

                    <li class="other-info-container__list__item">
                        <h3 class="other-info-container__list__item__subtitle">リマインド設定</h3>
                        <p class="other-info-container__list__item__heading">締め日の設定</p>
                        <p class="other-info-container__list__item__description">締め日を有効にし登録すると、締め日に「申請されていない請求書」「請求書に紐づけられていないタスク」がある場合、自動通知が行なわれます。 設定された締め日をもとにタスクは３日前、請求書は１日前に通知が有効になります。</p>
                        <div class="other-info-container__list__item__input-wrapper">
                            <div class="enable-wrapper">
                                <input type="radio" name="group3" value=""><span>有効</span>
                            </div>
                            <div class="disable-wrapper">
                                <input class="invalid" type="radio" name="group3" value=""><span>無効</span>
                            </div>
                        </div>
                        <div class="other-info-container__list__item__closing-date-wrapper">
                            毎月
                            <select name="" id="">
                                <option value=""></option>
                                <option value="">15</option>
                                <option value="">20</option>
                            </select>
                            日締め
                        </div>
                        <div class="other-info-container__list__item__date-container">
                            <ul class="other-info-container__list__item__date-container__wrapper">
                                <li class="other-info-container__list__item__date-container__wrapper__heading">次回締め日</li>
                                <li>{{ nextClosingDate }}</li>
                            </ul>
                            <ul class="other-info-container__list__item__date-container__wrapper">
                                <li class="other-info-container__list__item__date-container__wrapper__heading">タスク通知日</li>
                                <li>{{ taskNotificationDate }}</li>
                            </ul>
                            <ul class="other-info-container__list__item__date-container__wrapper">
                                <li class="other-info-container__list__item__date-container__wrapper__heading">請求書通知日</li>
                                <li>{{ invoiceNotificationDate }}</li>
                            </ul>
                        </div>
                    </li>
                    <li class="other-info-container__list__item">
                        <h3>書類</h3>
                        <ul class="other-info-container__list__item__menu">
                            <li class="other-info-container__list__item__menu__container">
                                <div class="form-select-container">
                                    <div class="form-select-container__wrapper">
                                    	<h4 class="document-type">発注書</h4>
                                    	<div class="form-select-container__wrapper__group">
                                    	    <div class="form-select-container__wrapper__group__format-radio">
                                    	        <input type="radio" name="group5"><span>フォーマット活用</span>
                                    	    </div>
                                    	    <div class="form-select-container__wrapper__group__own-radio">
                                    	        <input type="radio" name="group5"><span>自社の活用</span>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="form-select-container__drag-drop">drag&drop</div>
                                </div>
                            </li>
                            <li class="other-info-container__list__item__menu__container">
                                <div class="form-select-container">
                                    <div class="form-select-container__wrapper">
                                    	<h4 class="document-type">機密保持契約書</h4>
                                    	<div class="form-select-container__wrapper__group">
                                    	    <div class="form-select-container__wrapper__group__format-radio">
                                    	        <input type="radio" name="group5"><span>フォーマット活用</span>
                                    	    </div>
                                    	    <div class="form-select-container__wrapper__group__own-radio">
                                    	        <input type="radio" name="group5"><span>自社の活用</span>
                                    	    </div>
                                    	</div>
                                    </div>
                                    <div class="form-select-container__drag-drop">drag&drop</div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- 会社担当者設定 -->
            <div id="charge" class="charge-container">
                <div class="charge-container__top-wrapper">
                	<h2 class="charge-container__top-wrapper__item__title">会社担当者設定</h2>
                	<div class="control">
                	    <button class="button btn">担当者追加</button>
                	</div>
                </div>
                <div class="charge-container__item">
                    <ul class="charge-container__item__list">
                        <li></li>
                        <li>担当者名</li>
                        <li>メールアドレス</li>
                        <li>パートナー依頼中</li>
                        <li>ステータス</li>
                    </ul>
                </div>
                <div class="charge-container__content">
                    <ul v-for="(item , index) in charge_list" :key="item.id" v-show="index < charge_displayNumber" class="charge-container__content__list" >
                        <li><span class="icon">{{ item.charge_icon }}</span></li>
                        <li>{{ item.charge_name }}</li>
                        <li>{{ item.charge_email }}</li>
                        <li>{{ item.charge_partner_request }}</li>
                        <li>{{ item.charge_status }}</li>
                    </ul>
                    <div class="charge-container__content__showmore">
                        <p class="charge-container__content__showmore__btn" @click="showMoreCharge(4)">Show More</p>
                    </div>
                </div>
            </div>
            
            <!-- アカウント設定 -->
            <div id="setting" class="setting-container">
                <h2 class="setting-container__title">アカウント設定</h2>
                <div class="setting-container__plan-wrapper">
                    <div class="setting-container__plan">プラン</div>
                    <div class="setting-container__plan-name">{{ plan }}</div>
                </div>
                <div class="control">
                    <button class="button btn">変更する</button>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            nextClosingDate:"2019年2月28日",
            taskNotificationDate:"2019年2月25日",
            invoiceNotificationDate:"2019年2月27日",
            charge_list:[
                {id:1, charge_icon:"na",charge_name:"永瀬達也",charge_email:"tatsu.nagase@gmail.com",charge_partner_request:"管理者",charge_status:"登録済み"},
                {id:2, charge_icon:"ts",charge_name:"辻佳佑",charge_email:"kei@gmail.com",charge_partner_request:"管理者",charge_status:"登録済み"},
                {id:3, charge_icon:"ko",charge_name:"小松エリー",charge_email:"aaaaaa@gmail.com",charge_partner_request:"管理者",charge_status:"登録済み"},
            ],
            charge_displayNumber: 4,
            plan:"ライトプラン(年払い)"
        }
    },
    methods:{
        showMoreCharge(variable){
            return this.charge_displayNumber += variable;
        },
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
            .basic-info-container{
                margin-top:16px;
                padding:16px;
                background-color: #fff;
                &__list{
                    &__item-container{
                        margin-top:16px;
                        margin-left:24px;
                        display:flex;
                        &__wrapper{
                            .top-input{
                                width:500px;
                            }
                            .middle-input{
                                width:200px;
                            }
                            .bottom-left-input{
                                width:700px
                            }
                            .bottom-right-input{
                                width:300px;
                            }
                        }
                        .right-input{
                            margin-left:40px;
                        }
                    }
                }
            }
            .other-info-container{
                margin-top:16px;
                padding:16px;
                background-color: #fff;
                &__list{
                    &__item{
                        margin-top:32px;
                        &__subtitle{
                            margin-bottom:8px;
                        }
                        &__input-wrapper{
                            display:flex;
                            margin-top:8px;
                            .disable-wrapper{
                                margin-left:16px;
                            }
                        }
                        &__closing-date-wrapper{
                            margin-top:8px;
                        }
                        &__date-container{
                            padding:16px;
                            width:300px;
                            border:solid 1px black;
                            &__wrapper{
                                display:flex;
                            }
                        }
                        &__date-container{
                            margin-top:16px;
                            &__wrapper{
                                &__heading{
                                    width:120px;
                                }
                            }
                        }
                        &__menu{
                            &__container{
                                margin-top:16px;
                                .form-select-container{
                                    align-items: center;
                                    display:flex;
                                    &__wrapper{
                                        margin-bottom:32px;
                                        &__group{
                                            margin-top:16px;
                                            display: flex;
                                            &__own-radio{
                                                margin-left:48px;
                                            }
                                        }
                                    }
                                    &__drag-drop{
                                        margin-left:48px;
                                        width:120px;
                                        height:120px;
                                        background-color: pink;
                                    }
                                }
                            }
                        }
                    }
                }
            }
            .charge-container{
                margin-top:16px;
                padding:16px 16px 0 16px;
                background-color: #fff;
                &__top-wrapper{
                    display:flex;
                    justify-content: space-between;
                }
                .charge-container{
                    margin-top:16px;
                    padding:16px 16px 0 16px;
                    background-color: #fff;
                    &__item{
                        margin-top:16px;
                        &__title{
                            font-size:16px;
                            padding-bottom:16px;
                        }
                        &__list{
                            height:48px;
                            display: flex;
                            align-items: center;
                            justify-content: space-around;
                            background-color:#F5F6FA;
                            li{
                            text-align: center;
                            width: 140px;
                            font-size: 12px;
                            }
                        }    
                    }
                    &__content{
                        &__list{
                            height:96px;
                            display: flex;
                            align-items: center;
                            justify-content: space-around;
                            border-bottom: solid lightgray 0.5px;
                        }
                        .icon{
                            width:40px;
                            height:40px;
                            background-color: pink;
                            border-radius: 100px;
                        }
                        li{
                            text-align: center;
                            width: 140px;
                            font-size: 12px;                        
                        }
                        &__showmore{
                            padding:56px 0;
                            &__btn{
                                text-align: center;
                                color:#3B86FF;
                                cursor: pointer;
                            }
                        }
                    }
                }
            }
            .setting-container{
                margin-top:16px;
                padding:16px;
                background-color: #fff;
                &__plan-wrapper{
                    margin:16px 0;
                }
            }
            .btn{
                color:#fff;
                background-color: #43425D;
                font-weight: bold;
                border-radius:18px;
            }
            .btn:hover{
                opacity: 0.8;
            }
        }
    }
</style>