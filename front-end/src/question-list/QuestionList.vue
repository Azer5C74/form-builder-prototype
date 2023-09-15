<template>
  <Draggable
    v-model="store.questions"
    item-key="id"
  >
    <template #item="{ element: question }">
      <QuestionListItem :question="question" />
    </template>
  </Draggable>

  <b-dropdown
    block
    text="Vraag toevoegen"
    class="mb-3"
  >
    <b-dropdown-item
      v-for="questionType in questionTypes"
      :key="questionType.id"
      @click="store.add(questionType)"
    >
      {{ questionType.title }}
    </b-dropdown-item>
  </b-dropdown>
</template>

<script>
import questionTypes from '../question-types'
import { useQuestionStore } from '../store'
import QuestionListItem from './QuestionListItem.vue'
import Draggable from 'vuedraggable'

export default {
  components: { QuestionListItem, Draggable },

  setup () {
    const store = useQuestionStore()

    return {
      store,
      questionTypes
    }
  }
}
</script>
