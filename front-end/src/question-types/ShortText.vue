<template>
  <h4>{{ settings.question }}</h4>
  <input class="form-control">
</template>

<script>
export default {
  id: 'short_text',
  title: 'Korte tekst',
  settings: [
    {
      $formkit: 'text',
      name: 'question',
      value: 'Wat is je naam?',
      label: 'Vraag',
      validation: 'required'
    }
  ],

  props: {
    settings: Object
  }
}
</script>
