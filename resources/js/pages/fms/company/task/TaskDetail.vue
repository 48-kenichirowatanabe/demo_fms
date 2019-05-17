<template>
    <div class="main__container">
        <div class="main__container__wrapper">
            <!-- header部分 -->
            <div class="header">
                <div class="header__wrapper">
                    <div class="header__wrapper__main">
                        <!-- ページタイトル エリア -->
                        <div class="page-title-container">
                            <div class="page-title-container__page-title">タスクだし</div>
                        </div>
                        <div class="header__wrapper__main__project-name">【ios化プロジェクト】</div>
                    </div>
                    <div class="header__wrapper__edited-date">タスク作成日：2019年2月1日</div>
                </div>
            </div>
            <!-- middle部分 -->
            <div class="middle">
                <div class="middle__main">
                    <div class="middle__main__wrapper">
                        <!-- テーブル -->
                        <div class="middle__main__wrapper__table-container">
                            <table class="middle__main__wrapper__table-container__table">
                                <tr class="middle__main__wrapper__table-container__table__table-row">
                                    <th class="middle__main__wrapper__table-container__table__table-row__table-header">ステータス</th>
                                    <th class="middle__main__wrapper__table-container__table__table-row__table-header">締め切り</th>
                                    <th class="middle__main__wrapper__table-container__table__table-row__table-header">検収日</th>
                                    <th class="middle__main__wrapper__table-container__table__table-row__table-header">提出日</th>
                                    <th class="middle__main__wrapper__table-container__table__table-row__table-header">納品形式</th>
                                </tr>
                                <tr class="middle__main__table-container__table__table-row">
                                    <td class="middle__main__wrapper__table-container__table__table-row__table-data">
                                        <div class="middle__main__wrapper__table-container__table__table-row__table-data__status-icon">
                                            依頼中
                                        </div>
                                    </td>
                                    <td class="middle__main__wrapper__table-container__table__table-row__table-data">2019年2月21日</td>
                                    <td class="middle__main__wrapper__table-container__table__table-row__table-data">2019年2月19日</td>
                                    <td class="middle__main__wrapper__table-container__table__table-row__table-data">2019年2月19日</td>
                                    <td class="middle__main__wrapper__table-container__table__table-row__table-data">aiデータ</td>
                                </tr>
                            </table>
                        </div>
                        <!-- タスク内容 -->
                        <div class="middle__main__wrapper__task-content">
                            <div class="middle__main__wrapper__task-content__wrapper">
                                <div class="item-name-wrapper">
                                    <div class="item-name-wrapper__item-name">
                                        タスク内容：
                                    </div>
                                </div>
                            </div>
                            <div class="middle__main__wrapper__task-content__textarea-wrapper">
                                <textarea class="textarea" placeholder="Placeholder"></textarea>
                            </div>
                            <div class="middle__main__wrapper__task-content__detail-container">
                                <div class="middle__main__wrapper__task-content__detail-container__item-name-wrapper">
                                    <div class="middle__main__wrapper__task-content__detail-container__item-name-wrappre__item-name">
                                        アクティビティログ
                                    </div>
                                </div>
                                <div class="middle__main__wrapper__task-content__detail-container__item">
                                    <div class="middle__main__wrapper__task-content__detail-container__item__icon"><img src="https://image.freepik.com/free-icon/no-translate-detected_318-37825.jpg" alt=""></div>
                                    <div class="middle__main__wrapper__task-content__detail-container__item__name">
                                        <div class="">2018年11月11日18:00</div>
                                        <div class="">永瀬 達也</div>
                                    </div>
                                    <div class="middle__main__wrapper__task-content__detail-container__item__comment">担当者へ依頼しました。</div>
                                </div>
                            </div>
                        </div>
                        <!-- タスクに関するコメント -->
                        <div class="middle__main__wrapper__task-comment">
                            <div class="middle__main__wrapper__task-comment__wrapper">
                                <div class="item-name-wrapper">
                                    <div class="item-name-wrapper__item-name">
                                        タスクに関するコメント：
                                    </div>
                                </div>
                                <div class="middle__main__wrapper__task-content__textarea-wrapper">
                                    <textarea class="textarea" placeholder="Placeholder"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- 資料 -->
                        <div class="middle__main__wrapper__document-container">
                            <div class="middle__main__wrapper__document-container__wrapper">
                                <div class="item-name-wrapper">
                                    <div class="item-name-wrapper__item-name">
                                        資料：
                                    </div>
                                </div>
                                <div class="middle__main__wrapper__document-container__wrapper__update-container">
                                    <div class="file has-name is-boxed">
                                        <label class="file-label">
                                            <input class="file-input" type="file" name="resume">
                                            <span class="file-cta">
                                            <span class="file-icon">
                                                <i class="fas fa-upload"></i>
                                            </span>
                                            <span class="file-label">
                                                Choose a file…
                                            </span>
                                            </span>
                                            <span class="file-name">
                                            <!-- Screen Shot 2017-07-29 at 15.54.25.png -->
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="middle__side">
                    <div class="middle__side__wrapper">
                        <div class="middle__side__wrapper__1">
                            <!-- 担当者 -->
                            <div class="middle__side__wrapper__1__input-container">
                                <div class="middle__side__wrapper__1__input-container__wrapper">
                                    <div class="item-name-wrapper">
                                        <div class="item-name-wrapper__item-name">
                                            担当者：
                                        </div>
                                    </div>
                                    <div class="middle__side__wrapper__1__input-container__wrapper__select select">
                                        <select>
                                            <option></option>
                                            <option>With options</option>
                                            <option>With options</option>
                                        </select> 
                                    </div>
                                    <div class="middle__side__wrapper__1__input-container__wrapper__btn-wrapper">
                                        <div class="middle__side__wrapper__1__input-container__wrapper__btn-wrapper__btn">追加</div>
                                    </div>
                                </div>
                            </div >
                            <!-- パートナー -->
                            <div class="middle__side__wrapper__1__input-container">
                                <div class="middle__side__wrapper__1__input-container__wrapper">
                                    <div class="item-name-wrapper">
                                        <div class="item-name-wrapper__item-name">
                                        パートナー：
                                        </div>
                                    </div>
                                    <div class="middle__side__wrapper__1__input-container__wrapper__select select">
                                        <select>
                                            <option></option>
                                            <option>With options</option>
                                            <option>With options</option>
                                        </select> 
                                    </div>
                                    <div class="middle__side__wrapper__1__input-container__wrapper__btn-wrapper">
                                        <div class="middle__side__wrapper__1__input-container__wrapper__btn-wrapper__btn">追加</div>
                                    </div>
                                </div>
                            </div >
                            <!-- パートナー契約内容 -->
                            <div class="middle__side__wrapper__1__input-container">
                                <div class="middle__side__wrapper__1__input-container__wrapper">
                                    <div class="item-name-wrapper">
                                        <div class="item-name-wrapper__item-name">
                                        パートナー契約内容：
                                        </div>
                                    </div>
                                    <div class="middle__side__wrapper__1__input-container__wrapper__detail-container">
                                        <div class="middle__side__wrapper__1__input-container__wrapper__detail-container__item-wrapper top">
                                            <div class="middle__side__wrapper__1__input-container__wrapper__detail-container__item-wrapper__item-name">報酬形式</div>
                                            <div class="middle__side__wrapper__1__input-container__wrapper__detail-container__item-wrapper__item-content">時間</div>
                                        </div>  
                                        <div class="middle__side__wrapper__1__input-container__wrapper__detail-container__item-wrapper">
                                            <div class="middle__side__wrapper__1__input-container__wrapper__detail-container__item-wrapper__item-name">発注額(税込)</div>
                                            <div class="middle__side__wrapper__1__input-container__wrapper__detail-container__item-wrapper__item-content">¥100,000</div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="middle__side__wrapper__1">
                            <!-- 担当者 -->
                            <div class="middle__side__wrapper__1__input-container">
                                <div class="middle__side__wrapper__1__input-container__wrapper">
                                    <div class="item-name-wrapper">
                                        <div class="item-name-wrapper__item-name">
                                            上長に承認を取る：
                                        </div>
                                    </div>
                                    <div class="middle__side__wrapper__1__input-container__wrapper__select select">
                                        <select>
                                            <option></option>
                                            <option>With options</option>
                                            <option>With options</option>
                                        </select> 
                                    </div>
                                    <div class="middle__side__wrapper__1__input-container__wrapper__btn-wrapper">
                                        <div class="middle__side__wrapper__1__input-container__wrapper__btn-wrapper__btn">承認</div>
                                    </div>
                                </div>
                            </div >
                            <!-- パートナー -->
                            <div class="middle__side__wrapper__1__input-container">
                                <div class="middle__side__wrapper__1__input-container__wrapper">
                                    <div class="item-name-wrapper">
                                        <div class="item-name-wrapper__item-name">
                                        パートナーに依頼を取る：
                                        </div>
                                    </div>
                                    <div class="middle__side__wrapper__1__input-container__wrapper__select select">
                                        <select>
                                            <option></option>
                                            <option>With options</option>
                                            <option>With options</option>
                                        </select> 
                                    </div>
                                    <div class="middle__side__wrapper__1__input-container__wrapper__btn-wrapper">
                                        <div class="middle__side__wrapper__1__input-container__wrapper__btn-wrapper__btn">承認</div>
                                    </div>
                                </div>
                            </div >
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="bottom__wrapper">
                    <div class="item-name-wrapper">
                        <div class="item-name-wrapper__item-name">
                            タスク内容：
                        </div>
                    </div>
                    <div class="bottom__wrapper__table-container">
                        <table class="bottom__wrapper__table-wrapper__table">
                            <!-- タイトルヘッダー部分 -->
                            <tr class="bottom__wrapper__table-wrapper__table__headerrow">
                                <th class="bottom__wrapper__table-wrapper__table__headerrow__tableheader"></th>
                                <th class="bottom__wrapper__table-wrapper__table__headerrow__tableheader">プロジェクト<i class="task-container__table__headerrow__tableheader__arrow fas fa-angle-down"></i></th>
                                <th class="bottom__wrapper__table-wrapper__table__headerrow__tableheader">担当者</th>
                                <th class="bottom__wrapper__table-wrapper__table__headerrow__tableheader">パートナー</th>
                                <th class="bottom__wrapper__table-wrapper__table__headerrow__tableheader">タスク</th>
                                <th class="bottom__wrapper__table-wrapper__table__headerrow__tableheader">期限</th>
                                <th class="bottom__wrapper__table-wrapper__table__headerrow__tableheader">予算</th>
                                <th class="bottom__wrapper__table-wrapper__table__headerrow__tableheader">請求額</th>
                            </tr>
                            <!-- テーブルデータ部分 -->
                            <tr class="bottom__wrapper__table-wrapper__table__datarow">
                                <td class="bottom__wrapper__table-wrapper__table__datarow__tabledata">
                                    <div class="field">
                                        <div class="control">
                                            <input type="checkbox" name="children" value="りえちゃん" id="checkbox01">
                                            <label for="checkbox01" class="checkbox"></label>
                                        </div>
                                    </div>
                                </td>
                                <td class="bottom__wrapper__table-wrapper__table__datarow__tabledata">ios化プロジェクト</td>
                                <td class="bottom__wrapper__table-wrapper__table__datarow__tabledata">永瀬 達也</td>
                                <td class="bottom__wrapper__table-wrapper__table__datarow__tabledata">M</td>
                                <td class="bottom__wrapper__table-wrapper__table__datarow__tabledata">2件</td>
                                <td class="bottom__wrapper__table-wrapper__table__datarow__tabledata">2019年12月1日11時</td>
                                <td class="bottom__wrapper__table-wrapper__table__datarow__tabledata">¥100,000</td>
                                <td class="bottom__wrapper__table-wrapper__table__datarow__tabledata">30,000</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    // mounted(){
    //     const state = document.querySelectorAll('#state');
    //     state.forEach(function(e){
    //         if(e.innerHTML === '完了'){
    //             e.classList.add('complete');
    //         }else if(e.innerHTML === '修正中'){
    //             e.classList.add('repair');
    //         }else if(e.innerHTML === '依頼中'){
    //             e.classList.add('request');
    //         }else if(e.innerHTML === '作業中'){
    //             e.classList.add('doing');
    //         }
    //     });
    // }
}
</script>


<style lang="scss" scoped>

    .main__container {
        background-color: #F0F0F7;
        font-size: 14px;
        &__wrapper {
            padding: 40px;
            width:80%;
        }
    }
    
    // 共通部分
    .page-title-container {
        &__page-title {
            font-size: 24px;
        }
    }
    .item-name-wrapper {
        width: 100%;
        margin-bottom: 16px;
        &__item-name {
            font-size: 14px;
            color: #43425D;
        }
    }

    // header部分
    .header {
        &__wrapper {
            margin-bottom:32px;
            &__main {
                display: flex;
                &__project-name {
                    font-size:16px;
                    margin:12px 0 0 4px;
                }
            }
            &__edited-date {
                margin-top:8px;
            }
        }
    }
    // middle部分
    .middle {
        margin-bottom: 24px;
        display: flex;
        &__main {
            width: 70%;
            background-color : #ffffff;
            padding: 16px 24px;
            margin-right: 24px;
            &__wrapper {
                // テーブル
                &__table-container {
                    &__table {
                        width: 100%;
                        margin: auto;
                        border-bottom: 1px solid #F1F1F3;
                        &__table-row {
                            &__table-header {
                                background-color: #F5F6FA;
                                padding: 16px 0;
                                text-align: center;
                                font-size:12px;
                                color: #A3A6B4;
                            }
                            &__table-data {
                                padding: 16px 0;
                                text-align: center;
                                vertical-align: middle;
                                &__status-icon {
                                    padding:8px 16px;;
                                    width: 80px;
                                    border-radius: 25px;
                                    background-color: #F2F5A9;
                                    margin: auto;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    font-size:12px;
                                    font-weight: bold;
                                }
                            }
                        }
                    }
                }
                // タスク内容
                &__task-content {
                    margin-top:16px;
                    border-bottom: 1px solid #F1F1F3;
                    &__textarea-wrapper {
                    }
                    &__textarea-wrapper textarea {
                        border-color: #3B86FF;
                        caret-color: #3B86FF;
                        resize: none;
                    }
                    &__detail-container {
                        padding: 16px 0;
                        &__item-name-wrapper {
                            &__item-name {
                            }
                        }
                        &__item {
                            margin-top: 8px;
                            display: flex;
                            align-items: center;
                            &__icon {
                                height: 40px;
                                width: 40px;
                                margin-right: 16px;
                                img{
                                    border-radius: 50%;
                                    overflow: hidden;
                                    position: relative;
                                }
                            }
                            &__name {
                                // display: flex;
                                // justify-content: center;
                                // align-items: center;
                            }
                            &__comment {
                                margin-left: 80px;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }
                        }
                    }
                }
                // タスクに関するコメント
                &__task-comment {
                    margin-top: 16px;
                    &__wrapper {

                    }
                } 
                // 資料
                &__document-container {
                    margin-top: 16px;
                    &__wrapper {
                        &__update-container {
                            padding: 0 40px;
                        }
                    }
                } 
            }     
        }
        &__side {
            width: 30%;
            &__wrapper {
                width: 100%;
                &__1 {
                    background-color: #ffffff;
                    padding: 16px ;
                    margin-bottom:16px;
                    &__input-container {
                        // padding: 16px 16px 32px;
                        // margin-bottom: 24px;
                        &__wrapper {
                            &__select {
                                width: 100%;
                                margin-bottom: 16px;
                            }
                            &__select select {
                                width: 100%;
                                border-color: #3B86FF;
                            }
                            &__btn-wrapper {
                                &__btn {
                                    height: 24px;
                                    width: 56px;
                                    border-radius: 25px;
                                    background-color: #43425D;
                                    color: #ffffff;
                                    font-weight: bold;
                                    display: flex;
                                    justify-content: center; /*左右中央揃え*/
                                    align-items: center;     /*上下中央揃え*/
                                    margin-left: auto;
                                }
                            }
                            &__detail-container {
                                padding: 8px 40px 0 24px;
                                &__item-wrapper {
                                    border-bottom: 1px solid #F1F1F3;
                                    display: flex;
                                    &__item-name {
                                    }
                                    &__item-content {
                                        margin-left: auto;
                                    }
                                }
                                .top{
                                    margin-bottom: 8px;
                                }
                            }
                        }
                    }
                    &__select-area {
                        width: 100%;

                    }
                    &__btn-wrapper {
                        &__btn {
                            height: 24px;
                            width: 56px;
                            border-radius: 25%;
                            background-color: #43425D;
                        }
                    }
                }
            }
        }
            
    }
    .bottom {
        // height: 129px;
        margin-bottom: 24px;
        &__wrapper {

            // bottom__wrapper__table-wrapper__table

            padding: 16px;
            background-color: #ffffff;
            &__table-wrapper {
                width: 100%;
                margin: auto;
                margin-bottom: 24px;
                &__table {
                    width: 100%;
                    &__headerrow {
                        background-color: #F5F6FA;
                        font-size: 12px;
                        height: 48px;
                        &__tableheader {
                            padding: 8px 0;
                            vertical-align: middle;
                            text-align: center;
                            color: #A3A6B4;
                            &__arrow {
                                margin: 0 8px;
                            }
                            &__checkboxarea {
                                width: 120px;
                                text-align: center;
                                &__checkbox {

                                }
                            }
                        }
                    }
                    &__datarow {
                        font-size: 12px;
                        height: 80px;
                        padding: 8px 0;
                        border-bottom: 1px solid #F1F1F3;
                        &__tabledata {
                            vertical-align: middle;
                            text-align: center;
                            color: #4D4F5C;                
                            &__statusaction {
                                height: 40px;
                                width: 120px;
                                border-radius: 25px;
                                background-color: rgba(255,114,133,0.2);
                                margin: auto;
                                padding: 11px 0;
                                &__status {
                                }
                            }
                        }
                    }
                }
                
                
            }
            &__more {
                &__area {
                    text-align: center;
                    &__showmore {
                    }
                }
            } 
        
        }
    }

       input[type=checkbox] {
  display: none;
}
.control {
    text-align: center;
}
.checkbox {
  box-sizing: border-box;
  -webkit-transition: background-color 0.2s linear;
  transition: background-color 0.2s linear;
  position: relative;
  display: inline-block;
  margin: 4px 10px;
  padding: 12px 12px 12px 42px;
  border-radius: 8px;
  vertical-align: middle;
  cursor: pointer;
}
.checkbox:hover {
}
.checkbox:hover:after {
}
.checkbox:after {
  -webkit-transition: border-color 0.2s linear;
  transition: border-color 0.2s linear;
  position: absolute;
  top: 50%;
  left: 15px;
  display: block;
  margin-top: -10px;
  width: 16px;
  height: 16px;
  border: 2px solid #bbb;
  border-radius: 6px;
  content: '';
}
.checkbox:before {
  -webkit-transition: opacity 0.2s linear;
  transition: opacity 0.2s linear;
  position: absolute;
  top: 50%;
  left: 21px;
  display: block;
  margin-top: -7px;
  width: 5px;
  height: 9px;
  border-right: 3px solid #53b300;
  border-bottom: 3px solid #53b300;
  content: '';
  opacity: 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
input[type=checkbox]:checked + .checkbox:before {
  opacity: 1;
}
</style>