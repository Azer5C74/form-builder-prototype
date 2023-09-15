import { defineStore } from 'pinia'
import { nanoid } from 'nanoid'
import axios from 'axios'

const api = axios.create({
  baseURL: import.meta.env.VITE_API_URL
})

export const useQuestionStore = defineStore('question', {
  state () {
    return {
      questions: [],
      selectedQuestion: null
    }
  },

  actions: {
    add (questionType) {
      const question = {
        id: nanoid(),
        type: questionType.id,
        settings: {}
      }

      this.questions.push(question)
      this.select(question)
    },

    remove (question) {
      this.questions = this.questions.filter(q => q.id !== question.id)
    },

    select (question) {
      this.selectedQuestion = question
    },

    load () {
      api.get('/questions').then((result) => {
        this.questions = result.data
      })
    },

    save () {
      api.put('/questions', this.questions)
    }
  }
})
