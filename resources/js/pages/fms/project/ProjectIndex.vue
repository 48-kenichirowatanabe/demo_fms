<template>
    <div class="main__container">
        <div class="main__container__wrapper">
            <!--main__container__wrapperに記述していく-->
            <div class="top-container">
                <h1 class="top-container__title">プロジェクト</h1>
                <div>
                    <p class="control has-icons-left">
                        <input class="search-project input" type="text" placeholder="Search project">
                        <span class="icon is-small is-left">
                        <i class="fas fa-search"></i>
                        </span>
                    </p>
                </div>
                <div class="control">
                    <button class="button btn"><router-link to="project/create">プロジェクト作成</router-link></button>
                </div>
            </div>

            <div class="project-container">
                <h2 class="project-container__item__title">Project</h2>
                <div class="project-container__item">
                    <ul class="project-container__item__list">
                        <li>プロジェクト</li>
                        <li>担当者<i class="arrow fas fa-angle-down"></i></li>
                        <li>パートナー<i class="arrow fas fa-angle-down"></i></li>
                        <li>タスク</li>
                        <li>期限<i class="arrow fas fa-angle-down"></i></li>
                        <li>予算</li>
                        <li>請求額</li>
                    </ul>
                </div>

                <div class="project-container__content">
                    <ul v-for="( project , index ) in this.projects" :key="project.id"  v-show="index < displayNumber" class="project-container__content__list" >
                        <li><router-link to="project/detail">{{ project.projectName }}</router-link></li>
                        <li>{{ project.name }}</li>
                        <!-- アイコン画像かイニシャルアイコンを入れる予定 -->
                        <li>{{ project.partner }}</li>
                        <li>{{ project.taskCount }}件</li>
                        <li>{{ project.period }}</li>
                        <li>¥{{ project.budget}}</li>
                        <li>¥{{ project.amountBilled }}</li>
                    </ul>
                </div>

                <div class="project-container__content__showmore">
                    <p class="project-container__content__showmore__btn" @click="showMoreTask(4)">Show More</p>
                </div>
            </div>                      
        </div>
    </div>
</template>

<script>
import { mapActions } from 'vuex';
import { mapGetters } from 'vuex';

export default {
    data(){
        return{
            displayNumber : 4
        }
    },
    methods: {
      ...mapActions({
        fetchProjectData:'fetchProjectData'
      }),
        showMoreTask(n) {
            return this.displayNumber += n;
        }
    },
    created(){
      this.fetchProjectData();
    },
    computed: {
      ...mapGetters({
        projects:'projects'
      })
    }
}
</script>

<style lang="scss" scoped>
    .main__container {
        &__wrapper {
            width:80%;
            font-size:14px;
            background-color: #F0F0F7;
            padding:40px;
            .top-container{
                display:flex;
                justify-content: space-between;
                &__title{
                    font-size:24px;
                }
                .search-project{
                    width:640px;
                }
                .btn{
                    background-color: #43425D;
                    font-weight: bold;
                    border-radius:18px;
                    a{
                        color:#fff;
                    }
                }
                .btn:hover{
                    opacity: 0.8;
                }
            }
            
            .project-container{
                margin-top:32px;
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
    }
</style>