<template>
    <div>
        <!-- 書類 -->
        <div class="main-container">
            <document-table
                :document = "document"
            ></document-table>
        </div>

        <!-- 請求書 -->
        <div class="main-container">
            <invoice-table
                :invoice = "invoice"
            ></invoice-table>
        </div>
        
        <!-- 発注書 -->
        <div class="main-container">
            <purchase-order-table
                :purchase_order = "purchase_order"
            ></purchase-order-table>
        </div>

        <!-- 機密保持契約書 -->
        <div class="main-container">
            <confidentiality-agreement-table
                :confidentiality_agreement = "confidentiality_agreement"
            ></confidentiality-agreement-table> 
        </div>
    </div>
</template>

<script>
    import DocumentTable from './DocumentTable'
    import InvoiceTable from './InvoiceTable'
    import PurchaseOrderTable from './PurchaseOrderTable'
    import ConfidentialityAgreementTable from './ConfidentialityAgreementTable'

export default {
    components: {
        DocumentTable,
        InvoiceTable,
        PurchaseOrderTable,
        ConfidentialityAgreementTable
    },

    props: {
        document:{
            type:Object,
        },
        invoice:{
            type:Object,
        },
        purchase_order:{
            type:Object,
        },
        confidentiality_agreement:{
            type:Object,
        },
    },
}
</script>


<style lang="scss" scoped>
    // 共通部分
    .page-title-container {
        padding: 24px 40px;
        &__page-title {
            font-size: 16px;
        }
    }
    .item-name-wrapper {
        width: 100%;
        padding: 16px 0;
        &__item-name {
            font-size: 14px;
            color: #43425D;
        }
    }

    // main-container__wrapper__table-container__wrapper
    .main-container {
        margin-bottom: 24px;
        &__wrapper {
            padding: 0 16px;
            background-color: #ffffff;
        }
    }
    .invoice-table {
        height: 120px;
        width: 100%;
        table-layout: fixed;
        margin-bottom: 16px;
        &__head-row {
            height: 40px;
            &__table-header {
                background-color: #F5F6FA;
                text-align: center;
                line-height: 40px;
            }
        }
        &__data-row {
            height: 80px;
            border-bottom: 1px solid #F1F1F3;
            &__table-data {
                // display: flex;
                vertical-align: middle;
                text-align: center;
                &__create-container {
                    padding: 20px 0;
                    &__create {
                        height: 24px;
                        width: 56px;
                        border-radius: 25px;
                        background-color: #43425D;
                        color: #ffffff;
                        margin: auto;
                    }
                }
            }
        }
    }
    .more-container {
        &__wrapper {
            text-align: center;
            &__showmore {
                color: #3B86FF
            }
        }
    }
    
</style>
