<template>
    <table class="task-container__wrapper__table-wrapper__table">
        <!-- タイトルヘッダー部分 -->
        <tr class="task-container__wrapper__table-wrapper__table__headerrow">
            <th class="task-container__wrapper__table-wrapper__table__headerrow__tableheader">タスク</th>
            <th class="task-container__wrapper__table-wrapper__table__headerrow__tableheader">プロジェクト<i class="task-container__table__headerrow__tableheader__arrow fas fa-angle-down"></i></th>
            <th class="task-container__wrapper__table-wrapper__table__headerrow__tableheader">パートナー</th>
            <th class="task-container__wrapper__table-wrapper__table__headerrow__tableheader">期限</th>
            <th class="task-container__wrapper__table-wrapper__table__headerrow__tableheader">ステータス<i class="task-container__table__headerrow__tableheader__arrow fas fa-angle-down"></i></th>
            <th class="task-container__wrapper__table-wrapper__table__headerrow__tableheader">請求額</th>
        </tr>
        <!-- テーブルデータ部分 -->
        <!-- <tr v-for="n in 5" :key="n" class="task-container__wrapper__table-wrapper__table__datarow"> -->
        <tr v-for="(n, index) in task" :key="index" class="task-container__wrapper__table-wrapper__table__datarow">
            <td class="task-container__wrapper__table-wrapper__table__datarow__tabledata"><router-link to="task/detail">{{ n.task }}</router-link></td>
            <td class="task-container__wrapper__table-wrapper__table__datarow__tabledata">{{ n.project }}</td>
            <td class="task-container__wrapper__table-wrapper__table__datarow__tabledata">{{ n.partner }}</td>
            <td class="task-container__wrapper__table-wrapper__table__datarow__tabledata">{{ n.deadlineDate }}</td>
            <td class="task-container__wrapper__table-wrapper__table__datarow__tabledata">
                <div class="task-container__wrapper__table-wrapper__table__datarow__tabledata__statusaction">
                    <div id ="state" class="task-container__wrapper__table-wrapper__table__datarow__tabledata__statusaction__status">{{ n.status }}</div>
                </div>
            </td>
            <td class="task-container__wrapper__table-wrapper__table__datarow__tabledata">{{ n.price }}</td>
        </tr>
    </table>
</template>

<script>
export default{
    props: {
        task: {
            type: Array,
            default: () => []
        },
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
    .task-container__wrapper__table-wrapper__table {
        width: 100%;
        margin: auto;
        &__headerrow {
            background-color: #F5F6FA;
            font-size: 12px;
            height: 48px;
            &__tableheader {
                vertical-align: middle;
                text-align: center;
                color: #A3A6B4;
                &__arrow {
                    margin: 0 8px;
                }
                &__checkboxarea {
                    width: 120px;
                    text-align: center;
                    &__checkbox {
                    }
                }
            }
        }
        &__datarow {
            font-size: 12px;
            height: 80px;
            border-bottom: 1px solid #F1F1F3;
            &__tabledata {
                vertical-align: middle;
                text-align: center;
                color: #4D4F5C;                
                &__statusaction {
                    &__status {
                        height: 40px;
                        width: 120px;
                        border-radius: 25px;
                        margin: auto;
                        padding: 11px 0;
                        font-weight: bold;
                    }
                }
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
</style>
