<template>
    <div class="main-container__wrapper">
        <div class="item-name-wrapper">
            <div class="item-name-wrapper__item-name">
                {{ purchase_order.title }}
            </div>
        </div>
        <div class="main-container__wrapper__table-container">
            <div class="main-container__wrapper__table-container__wrapper">
                <table class="invoice-table">
                    <tr class="invoice-table__head-row">
                        <th v-for="(item, index) in purchase_order.items" :key="index" class="invoice-table__head-row__table-header">{{ item }}</th>
                    </tr>

                    <tr v-for="(content, index) in purchase_order.contents" :key="index" class="invoice-table__data-row">
                        <td class="invoice-table__data-row__table-data">{{ content.check }}</td>
                        <td class="invoice-table__data-row__table-data">{{ content.status }}</td>
                        <td class="invoice-table__data-row__table-data">{{ content.item }}</td>
                        <td class="invoice-table__data-row__table-data">{{ content.makeDate }}</td>
                        <td class="invoice-table__data-row__table-data">{{ content.charge }}</td>
                        <td class="invoice-table__data-row__table-data">{{ content.price }}</td>
                        <td class="invoice-table__data-row__table-data">{{ content.pdf }}</td>
                        <td class="invoice-table__data-row__table-data">
                            <div class="invoice-table__data-row__table-data__create-container">
                                <div class="invoice-table__data-row__table-data__create-container__create">
                                    <router-link to="document/order/create">{{ content.creating }}</router-link>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
                <!-- Show More部分 -->
                <div class="more-container">
                    <div class="more-container__wrapper">
                        <a class="more-container__wrapper__showmore" href="#">Show More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        purchase_order:{
            type:Object,
        },
    }
}
</script>

<style lang="scss" scoped>
    .main-container {
        &__wrapper {
            &__table-container {
                padding-bottom: 24px;
            }
        }
    }
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
                        margin: auto;
                        a{
                            color: #ffffff;
                            font-weight: bold;
                        }
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

