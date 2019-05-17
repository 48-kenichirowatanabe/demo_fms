<template>
    <div class="task-container">
        <div class="task-container__item">
            <h2 class="task-container__item__title">Task</h2>
            <ul class="task-container__item__list">
                <li>プロジェクト</li>
                <li>タスク</li>
                <li>パートナー<i class="arrow fas fa-angle-down"></i></li>
                <li>ステータス<i class="arrow fas fa-angle-down"></i></li>
                <li>請求額</li>
            </ul>
        </div>

        <div class="task-container__content">
            <ul v-for="(project_task , index) in this.project_tasks" :key="index" v-show="index < task_displayNumber" class="task-container__content__list">
                <li>{{ project_task.task_project }}</li>
                <li>{{ project_task.task_task }}</li>
                <li>{{ project_task.task_partner }}</li>
                <li id="state" class="task-container__content__list__status">{{ project_task.task_status }}</li>
                <li>¥{{ project_task.task_billingAmount }}</li>
            </ul> 
        </div>

        <div class="task-container__content__showmore">
            <p class="task-container__content__showmore__btn" @click="ShowMoreTask(2)" >Show More</p>
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex';
import { mapActions } from 'vuex';

export default {
    data(){
        return{
            task_displayNumber: 2,
        }
    },
    methods: {
        ...mapActions({
            fetchProjectTaskData:'fetchProjectTaskData',
        }),
        ShowMoreTask(n) {
            return this.task_displayNumber += n;
        },
    },
    computed: {
      ...mapGetters({
        project_tasks:'project_tasks',
      })
    },
    created(){
        this.fetchProjectTaskData();
    },
    mounted(){
        const state = document.querySelectorAll('#state');
        state.forEach(function(e){
            if(e.innerHTML === '完了'){
                e.classList.add('complete');
            }else if(e.innerHTML === '修正中'){
                e.classList.add('repair');
            }else if(e.innerHTML === '依頼中'){
                e.classList.add('request');
            }else if(e.innerHTML === '作業中'){
                e.classList.add('doing');
            }
        });
    }
}
</script>

<style lang="scss" scoped>
.task-container{
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
            &__status{
                border-radius: 18px;
                padding:4px 0;
                font-weight: bold;
            }
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

    // ステータス色分け
    .complete{
        background-color: #A9F5D0;
    }
    .repair{
        background-color: #F8E0F7;
    }
    .request{
        background-color: #F2F5A9;
    }
    .doing{
        background-color: #F5D0A9;
    }
}
</style>
