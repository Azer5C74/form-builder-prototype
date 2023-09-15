<template>
  <h4>{{ settings.question }}</h4>
  <textarea
    class="form-control"
    :rows="settings.size"
  />
</template>

<script>
export default {
  id: 'long_text',
  title: 'Lange tekst',
  settings: [
    {
      $formkit: 'text',
      name: 'question',
      value: 'Wat zijn je woonwensen?',
      label: 'Vraag',
      validation: 'required'
    },
    {
      $formkit: 'range',
      name: 'size',
      value: 10,
      label: 'Grootte tekstveld',
      min: 1,
      max: 50
    }
  ],

  props: {
    settings: Object
  }
}
</script>
