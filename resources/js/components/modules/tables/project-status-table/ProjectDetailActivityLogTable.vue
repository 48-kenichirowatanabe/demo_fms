<template>
    <div class=" activity-log-container">
        <div class=" activity-log-container__item">
            <h2 class=" activity-log-container__item__title">アクティビティログ</h2>
            <ul class=" activity-log-container__item__list">
                <li><div></div></li>
                <li><i class="arrow fas fa-angle-down"></i></li>
            </ul>
        </div>

        <div class=" activity-log-container__content">

            <ul v-for="(project_activityLog , index) in this.project_activityLogs" :key="index" v-show="index < activityLog_displayNumber" class=" activity-log-container__content__list">
                <li class=" activity-log-container__content__list__item">
                    <div class=" activity-log-container__content__list__item__image"><img v-bind:src="project_activityLog.activityLog_image"/></div>
                    <div class=" activity-log-container__content__list__item__info">
                        <div>{{ project_activityLog.activityLog_date }}</div>
                        <div>{{ project_activityLog.activityLog_partner }}</div>
                    </div>
                </li>
                <li>{{ project_activityLog.activityLog_doing }}</li>
            </ul>

            <div class="activity-log-container__content__showmore">
                <p class="activity-log-container__content__showmore__btn" @click="ShowMoreActivityLog(2)">Show More</p>
            </div>
            
        </div>             
    </div>
</template>

<script>
import { mapGetters } from 'vuex';
import { mapActions } from 'vuex';

export default {
    data(){
        return{
            activityLog_displayNumber: 2
        }
    },
    methods: {
        ...mapActions({
            fetchProjectActivityLogData:'fetchProjectActivityLogData'
        }),
        ShowMoreActivityLog(n) {
            return this.activityLog_displayNumber += n;
        }
    },
    computed: {
      ...mapGetters({
        project_activityLogs:'project_activityLogs'
      })
    },
    created(){
      this.fetchProjectActivityLogData();
    },
}
</script>

<style lang="scss" scoped>
    .activity-log-container{
        margin-top:24px;
        padding:16px 16px 0 16px;
        background-color: #fff;
        &__item{
            &__title{
                font-size:16px;
                padding-bottom:16px;
            }
            &__list{
                height:48px;
                display: flex;
                align-items: center;
                justify-content: space-around;
                background-color: #F5F6FA;
                li{
                    text-align: center;
                    width: 300px;
                    font-size: 12px;
                    font-weight: bold;
                    color:#A3A6B4;
                }
                .arrow{
                    font-size: 14px;
                    margin-left:24px;
                    cursor: pointer;
                }
            }    
        }
        &__content{
            &__list{
                height:96px;
                display: flex;
                align-items: center;
                justify-content: space-around;
                border-bottom: 1px solid #F1F1F3;
                &__item{
                    display:flex;
                    &__image{
                        img{
                            width:40px;
                            height:40px;
                            border-radius: 50%;
                            overflow: hidden;
                            position: relative;
                        }
                    }
                    &__info{
                        margin: 2px 0 0 8px;
                    }
                }
            }
            li{
                text-align: center;
                width: 300px;
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
</style>