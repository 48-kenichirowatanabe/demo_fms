<template>
    <div class="top">
        <div class="top__container">
            <top-header></top-header>
            <side-bar></side-bar>
        </div>
        <div class="main__container">
            <div class="main__container__wrapper">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
    import TopHeader from './components/common/header/TopHeader';
    import SideBar from './components/common/sidebar/TheSideBar';

    export default {
        components: {
            TopHeader,
            SideBar
        }
    }
</script>

<style lang="scss">
    .top {
        .top__container {
            position: absolute;
        }
        .main__container {
            position: relative;
            top: 30px;
            left: 10%;
            &__wrapper {
                // padding: 8px;
                // margin: 8px;
            }
        }
    }
</style>
