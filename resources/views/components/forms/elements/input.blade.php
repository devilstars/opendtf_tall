<div>
    <label class="block text-gray-700 text-sm font-bold mb-2" :for="id">
        {{ label }}
    </label>
    <input
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        :id="id"
        :type="type"
        :placeholder="placeholder"
        v-model="data[id]"
        :class="{'mb-3 border-red-500': checkValidationError(id)}">
    <template v-if="checkValidationError(id)" v-for="(item, index) in errors[id]">
        <p class="text-red-500 text-xs italic" :key="id + '_' + index">{{ item }}</p>
    </template>
</div>
