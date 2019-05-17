<template>
    <div class="parts-container">
        <div class="parts-container__wrapper"> 
            <!-- ステータス表示数部分 -->
            <div class="parts-container__wrapper__numberdisplayarea">
                <div class="parts-container__wrapper__numberdisplayarea__numberdisplay">
                    <div class="parts-container__wrapper__numberdisplayarea__numberdisplay__number">
                    {{ number }}
                    </div>
                </div>
            </div>
            <!-- ステータス名表示 -->
            <div class="parts-container__wrapper__textdisplayarea">
                <div class="parts-container__wrapper__textdisplayarea__textdisplay">
                    <div class="parts-container__wrapper__textdisplayarea__textdisplay__text">
                        {{ name }}
                    </div>
                </div>
            </div>
        </div>
        <!-- 次へ -->
        <div  class="next">
        </div>
    </div>
</template>

<script>
export default {
    props: {
        number: {
            type: Number,
        },
        name: {
            type: String,
        },
    }
}
</script>


<style lang="scss" scoped>
.parts-container {
    height: 100%;
    display: flex;
    &__wrapper {
        &__numberdisplayarea {
        height: 60px;
        width: 60px;
        margin-bottom: 8px;
            &__numberdisplay {
                height: 60px;
                width: 60px;
                border-radius: 50%;
                background-color: rgba(59,134,255,0.25);
                padding: 20px 0;
                text-align: center;
                &__number {
                font-size: 14px;
                color: #3b86ff;
                }
            }                  
        }
        &__textdisplayarea {
            height: 60px;
            width: 60px;
            &__textdisplay {
                text-align: center;
                &__text {
                    font-size: 12px;
                }
            }
        }
    }
    // parts-container__wrapper__textdisplayarea__textdisplay__text
    // ステータス名表示部分
      
}
.next {
    height: 30px;
    width: 16px;
    border-bottom: 2px solid #E9E9F0;
}  

</style>

