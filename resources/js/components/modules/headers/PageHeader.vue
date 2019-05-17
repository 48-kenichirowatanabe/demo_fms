<template>
    <!-- トップ部分 -->
    <div class="top-container">
        <div class="page-title-container">
            <div class="page-title-container__page-title">{{ pageTitle }}</div>
        </div>
        <div class="field top-container__field">
            <p class="control has-icons-left top-container__field__control">
                <input class="input top-container__field__control__input" placeholder="Search Name...">
                <span class="icon is-small is-left">
                    <i class="fas fa-search"></i>
                </span>
            </p>
        </div>
        <!-- <div class="top-container__searcharea field">
            <input class="input font-awesome" type="text" placeholder="Search Name…">
        </div> -->
        <div class="top-container__createarea">
            <div class="top-container__createarea__buttonarea control">
                <button class="top-container__createarea__buttonarea__button button"><router-link to="task/create">{{ pageTitle }}作成</router-link></button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        pageTitle: {
            type: String,
        },
    }
}
</script>


<style lang="scss" scoped>

// 共通部分
.page-title-container {
    display: flex;
    justify-content: center;
    align-items: center;
    &__page-title {
        font-size: 24px;
    }
}
.top-container {
    margin-bottom: 32px;
    display: flex;
    &__titlearea {
        width: 160px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    &__field{
        widows: 100%;
        margin: auto;
        &__control {
            width: 640px;
        }
    }
    &__createarea {
        width: 120px;
        display: flex;
        justify-content: center;
        align-items: center;
        &__buttonarea{
            margin-right:24px;
            &__button{
                width:140px;
                border-radius: 18px;
                font-size:16px;
                font-weight:bold;
                background: #43425D;
                a{
                    color:#fff;
                }
            }
            &__button:hover{
                opacity:0.8;
            }
        }
    }
}
</style>


