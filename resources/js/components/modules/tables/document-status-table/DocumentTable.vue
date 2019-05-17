<template>
    <div class="main-container__wrapper">
        <div class="item-name-wrapper">
            <div class="item-name-wrapper__item-name">
                {{ document.title }}
            </div>
        </div>
        <div class="main-container__wrapper__table-container">
            <div class="main-container__wrapper__table-container__wrapper">
                <table class="document-table">
                    <tr class="document-table__head-row">
                        <th v-for="(item, index) in document.items" :key="index" class="document-table__head-row__table-header">{{ item }}</th>
                    </tr>

                    <tr v-for="(content, index) in document.contents" :key="index" class="document-table__data-row">
                        <td class="document-table__data-row__table-data">{{ content.status }}</td>
                        <td class="document-table__data-row__table-data">{{ content.name }}</td>
                        <td class="document-table__data-row__table-data">{{ content.notDeal }}</td>
                        <td class="document-table__data-row__table-data">{{ content.asking }}</td>
                        <td class="document-table__data-row__table-data">{{ content.askingToPartner }}</td>
                        <td class="document-table__data-row__table-data">{{ content.completed }}</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        document:{
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

    .document-table {
        height: 120px;
        width: 100%;
        table-layout: fixed;
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
                text-align: center;
                line-height: 80px;
                &__icon-container {
                    padding: 20px 0;
                    &__icon {
                        height: 40px;
                        width: 40px;
                        border-radius: 50%;
                        border: 1px solid #56D9FE;
                        margin: auto;
                    }
                }
            }
        }
    }

</style>

