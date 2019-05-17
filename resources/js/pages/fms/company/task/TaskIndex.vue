<template>
    <div class="main__container">
        <div class="main__container__wrapper">
            <!-- page header -->
            <page-header
                :page-title="pageTitle"
                :link-name="linkName"
            ></page-header>
            <!-- ステータス -->
            <div class="status-container">
                <div class="status-container__wrapper">
                    <!-- タイトル -->
                    <div class="item-name-wrapper">
                        <div class="item-name-wrapper__title-name">ステータス</div>
                    </div>
                    <task-status-card-list
                        :state="task.status"
                    ></task-status-card-list>  
                </div>
            </div>
            <!-- Task -->
            <div class="task-container">
                <div class="task-container__wrapper">
                    <!-- タイトル -->
                    <div class="item-name-wrapper">
                        <div class="item-name-wrapper__item-name">Task</div>
                    </div>
                    <div class="task-container__wrapper__table-wrapper">
                        <task-status-table
                            :task="task.task"
                        ></task-status-table>
                        <!-- Show More部分 -->
                        <div class="task-container__wrapper__table-wrapper__more">
                            <div class="task-container__wrapper__table-wrapper__more__area">
                                <a class="task-container__wrapper__table-wrapper__more__area__showmore" href="#">Show More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import PageHeader from '../../../../components/modules/headers/PageHeader';
    import TaskStatusCardList from '../../../../components/modules/cards/task-status-card/TaskStatusCardList';
    import TaskStatusTable from '../../../../components/modules/tables/task-status-table/TaskStatusTable';
    import { mapGetters, mapActions } from "vuex";
    export default {
        components: {
            PageHeader,
            TaskStatusCardList,
            TaskStatusTable
        },        
        data(){
            return {
                pageTitle: "タスク",
                projectName: "プロジェクトの名前",
                partnerName: "パートナー名",
                date: "2000年1月1日",
                statusName: "ステータス名",
                price: "¥100",
                Number: [],
                linkName: "task"
            }
        },
        computed: {
            ...mapGetters({
                task: 'task'
            })
        },
        methods: {
            ...mapActions({
                fetchTaskState: 'fetchTaskState'
            })
        },
        created(){
            this.fetchTaskState();
        }
    }
</script>

<style lang="scss" scoped>

.main__container {
    width: 80%;
    background-color: #F0F0F7;
    font-size: 14px;
    &__wrapper {
        // padding: 8px;
        padding:40px 40px;
    }
}

// 共通部分
.title-name {
    font-size: 16px;
}
.item-name-wrapper {
    padding: 16px 0 16px 16px;
    &__item-name {
        font-size: 14px;
        color: #43425D;
    }
}


// ステータス
.status-container {
    margin-bottom: 24px;
    &__wrapper {
        background-color: #ffffff;
        // ステータス表示部分
    } 
}
// タスク
.task-container {
    &__wrapper {
        background-color: #ffffff;
        margin-bottom: 24px;
        &__table-wrapper {
            padding: 16px;
            &__more {
                &__area {
                    text-align: center;
                    padding: 56px 0 40px 0;
                    &__showmore {
                    }
                }
            } 
        }

    } 
}

    input[type=checkbox] {
  display: none;
}
.control {
    text-align: center;
}
.checkbox {
  box-sizing: border-box;
  -webkit-transition: background-color 0.2s linear;
  transition: background-color 0.2s linear;
  position: relative;
  display: inline-block;
  margin: 4px 10px;
  padding: 12px 12px 12px 42px;
  border-radius: 8px;
//   background-color: #f6f7f8;
  vertical-align: middle;
  cursor: pointer;
}
.checkbox:hover {
//   background-color: #e2edd7;
}
.checkbox:hover:after {
//   border-color: #53b300;
}
.checkbox:after {
  -webkit-transition: border-color 0.2s linear;
  transition: border-color 0.2s linear;
  position: absolute;
  top: 50%;
  left: 15px;
  display: block;
  margin-top: -10px;
  width: 16px;
  height: 16px;
  border: 2px solid #bbb;
  border-radius: 6px;
  content: '';
}
.checkbox:before {
  -webkit-transition: opacity 0.2s linear;
  transition: opacity 0.2s linear;
  position: absolute;
  top: 50%;
  left: 21px;
  display: block;
  margin-top: -7px;
  width: 5px;
  height: 9px;
  border-right: 3px solid #53b300;
  border-bottom: 3px solid #53b300;
  content: '';
  opacity: 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
input[type=checkbox]:checked + .checkbox:before {
  opacity: 1;
}
</style>
