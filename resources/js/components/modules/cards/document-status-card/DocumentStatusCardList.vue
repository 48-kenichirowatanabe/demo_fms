<template>
    <div class="head-container">
        <document-status-card
            :number="detail1.number"
            :notDeal="detail1.notDeal"
        ></document-status-card>
        <document-status-card
            :number="detail2.number"
            :notDeal="detail2.notDeal"
        ></document-status-card>
        <document-status-card
            :number="detail3.number"
            :notDeal="detail3.notDeal"
        ></document-status-card>
    </div>
</template>

<script>
import DocumentStatusCard from './DocumentStatusCard';
export default {
    components: {
        DocumentStatusCard
    },
    data(){
        return{
            detail1: {
                number: 0,
                notDeal: "テキスト1",
            },
            detail2: {
                number: 0,
                notDeal: "テキスト2",
            },
            detail3: {
                number: 0,
                notDeal: "テキスト3",
            }

        }
    }
}
</script>

<style>
    .head-container {
        margin-bottom: 24px;
        display:flex;
        justify-content: space-between;
    }
</style>

