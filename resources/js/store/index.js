import Vue from 'vue';
import Vuex from 'vuex';

import project from "./modules/project/project";
import project_detail from "./modules/project/project_detail";
import project_task from "./modules/project/project_task";
import project_activityLog from "./modules/project/project_activityLog";

import task from "./modules/task/task";

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        project: project,
        project_detail: project_detail,
        project_task: project_task,
        project_activityLog: project_activityLog,
        task: task
    }
});
