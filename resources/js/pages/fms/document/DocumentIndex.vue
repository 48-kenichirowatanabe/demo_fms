<template>
    <div class="main__container">
        <div class="main__container__wrapper">
            <!--main__container__wrapperに記述していく-->
            <div class="page-title-container">
                <div class="page-title-container__page-title">タスク作成</div>
            </div>
            <document-status-card-list></document-status-card-list>
            <document-status-table-list
                :document = "document"
                :invoice = "invoice"
                :purchase_order = "purchase_order"
                :confidentiality_agreement = "confidentiality_agreement"
            ></document-status-table-list>
        </div>
    </div>
</template>

<script>
    import DocumentStatusCardList from '../../../components/modules/cards/document-status-card/DocumentStatusCardList';
    import DocumentStatusTableList from '../../../components/modules/tables/document-status-table/DocumentStatusTableList';
export default {
    components: {
        DocumentStatusCardList,
        DocumentStatusTableList
    },
    data(){
        return{
            document: {
                title:'書類',
                items: {
                    status:"",
                    name:"書類",
                    notDeal:"未対応",
                    asking:"他依頼中",
                    askingToPartner:"パートナー依頼中",
                    completed:"完了",
                },
                contents: [
                    {
                        status:"",
                        name:"請求書",
                        notDeal:"10件",
                        asking:"5件",
                        askingToPartner:"6件",
                        completed:"15件",
                    },
                    {
                        status:"",
                        name:"発注書",
                        notDeal:"10件",
                        asking:"5件",
                        askingToPartner:"6件",
                        completed:"15件",
                    },
                    {
                        status:"",
                        name:"機密保持契約",
                        notDeal:"10件",
                        asking:"5件",
                        askingToPartner:"6件",
                        completed:"15件",
                    },
                ]
            },
            invoice: {
                title:"請求書",
                items: {
                    check:"",
                    status:"ステータス",
                    task:"タスク",
                    billingDate:"請求日",
                    charge:"担当者",
                    price:"金額",
                    pdf:"PDF",
                    creating:"作成",
                },
                contents: [
                    {
                        check:"",
                        status:"請求書",
                        task:"メディアライティング",
                        billingDate:"2019年4月30日",
                        charge:"永瀬達也",
                        price:"32,400円",
                        pdf:"◯",
                        creating:"作成",
                    },
                    {
                        check:"",
                        status:"請求書",
                        task:"メディアライティング",
                        billingDate:"2019年4月30日",
                        charge:"永瀬達也",
                        price:"32,400円",
                        pdf:"◯",
                        creating:"作成",
                    },
                ]
            },
            purchase_order: {
                title:"発注書",
                items: {
                    check:"",
                    status:"ステータス",
                    item:"項目",
                    makeDate:"作成日",
                    charge:"担当者",
                    price:"金額",
                    pdf:"PDF",
                    creating:"作成",
                },
                contents: [
                    {
                        check:"",
                        status:"請求書",
                        item:"メディアライティング",
                        makeDate:"2019年4月30日",
                        charge:"永瀬達也",
                        price:"32,400円",
                        pdf:"◯",
                        creating:"作成",
                    },
                    {
                        check:"",
                        status:"請求書",
                        item:"メディアライティング",
                        makeDate:"2019年4月30日",
                        charge:"永瀬達也",
                        price:"32,400円",
                        pdf:"◯",
                        creating:"作成",
                    },
                ]
            },
            confidentiality_agreement: {
                title:"機密保持契約書",
                items: {
                    check:"",
                    status:"ステータス",
                    item:"項目",
                    makeDate:"作成日",
                    charge:"担当者",
                    pdf:"PDF",
                    creating:"作成",
                },
                contents: [
                    {
                        check:"",
                        status:"請求書",
                        item:"メディアライティング",
                        makeDate:"2019年4月30日",
                        charge:"永瀬達也",
                        pdf:"◯",
                        creating:"作成",
                    },
                    {
                        check:"",
                        status:"請求書",
                        item:"メディアライティング",
                        makeDate:"2019年4月30日",
                        charge:"永瀬達也",
                        pdf:"◯",
                        creating:"作成",
                    },
                ]
            },
            
        }
    }
}
</script>


<style lang="scss" scoped>
    .main__container {
    background-color: #F0F0F7;
    font-size: 14px;
        &__wrapper {
            width:80%;
            font-size:14px;
            background-color: #F0F0F7;
            padding:40px;
            .page-title-container{
                margin-bottom:24px;
                &__page-title{
                    font-size:24px;
                }
            }
        }
    }
</style>
