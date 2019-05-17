// import http from '../../services/http';
// import urls from '../../utils/url';
import types from '../../mutation-types';
import project_activityLog_DB from '../DB/project/project_activityLog.json'

const state = {
    project_activityLogs : {}
};

const actions = {
    //APIを叩く
    // fetchProjectDetailData({ commit }, payload) {
    //     http.get('projectActivityLogUrl', payload, res => {
    //         commit('success', res.data);
    //     });
    // },
    fetchProjectActivityLogData({ commit }) {
        commit(types.GET_PROJECT_ACTIVITY_LOG_DATA, project_activityLog_DB);
    }
};

const mutations = {
    [types.GET_PROJECT_ACTIVITY_LOG_DATA](state, payload) {
        Object.assign(state, { project_activityLogs : payload });
    },
};

const getters = {
    project_activityLogs: state => state.project_activityLogs
};

export default {
    state,
    mutations,
    getters,
    actions
};


