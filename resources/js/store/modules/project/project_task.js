// import http from '../../services/http';
// import urls from '../../utils/url';
import types from '../../mutation-types';
import project_task_DB from '../DB/project/project_task.json'

const state = {
    project_tasks : {}
};

const actions = {
    //APIを叩く
    // fetchProjectTaskData({ commit }, payload) {
    //     http.get('projectUrl', payload, res => {
    //         commit('success', res.data);
    //     });
    // },
    fetchProjectTaskData({ commit }) {
        commit(types.GET_PROJECT_TASK_DATA, project_task_DB);
    }
};

const mutations = {
    [types.GET_PROJECT_TASK_DATA](state, payload) {
        Object.assign(state, { project_tasks : payload });
    },
};

const getters = {
    project_tasks: state => state.project_tasks
};

export default {
    state,
    mutations,
    getters,
    actions
};


