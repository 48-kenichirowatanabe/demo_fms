<template>
    <div class="sidebar__container">
        <div class="sidebar__container__wrapper">
            <aside class="menu menu__container">
                <div class="menu__container--label">
                    <div class="menu-label">
                        fms
                    </div>
                </div>
                <ul class="menu-list menu menu__container__menu-list">
                    <li><router-link to="#"><i class="fas fa-home"></i>Home</router-link></li>
                    <li><router-link to="/"><i class="fas fa-chart-bar"></i>Dashboard</router-link></li>
                    <li><router-link to="/project"><i class="fas fa-envelope"></i>プロジェクト</router-link></li>
                    <li><router-link to="/task"><i class="fas fa-tasks"></i>タスク</router-link></li>
                    <li><router-link to="/document"><i class="fas fa-newspaper"></i>書類</router-link></li>
                    <li><router-link to="#"><i class="fas fa-user-circle"></i>パートナー</router-link></li>
                    <li><router-link to="#"><i class="fas fa-calendar-alt"></i>Calendar</router-link></li>
                    <li><router-link to="#"><i class="fas fa-question"></i>Heip Center</router-link></li>
                    <li><router-link to="#"><i class="fas fa-cog"></i>設定</router-link></li>
                </ul>
            </aside>
        </div>
    </div>
</template>

<script></script>

<style lang="scss" scoped>
    .sidebar__container {
        position: fixed;
        width: 20%;
        height: 100%;
        // padding: 8px;
        background-color: #43425D;

        &__wrapper {
            // color: white;
            // opacity: 0.5;
            .menu__container {
                &--label {
                    display: flex;
                    align-items: center;
                    height: 56px;
                    margin-bottom: 8px;
                    border-bottom: 1px solid #4d4c4c;
                }
                &__menu-list a{
                    color: #ffffff;
                    padding: 24px;
                }
                &__menu-list a:hover {
                    background-color: #252433;
                    border-left: 5px solid #A3A0FB;
                }
                &__menu-list i {
                    margin-right: 16px;
                }
            }
        }
    }
</style>
