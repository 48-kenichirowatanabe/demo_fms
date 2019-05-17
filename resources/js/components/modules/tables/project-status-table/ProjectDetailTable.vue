<template>
    <div>
        <h1 class="main__container__wrapper__title">{{ this.project_details.projectName }}</h1>
        <div class="detail-container">
            <ul class="detail-container__list">
                <li class="detail-container__list__item margin--none"><div class="detail-container__list__item__name">プロジェクト名 :</div> <p class="detail-container__list__item__content">{{ this.project_details.projectName }}</p> </li>
                <li class="detail-container__list__item"><div class="detail-container__list__item__name">プロジェクト詳細 :</div><div class="detail-container__list__item__detail-content">{{ this.project_details.projectDetail }}</div></li>
                <li class="detail-container__list__item"><div class="detail-container__list__item__name">担当者 :</div><p class="detail-container__list__item__content">{{ this.project_details.personInCharge }}</p> </li>
                <li class="detail-container__list__item"><div class="detail-container__list__item__name">パートナー :</div><p class="detail-container__list__item__content">{{ this.project_details.partner }}</p> </li>
                <li class="detail-container__list__item"><div class="detail-container__list__item__name">プロジェクト期間 :</div>
                    <div class="period__wrapper">
                        <div class="period__wrapper__container">
                            <div class="period__wrapper__container__start">開始日<span class="period__wrapper__container__start__date">{{ this.project_details.startDate }}</span></div>
                            <div class="period__wrapper__container__end">終了日<span class="period__wrapper__container__end__date">{{ this.project_details.endDate }}</span></div>
                        </div>
                    </div>
                </li>
                <li class="detail-container__list__item"><div class="detail-container__list__item__name">資料 :</div><div class="detail-container__list__item__content"> {{ this.project_details.document }} </div></li>
            </ul>
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex';
import { mapActions } from 'vuex';

export default {
    methods: {
        ...mapActions({
            fetchProjectDetailData:'fetchProjectDetailData',
        }),
    },
    computed: {
      ...mapGetters({
        project_details:'project_details',
      })  
    },
    created(){
      this.fetchProjectDetailData()
    },
}
</script>

<style lang="scss" scoped>
    .main__container__wrapper__title{
        font-size:24px;
    }
    .detail-container{ 
        &__list{
            margin-top:32px;
            padding:40px;
            background-color:#fff;
            &__item{
                display:flex;
                margin-top:40px;
                &__name{
                    width:180px;
                }
                &__detail-content{
                    width:800px;
                    height:100px;
                    padding:0.625em;
                    border:solid 1px #000000;
                    border-radius: 4px;
                }
                textarea{
                    max-width: 800px;
                    width:100%;
                    height:100px;
                    padding: 10px;
                    resize: none;
                }
            }
            .period__wrapper{
                &__container{
                    display:flex;
                    &__start{
                        &__date{
                        margin-left:40px; 
                        }
                    }
                    &__end{
                    margin-left:60px; 
                        &__date{
                            margin-left:40px; 
                        }
                    }
                }
            }
        }
        .margin--none{
            margin-top:0px;
        }
    }
</style>
