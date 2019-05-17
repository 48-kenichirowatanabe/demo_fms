// import http from '../../../services/http';
// import urls from '../../utils/url';
import types from '../../mutation-types';
import projectDB from '../DB/project/project.json'

const state = {
    projects : {}
};

const actions = {
    //APIを叩く
    // fetchProjectData({ commit }) {
    //     http.get(urls.PROJECTS_URL, res => {
    //         console.log(res.data)
    //         commit(types.GET_PROJECT_DATA, res.data)
    //     });
    // },
    fetchProjectData({ commit }) {
        commit(types.GET_PROJECT_DATA, projectDB);
    }
};

const mutations = {
    [types.GET_PROJECT_DATA](state, payload) {
        Object.assign(state, { projects : payload });
    },
};

const getters = {
    projects: state => state.projects 
};

export default {
    state,
    mutations,
    getters,
    actions
};


