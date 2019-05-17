<template>
    <div class="main__container">
        <div class="main__container__wrapper">
        <!--main__container__wrapperに記述していく-->
        <project-detail-table></project-detail-table>
        <project-detail-task-table></project-detail-task-table>
        <project-detail-activity-log-table></project-detail-activity-log-table>
        </div>    
    </div>  
</template>

<script>
import ProjectDetailTable from '../../../components/modules/tables/project-status-table/ProjectDetailTable'
import ProjectDetailTaskTable from '../../../components/modules/tables/project-status-table/ProjectDetailTaskTable'
import ProjectDetailActivityLogTable from '../../../components/modules/tables/project-status-table/ProjectDetailActivityLogTable'

export default {
    components: {
        ProjectDetailTable,
        ProjectDetailTaskTable,
        ProjectDetailActivityLogTable
    },
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
        }
    }
</style>