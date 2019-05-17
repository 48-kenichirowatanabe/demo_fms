<template>
    <div class="main__container">
        <div class="main__container__wrapper">
            <!--main__container__wrapperに記述していく-->
            <h1 class="main__container__wrapper__title">プロジェクト作成</h1>
            <div class="project-create__container">
                <ul class="project-create__container__list">
                    <li class="project-create__container__list__item margin--none">
                        <div class="project-create__container__list__item__name">プロジェクト名 :</div>
                        <div class="control">
                            <input class="project-create__container__list__item__input under-border input" type="text" placeholder="プロジェクト名">
                        </div>
                    </li>
                    <li class="project-create__container__list__item">
                        <div class="project-create__container__list__item__name">プロジェクト詳細 :</div>
                        <div class="control">
                            <textarea class="project-create__container__list__item__textarea textarea has-fixed-size" placeholder=""></textarea>
                        </div>
                    </li>
                    <li class="project-create__container__list__item">
                        <div class="project-create__container__list__item__name">担当者 :</div>
                    <div class="control">
                    <div class="select">
                        <select class="project-create__container__list__item__select">
                        <option></option>
                        <option>test1</option>
                        <option>test2</option>
                        </select>
                    </div>
                    </div>
                    </li>
                    <li class="project-create__container__list__item">
                        <div class="project-create__container__list__item__name">パートナー :</div>
                        <div class="control">
                            <input class="project-create__container__list__item__input input is-normal" type="text" placeholder="">
                        </div>      
                    </li>
                    <li class="project-create__container__list__item">
                        <div class="project-create__container__list__item__name">プロジェクト期間 :</div>
                        <div class="calendars">
                            <div class="calendars__wrapper">
                                <div class="calendars__wrapper__title">開始日</div>
                                <datepicker class="calendars__wrapper__select" value="2018-9-5" format="YYYY-M-D" name="date2"></datepicker>
                            </div>
                            <div class="calendars__wrapper">
                                <div class="calendars__wrapper__title">終了日</div>
                                <datepicker class="calendars__wrapper__select" value="2018-9-5" format="YYYY-M-D" name="date2"></datepicker>
                            </div>
                        </div>
                    </li>
                    <li class="project-create__container__list__item">
                        <div class="project-create__container__list__item__name">資料 :</div>
                        <div class="project-create__container__list__item__wrapper">
                            <div class="project-create__container__list__item__wrapper__description">Upload</div>
                            <div class="file is-boxed project-create__container__list__item__wrapper__filearea">
                                <label class="file-label project-create__container__list__item__wrapper__filearea__label">
                                    <input class="file-input project-create__container__list__item__wrapper__filearea__label" type="file" name="resume">
                                    <span class="file-cta project-create__container__list__item__wrapper__filearea__label__file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label">
                                        Choose a file…
                                    </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="button-wrapper">
                    <button class="button-wrapper__btn button">作成</button>
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
        &__wrapper {
            width:80%;
            font-size:14px;
            background-color: #F0F0F7;
            padding:40px 40px;
            &__title{
                font-size:16px;
            }
            h1{
                font-size:24px;
            }
            .project-create__container{
                margin-top:32px;
                padding:40px;
                background-color:#FFF;
                &__list{
                    &__item{
                        margin-top:40px;
                        display:flex;
                        &__name{
                            width:180px;
                        }
                        &__input{
                            width:800px;
                            padding:10px;
                            border-color :#3B86FF;
                        }
                        .under-border{
                            border: none;
                            box-shadow: none;
                            border-radius: 0;
                            border-bottom:solid 3px #3B86FF;
                        }
                        &__textarea{
                            width:800px;
                            border-color :#3B86FF;
                        }
                        &__select{
                            width:800px;
                            border-color :#3B86FF;
                        }
                        &__wrapper{
                            &__filearea{
                                margin-top:8px;
                            }
                        }
                        .calendars{
                            width:640px;
                            display:flex;
                            justify-content: space-between;
                            &__wrapper{
                                &__select{
                                    margin-top:8px;
                                }
                            }
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
            .margin--none{
                margin-top:0;
            }
        }
    }
</style>