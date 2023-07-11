import { createStore } from 'vuex'
import axios from 'axios'

const store = createStore({
    state() {
        return {
            boardData: [], // 게시글 데이터 저장
            lastId: '', // 가장 마지막에 로드된 게시물의 ID
            tabflg: 0, // tab ul flg (0:메인/1:필터/2:작성)
            imgUrl: '', // img url
            filter: '', // filter
        }
    },
    mutations:{ // 일반적인 js 함수
        // 초기 데이터 셋팅용
        createBoardData(state, data) {
            state.boardData = data;
            this.commit('changeLastId', data[data.length-1].id);
        },
        // 더보기 데이터 셋팅용
        addBoardData(state, data) {
            state.boardData.push(data);
            this.commit('changeLastId', data.id);
        },
        // lastId 변경
        changeLastId(state, id) {
            state.lastId = id;
        },
        // tab ul flg 변경
        changeTabFlg(state, num) {
            state.tabflg = num;
        },
        // img url 변경
        changeImgUrl(state, imgUrl) {
            state.imgUrl = imgUrl;
        },
        changeFilter(state, filter) {
            state.filter = filter;
        },
        clearState(state){
            state.filter = '';
        }
    },
    actions: { // ajax 등 비동기처리
        getMainList(context) {
            axios.get('http://192.168.0.66/api/boards') // api 주소
            .then(res => { // 성공 시 처리
                console.log(res.data);
                // context.boardData = res.data;
                context.commit('createBoardData', res.data); // commit(함수명, 데이터), createBoardData에 res.data 저장
            })
            .catch(err => {
                console.log(err);
            })
        },
        // 더보기 클릭 시 api 요청
        getMoreList(context) {
            axios.get('http://192.168.0.66/api/boards/' + context.state.lastId)
            .then(res => {
                if(res.data){
                    context.commit('addBoardData', res.data);
                }
                else{
                    document.getElementById('morebtn').style.display = 'none';
                }
            })
            .catch(err => {
                console.log(err);
            })
        }
    }
})

export default store