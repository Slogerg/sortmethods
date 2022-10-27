import { ref } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";

axios.defaults.baseURL = "http://127.0.0.1:80/api/v1/"

export default function useSlide() {
    const errors = ref([]);
    const router = useRouter();
    const calcResult = async (data) => {
        console.log(data);
        try {
            await axios.post("slide/calcResult",data,{
                headers : {
                    'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
                }
            });
            await router.push({name: "SlideIndex"});
        } catch (e) {
            if(e.response === 442) {
                e.value = e.response.data.errors;
            }
        }
    }
    return {
        calcResult
    }
}
