<template>
  <q-page class="flex flex-center">
    <q-btn @click="getWords" label="Carregar Palavras" />
    <div v-if="words.length">
      <ul>
        <li v-for="word in words" :key="word.id">{{ word.word }}: {{ word.definition }}</li>
      </ul>
    </div>
  </q-page>
</template>

<script setup>
import { ref } from 'vue'
import { QBtn } from 'quasar'

const words = ref([])

const getWords = async () => {
  try {
    const response = await fetch('http://localhost/backend/public/index.php')
    const data = await response.json()
    words.value = data
  } catch (error) {
    console.error('Erro ao buscar palavras:', error)
  }
}
</script>
