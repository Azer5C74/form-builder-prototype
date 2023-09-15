<template>
  <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
      <span class="navbar-brand">Form builder prototype</span>

      <b-button
        variant="light"
        @click="store.save"
      >
        💾 Opslaan
      </b-button>
    </div>
  </nav>

  <main class="row g-0 h-100">
    <div class="col-lg-3 p-3 border-end border-bottom">
      <QuestionList />
    </div>

    <div
      v-if="store.selectedQuestion"
      class="col d-flex flex-column"
    >
      <div class="p-4">
        <h3 class="mb-4">
          Instellingen
        </h3>

        <FormKit
          :key="store.selectedQuestion.id"
          v-model="store.selectedQuestion.settings"
          type="form"
          :actions="false"
        >
          <FormKitSchema :schema="selectedQuestionType.settings" />
        </FormKit>
      </div>

      <div class="flex-fill border-top p-4 bg-light">
        <span class="badge text-bg-primary mb-2">PREVIEW</span>

        <component
          :is="selectedQuestionType"
          :settings="store.selectedQuestion.settings"
        />
      </div>
    </div>
  </main>
</template>

<script>
import questionTypes from './question-types'
import QuestionList from './question-list/QuestionList.vue'
import { useQuestionStore } from './store'

export default {
  components: { QuestionList },

  setup () {
    const store = useQuestionStore()

    return { store }
  },

  computed: {
    selectedQuestionType () {
      return questionTypes.find(type => type.id === this.store.selectedQuestion?.type)
    }
  },

  created () {
    this.store.load()
  }
}
</script>
