<template>
  <b-card
    :title="question.settings.question"
    :subtitle="questionType.title"
    :class="{ 'bg-light border-primary': isSelected }"
    class="mb-3"
    @click="store.select(question)"
  >
    <b-button
      v-b-tooltip="'Vraag verwijderen'"
      variant="light"
      size="sm"
      class="remove-button"
      @click="store.remove(question)"
    >
      ❌
    </b-button>
  </b-card>
</template>

<script>
import questionTypes from '../question-types'
import { useQuestionStore } from '../store'

export default {
  props: {
    question: Object
  },

  setup () {
    const store = useQuestionStore()

    return { store }
  },

  computed: {
    questionType () {
      return questionTypes.find(type => type.id === this.question.type)
    },

    isSelected () {
      return this.store.selectedQuestion?.id === this.question.id
    }
  }
}
</script>

<style scoped>
.remove-button {
  position: absolute;
  top: 10px;
  right: 10px;
  padding: 4px;
}
</style>
