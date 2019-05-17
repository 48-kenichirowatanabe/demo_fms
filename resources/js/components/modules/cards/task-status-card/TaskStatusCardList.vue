<template>
    <!-- ステータス表示部分 -->
    <div class="content">
        <!-- {{ number }} -->
        <div v-for="(n, index) in state" :key="index">
            <!-- ステータス各部分 -->
            <task-status-card
                :number="n.number"
                :name="n.name"
            ></task-status-card>
        </div>
    </div>
</template>

<script>
import TaskStatusCard from './TaskStatusCard';

export default {
    components: {
        TaskStatusCard
    },
    props: {
        state: {
            type: Array,
            default: () => []
        },
        stateName: {
            type: String,
        },
    }
}
</script>

<style lang="scss" scoped>
// ステータス表示部分
        .content {
            height: 120px;
            display: flex;
            padding: 16px;
            justify-content: space-between;
        }
</style>

