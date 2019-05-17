// import http from '../../../services/http';
// import urls from '../../utils/url';
import types from '../../mutation-types';
import taskDB from '../DB/task/task.json';

const state = {
    task: {},
}

const actions = {
    // fetchTaskState({ commit }) {
    //         http.get(urls.TASKS_URL, res => {
    //             console.log(res.data)
    //             commit(types.GET_TASK_DATA, res.data)
    //         });
    //     },
    fetchTaskState({ commit }) {
        commit(types.GET_TASK_DATA, taskDB);
    }
};

const mutations = {
    [types.GET_TASK_DATA](state, payload) {
        Object.assign(state, { task: payload });  
    },
};

const getters = {
    task: state => state.task,
};

export default({
    state,
    mutations,
    getters,
    actions
});