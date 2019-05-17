// import http from '../../services/http';
// import urls from '../../utils/url';
import types from '../../mutation-types';
import project_detail_DB from '../DB/project/project_detail.json'

const state = {
    project_details : {}
};

const actions = {
    //APIを叩く
    // fetchProjectDetailData({ commit }, payload) {
    //     http.get('projectUrl', payload, res => {
    //         commit('success', res.data);
    //     });
    // },
    fetchProjectDetailData({ commit }) {
        commit(types.GET_PROJECT_DETAIL_DATA, project_detail_DB);
    }
};

const mutations = {
    [types.GET_PROJECT_DETAIL_DATA](state, payload) {
        Object.assign(state, { project_details : payload });
    },
};

const getters = {
    project_details: state => state.project_details
};

export default {
    state,
    mutations,
    getters,
    actions
};


