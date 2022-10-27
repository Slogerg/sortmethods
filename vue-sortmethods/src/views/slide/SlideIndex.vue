<script setup>
    import useSlide from "@/composables/slide";
    import {reactive} from "vue";
    const {calcResult} = useSlide();

    const form = reactive({
        array: "",
        slice: ""
    });


</script>
<template>
    <form @submit.prevent="calcResult(form)">
        <div class="grid gap-4 mb-6 grid-cols-3 pt-32">
            <div class="col-span-2">
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Enter array</label>
                <input
                    type="text"
                    name="array"
                    v-model="form.array"
                    class="
                    bg-gray-50
                    border
                    border-gray-300
                    text-gray-900
                    text-sm
                    rounded-lg
                    focus:ring-blue-500
                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                    dark:text-white
                    dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1,2,3,4,5,6,7" required>
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Slice</label>
                <input type="text" name="slice" v-model="form.slice" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="4" required>
            </div>
        </div>


        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
</template>
